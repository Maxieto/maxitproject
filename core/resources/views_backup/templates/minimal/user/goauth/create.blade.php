@include(activeTemplate().'layouts.new_user')
 @include('partials.notify-css')
<section class="slice">
      <div class="container">

         <div class="row">
          <div class="col-md-12">
           <div class="actions-toolbar" style="margin-bottom:20px">
                  <h4 class="mb-1">{{__($page_title)}}</h4>
            </div>
           </div>
         </div>
        <div class="row row-grid">
           <div class="col-md-6">
                     @if(Auth::user()->ts)
                            <div class="card">
                                <h5 class="card-header card-header-bg" style="background-color: #6E00FF;color: white;font-weight: bold;" >@lang('Two Factor Authenticator')</h5>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" value="{{$prevcode}}"
                                                    class="form-control form-control-lg" id="referralURL"
                                                    readonly>
                                            <div class="input-group-append">
                                        <span class="input-group-text copytext" id="copyBoard"
                                                onclick="myFunction()"> <i class="fa fa-copy"></i> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mx-auto text-center">
                                        <img class="mx-auto" src="{{$prevqr}}">
                                    </div>

                                    <div class="form-group mx-auto text-center">
                                        <a href="#0"  class="btn btn-block btn-lg btn-danger"  data-toggle="modal" data-target="#disableModal">@lang('Disable Two Factor Authenticator')</a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="card">

                            <h5 class="card-header card-header-bg" style="background-color: #6E00FF;color: white;font-weight: bold;" > @lang('Two Factor Authenticator')</h5>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="key" value="{{$secret}}"
                                                    class="form-control form-control-lg" id="referralURL"
                                                    readonly>
                                            <div class="input-group-append">
                                        <span class="input-group-text copytext" id="copyBoard"
                                                onclick="myFunction()"> <i class="fa fa-copy"></i> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mx-auto text-center">
                                        <img class="mx-auto" src="{{$qrCodeUrl}}">
                                    </div>
                                    <div class="form-group mx-auto text-center">

                                        <a href="#0" class="btn btn-success btn-lg mt-3 mb-1"
                                            data-toggle="modal"
                                            data-target="#enableModal">@lang('Enable Two Factor Authenticator')</a>
                                    </div>

                                </div>
                            </div>

                        @endif
           </div>

           <div class="col-md-6">
                <div class=" card">
                <h5 class="card-header card-header-bg" style="background-color: #6E00FF;color: white;font-weight: bold;" > @lang('Google Authenticator')</h5>
                        <div class=" card-body">
                            <h5 class="text-uppercase">@lang('Use Google Authenticator to Scan the QR code  or use the code')</h5>
                            <hr/>
                            <p>@lang('Google Authenticator is a multifactor app for mobile devices. It generates timed codes used during the 2-step verification process. To use Google Authenticator, install the Google Authenticator application on your mobile device.')</p>
                            <a class="btn btn-success btn-md mt-3"
                                href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en"
                                target="_blank">@lang('DOWNLOAD APP')</a>
                        </div>
                </div><!-- //. single service item -->
           </div>

       </div>
      </div>
    </section>
</div>


<footer class="footer p-0 footer-light bg-section-secondary" id="footer-main">


<div class="container">
 <div class="py-4">
   <div class="row align-items-md-center">
     <div class="col-md-4 mb-4 mb-md-0">
       <div class="d-flex align-items-center">
         <p class="text-sm mb-0">&copy; Purpose. 2019 <a href="https://webpixels.io" target="_blank">Webpixels</a>. All rights reserved.</p>
       </div>
     </div>
     <div class="col-sm-6 col-md-4 mb-4 mb-sm-0">
       <ul class="nav justify-content-center">
         <li class="nav-item">
           <a class="nav-link" href="../../pages/utility/support.html">Support</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="../../pages/utility/terms.html">Terms</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="../../pages/utility/privacy.html">Privacy</a>
         </li>
       </ul>
     </div>
     <div class="col-sm-6 col-md-4">
       <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
         <li class="nav-item">
           <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
             <i class="fab fa-dribbble"></i>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank">
             <i class="fab fa-instagram"></i>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="https://github.com/webpixels" target="_blank">
             <i class="fab fa-github"></i>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
             <i class="fab fa-facebook"></i>
           </a>
         </li>
       </ul>
     </div>
   </div>
 </div>
</div>
</footer>

   <!--Enable Modal -->
   <div id="enableModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">@lang('Verify Your OTP')</h6>
                    <a href="javascript:void(0)" class="close" data-dismiss="modal">&times;</a>
                </div>
                <form action="{{route('user.go2fa.create')}}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="key" value="{{$secret}}">
                            <input type="text" class="form-control" name="code" placeholder="@lang('Enter Google Authenticator Code')">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-lg">@lang('Verify')</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <!--Disable Modal -->
        <div id="disableModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">@lang('Verify Your OTP to Disable')</h6>
                    <a  href="javascript:void(0)"  class="close" data-dismiss="modal">&times;</a>
                </div>
                <form action="{{route('user.disable.2fa')}}" method="POST">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="code" placeholder="@lang('Enter Google Authenticator Code')">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-lg">@lang('Verify')</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <script>
        function myFunction() {
            var copyText = document.getElementById("referralURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            var alertStatus = "{{$general->alert}}";
            if (alertStatus == '1') {
                iziToast.success({message: "Copied: " + copyText.value, position: "topRight"});
            } else if (alertStatus == '2') {
                toastr.success("Copied: " + copyText.value);
            }
        }
    </script>


<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="{{asset('assets_new/js/purpose.core.js') }}"></script>
<!-- Purpose JS -->
<script src="{{asset('assets_new/js/purpose.js') }}"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="{{asset('assets_new/js/demo.js') }}"></script>
</body>



</html>



@yield('load-js')
<script src="{{asset('assets/templates/minimul/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/templates/minimul/js/wow.min.js')}}"></script>
<script src="{{asset('assets/templates/minimul/js/odometer.min.js')}}"></script>
<script src="{{asset('assets/templates/minimul/js/viewport.jquery.js')}}"></script>
<script src="{{asset('assets/templates/minimul/js/nice-select.js')}}"></script>
@include('partials.notify-js')
<script src="{{asset('assets/templates/minimul/js/paroller.js')}}"></script>
<script src="{{asset('assets/templates/minimul/js/main.js')}}"></script>
@yield('script')
@stack('js')
<script>
    $(document).on("change", ".langSel", function() {
        window.location.href = "{{url('/')}}/change-lang/"+$(this).val() ;
    });
</script>


@php
    if($plugins[0]->status == 1){
        $appKeyCode = $plugins[0]->shortcode->app_key->value;
        $twakTo = str_replace("{{app_key}}",$appKeyCode,$plugins[0]->script);
        echo $twakTo;
    }
@endphp




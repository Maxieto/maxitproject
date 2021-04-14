@include(activeTemplate().'layouts.new_user')
 @include('partials.notify-js')
 @include('partials.notify-css')

 @section('style')
<style>

    .pincode-input-container{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .pincode-input-container .pincode-input-text {
        /*margin-left: 5px;*/
        text-align: center;
        font-weight: 600;
        font-size: 48px;
        border: 2px solid #000036;
        color: #{{$general->bclr}};
    }
    .login-area .login-form .frm-grp input {
        padding:inherit;
    }
    .pincode-input-text, .form-control.pincode-input-text {
        width: 60px;
        height: 60px !important;
    }
</style>
@stop

<section class="slice">
    <div class="container">

       <div class="actions-toolbar py-2 mb-5">
                <h3 class="mb-1" style="background-color:#6E00FF;font-weight:bold; color:white ">{{__($page_title)}} </h3>
        </div>

        <div class="account--section sign-in-section active relative">
           <div class="container-fluid">
             <div class="account--area">
                <h4 class="title text-center text-danger">{{ 'Reset Password' }}</h4>
             </div>
          </div>
       </div>

        <div class="row">
            <div class="col-lg-7 offset-md-3   col-md-7 offset-lg-3  ">

                <form method="POST" action="{{ route('user.password.update') }}" >
                    @csrf

                    <input type="hidden" name="email" value="{{ $email }}">
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">@lang('New Password')</label>
                        <input type="password" class="form-control" id="password" placeholder="@lang('New Password')" name="password" required="" value="">
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-form-label">@lang('Retype New Password')</label>
                        <input type="password" class="form-control" id="password_confirmation" placeholder="@lang('Confirm Password')" name="password_confirmation" required="" value="">
                    </div>

                    <div class="form-group ">
                        <button type="submit" class="btn btn-sm btn-primary btn-icon rounded-pill">
                            @lang('Reset Password')
                        </button>
                    </div>

                    <div class="form-group">
                        <div class="remember mr-5">
                            <label class="form-check-label" for="gridCheck1">
                                <a href="{{ route('user.login') }}" >@lang('Login Here')</a>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-md-2"> </div>
        </div>
    </div>

</section>


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

<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="{{asset('assets_new/js/purpose.core.js') }}"></script>
<!-- Purpose JS -->
<script src="{{asset('assets_new/js/purpose.js') }}"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="{{asset('assets_new/js/demo.js') }}"></script>
</body>




    <script>
        function extraTicketAttachment() {
            $("#fileUploadsContainer").append('<input type="file" name="attachments[]" class="form-control form-control-lg mt-2" required />')
        }
        function formReset() {
            window.location.href = "{{url()->current()}}"
        }
    </script>


@push('style-lib')
<link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-pincode-input.css') }}"/>
@endpush

@push('js')
<script src="{{ asset('assets/admin/js/bootstrap-pincode-input.js') }}"></script>
@endpush


@push('js')
<script>
    $('#pincode-input').pincodeInput({
        inputs:6,
        placeholder:"- - - - - -",
        hidedigits:false
    });
</script>

</html>

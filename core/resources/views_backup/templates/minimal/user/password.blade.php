@include(activeTemplate().'layouts.new_user')
 @include('partials.notify-js')
 @include('partials.notify-css')
<section class="slice">
      <div class="container">
        <div class="row row-grid">
          <div class="col-lg-9 order-lg-2">

          <form action="" method="post" enctype="multipart/form-data">
                    @csrf
              <!-- Password -->
               <div class="actions-toolbar py-2 mb-4">
                  <h3 class="mb-1" style="background-color:#6E00FF;font-weight:bold; color:white;height: 50px;padding-top: 6px;">
                    <span style="padding: 15px;">{{__($page_title)}} </span>
                  </h3>
                </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">@lang('Current Password:')</label>
                    <input type="password" class=" form-control " id="CurrentPassword" name="current_password" placeholder="@lang('Current Password')">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">lang('New Password')</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="@lang('New Password')">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">@lang('Confirm Password')</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="@lang('Confirm Password')">
                  </div>
                </div>
              </div>
              <div class="mt-4">

                <button type="submit" class="btn btn-sm btn-primary">@lang('Change Password')</button>
              </div>
            </form>
            <!-- Username -->

            <!-- Delete -->
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
            @foreach($company_policy as $policy)
              <li>
                    <a  class="nav-link"  href="{{route('home.policy',[$policy, str_slug($policy->value->title)])}}">
                    {{__($policy->value->title)}}
                </a>
              </li>
           @endforeach

              <li><a  class="nav-link" href="{{ url('/contact') }}">Contact
                 </a>
            </li>

         </ul>
     </div>
     <div class="col-sm-6 col-md-4">
       <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
         <li class="nav-item">
           <a class="nav-link" href="#" target="_blank">
             <i class="fab fa-dribbble"></i>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#" target="_blank">
             <i class="fab fa-instagram"></i>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#" target="_blank">
             <i class="fab fa-github"></i>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#" target="_blank">
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

</html>

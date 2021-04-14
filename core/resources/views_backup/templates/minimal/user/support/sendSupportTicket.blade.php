@include(activeTemplate().'layouts.new_user')
 @include('partials.notify-js')
 @include('partials.notify-css')
<section class="slice">
      <div class="container">

      <div class="actions-toolbar py-2 mb-4">
                <h3 class="mb-1" style="background-color:#6E00FF;font-weight:bold; color:white ">{{__($page_title)}} </h3>
                <a href="{{route('user.ticket') }}" class="btn btn-custom float-right" data-toggle="tooltip" data-placement="top" title="@lang('My Support Ticket')">
                      <i class="fa fa-eye"></i> @lang('See All')
                </a>
     </div>

        <div class="row row-grid">
          <div class="col-lg-9 order-lg-2">

          <form  action="{{route('user.ticket.store')}}" role="form" method="post" enctype="multipart/form-data" id="recaptchaForm">
                    @csrf
              <!-- Password -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">@lang('Name')</label>
                    <input type="text"  name="name" value="{{$user->firstname . ' '.$user->lastname}}" class="form-control" placeholder="@lang('Enter Name')" required readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">@lang('Email address') </label>
                    <input type="email"  name="email" value="{{$user->email}}" class="form-control" placeholder="@lang('Enter your Email')" required readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div  class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">@lang('Subject') </label>
                    <input type="text" name="subject" value="{{old('subject')}}" class="form-control" placeholder="@lang('Subject')" >
                  </div>
                </div>
                  <div class="form-group col-md-6">
                         <label for="priority">@lang('Priority')</label>
                        <select class="form-control required" name="priority" required>
                            <option value="medium">@lang('Medium')</option>
                            <option value="high">@lang('High')</option>
                            <option value="low">@lang('Low')</option>
                        </select>
                   </div>
              </div>

              <div class="row">
                    <div class="col-12 form-group">
                        <label class="form-control-label">@lang('Message')</label>
                        <textarea name="message" id="inputMessage" rows="12" class="form-control">{{old('message')}}</textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-12">
                        <label for="inputAttachments">@lang('Attachments')</label>
                    </div>
                    <div class="col-sm-9 file-upload">
                        <input type="file" name="attachments[]" id="inputAttachments" class="form-control" />
                        <div id="fileUploadsContainer"></div>
                    </div>

                    <div class="col-sm-3">
                        <button type="button" class="btn btn-custom" onclick="extraTicketAttachment()">
                            <i class="fa fa-plus"></i> @lang('Add More')
                        </button>
                    </div>
                    <div class="col-sm-12 ticket-attachments-message text-muted">
                        @lang("Allowed File Extensions: .jpg, .jpeg, .png, .pdf, .doc, .docx")
                    </div>
                </div>

                <div class="row form-group justify-content-center">
                    <div class="col-md-6">
                        <button  class="btn  btn-primary mt-3"  type="submit" id="recaptcha" ><i class="fa fa-paper-plane"></i>&nbsp;@lang('Submit Now')</button>
                    </div>

                    <div class="col-md-6">
                        <button class=" btn btn-danger mt-3" type="button" onclick="formReset()">&nbsp;@lang('Cancel')</button>
                    </div>
                  </div>


              <!-- <div class="mt-4">

                <button type="submit" class="btn btn-sm btn-primary">@lang('Change Password')</button>
              </div> -->
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


@if($plugins[2]->status == 1)
        <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
        @php echo recaptcha() @endphp
    @endif


    <script>
        function extraTicketAttachment() {
            $("#fileUploadsContainer").append('<input type="file" name="attachments[]" class="form-control form-control-lg mt-2" required />')
        }
        function formReset() {
            window.location.href = "{{url()->current()}}"
        }
    </script>


</html>

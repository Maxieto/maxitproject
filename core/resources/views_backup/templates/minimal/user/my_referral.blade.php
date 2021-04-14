@include(activeTemplate().'layouts.new_user')
 @include('partials.notify-js')
 @include('partials.notify-css')

 <section class="slice slice-lg">
      <div class="container">

      <div class="actions-toolbar py-2 mb-4">
                <h3 class="mb-1" style="background-color:#6E00FF;font-weight:bold; color:white;height: 50px;padding-top: 6px;">
                    <span style="padding: 15px;">{{__($page_title)}} </span>
                </h3>
        </div>
       <div class="row">
            <div class="col-md-6">
            </div>
           <div class="row mb-6 ">
                    <div class="banner-form-group">
                        <div class="input-group">
                            <input type="text" name="text" class="form-control"
                                    id="referralURL"
                                    value="{{route('refer.register',[Auth::user()->username])}}"
                                    readonly>
                            <div class="input-group-append">
                                <span class="input-group-text copytext" id="copyBoard"
                                        onclick="myFunction()"> <i
                                        class="fa fa-copy"  style="background-color:#6E00FF"></i>

                                         </span>
                            </div>
                        </div>
                    </div>
                </div>
         </div>

        <!-- Shopping cart table -->
        <div class="table-responsive">
          <table class="table table-cards align-items-center">
            <thead>
              <tr>
              <th scope="col">@lang('Date')</th>
                 <th scope="col">@lang('Commission Via')</th>
                 <th scope="col">@lang('Description')</th>
                    <th scope="col">@lang('Level Commission')</th>
                    <th scope="col">@lang('Amount')</th>
                    <th scope="col">@lang('After Balance')</th>
              </tr>
            </thead>
            <tbody class="list">
            @if(count($trans)==0)
                   <tr>
                         <td colspan="5"
                        class="text-center">@lang('No Data Available')</td>
                     </tr>
                  @endif

                  @foreach($trans as $data)
                        <tr @if($data->amount < 0) style="background-color: #e4afaf" @endif>
                            <td data-label="@lang('Date')">{{date('d M, Y h:i:s A', strtotime($data->created_at))}}</td>
                            <td data-label="@lang('Commission Via')">
                            <strong>{{$data->bywho->username}}</strong></td>
                            <td data-label="@lang('Description')">{{__($data->title)}}</td>
                            <td data-label="@lang('Level Commission')">{{__($data->level)}}</td>
                            <td data-label="@lang('Amount')">{{__($general->cur_sym)}} {{formatter_money($data->amount)}}</td>
                            <td data-label="@lang('After Balance')">{{__($general->cur_sym)}} {{formatter_money($data->main_amo)}}</td>
                        </tr>
                      @endforeach
            </tbody>
          </table>
        </div>
        <!-- Cart information -->

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

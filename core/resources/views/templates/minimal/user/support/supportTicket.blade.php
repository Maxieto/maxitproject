@include(activeTemplate().'layouts.new_user')
 @include('partials.notify-js')
 @include('partials.notify-css')

 <section class="slice slice-lg">
      <div class="container">

        <div class="actions-toolbar py-2 mb-4">
            <h3 class="mb-1" style="background-color:#6E00FF;font-weight:bold; color:white;height: 50px;padding-top: 6px;">
                        <span style="padding: 15px;">{{__($page_title)}} </span>
            </h3>
            <a href="{{route('user.ticket.open') }}" class="btn btn-custom float-right" data-toggle="tooltip" data-placement="top" title="@lang('Open New Support Ticket')">
                 <i class="fa fa-plus"></i> @lang('Create')
           </a>
        </div>

       <div class="row">
        <!-- Shopping cart table -->
            <div class="table-responsive">
            <table class="table table-cards align-items-center">
                <thead>
                <tr>
                    <th scope="col">@lang('SL')</th>
                    <th scope="col">@lang('Date')</th>
                    <th scope="col">@lang('Ticket Number')</th>
                    <th scope="col">@lang('Subject')</th>
                    <th scope="col">@lang('Status')</th>
                    <th scope="col">@lang('Action')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($supports as $key => $support)
                    <tr>
                        <td data-label="@lang('SL')">{{ ++$key }}</td>
                        <td data-label="@lang('Date')">{{ $support->created_at->format('d M, Y h:i A') }}</td>
                        <td data-label="@lang('Ticket')">#{{ $support->ticket }}</td>
                        <td data-label="@lang('Subject')">{{ $support->subject }}</td>
                        <td data-label="@lang('Status')">
                            @if($support->status == 0)
                                <span class="badge badge-primary">@lang('Open')</span>
                            @elseif($support->status == 1)
                                <span class="badge badge-success "> @lang('Answered')</span>
                            @elseif($support->status == 2)
                                <span class="badge badge-info"> @lang('Customer Replied')</span>
                            @elseif($support->status == 3)
                                <span class="badge badge-danger ">@lang('Closed')</span>
                            @endif
                        </td>

                        <td data-label="@lang('Action')">
                            <a href="{{ route('user.message', $support->ticket) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            </div>
         {{$supports->links()}}
        </div>
        <!-- Cart information -->
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

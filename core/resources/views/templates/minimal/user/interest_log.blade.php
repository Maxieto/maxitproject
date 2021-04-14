@include(activeTemplate().'layouts.new_user')
 @include('partials.notify-js')
 @include('partials.notify-css')

   <script>
        function createCountDown(elementId, sec) {
            var tms = sec;
            var x = setInterval(function() {
                var distance = tms*1000;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById(elementId).innerHTML =days+"d: "+ hours + "h "+ minutes + "m " + seconds + "s ";
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById(elementId).innerHTML = "{{__('COMPLETE')}}";
                }
                tms--;
            }, 1000);
        }

    </script>

 <section class="slice slice-lg">
      <div class="container">
      <div class="actions-toolbar py-2 mb-4">
                <h3 class="mb-1" style="background-color:#6E00FF;font-weight:bold; color:white;height: 50px;padding-top: 6px;">
                    <span style="padding: 15px;">{{__($page_title)}} </span>
                </h3>
        </div>

       <div class="row">
        <!-- Shopping cart table -->
        <div class="table-responsive">
          <table class="table table-cards align-items-center">
            <thead>
              <tr>
                <th scope="col">@lang('Plan Name')</th>
                <th scope="col">@lang('Payable Interest')</th>
                <th scope="col">@lang('Period')</th>
                <th scope="col">@lang('Received')</th>
                <th scope="col">@lang('Capital Back')</th>
                <th scope="col">@lang('Invest Amount')</th>
                <th scope="col">@lang('Status')</th>
                <th scope="col" style="width :20%">@lang('Next Payment')</th>
               </tr>
            </thead>
              <tbody>
                  @if(count($trans)==0)
                      <tr>
                          <td colspan="8" class="text-center">@lang('No Data Available')</td>
                      </tr>
                  @endif
                  @foreach($trans as $data)
                      <tr>
                          <td data-label="@lang('Plan Name')">{{__($data->plan->name)}}</td>
                          <td data-label="@lang('Payable Interest')">{{__($general->currency_sym)}} {{__($data->interest)}} / {{__($data->time_name)}} </td>
                          <td data-label="@lang('Period')">@if($data->period == '-1') <span class="badge badge-success">@lang('Life-time')</span>  @else {{__($data->period)}} @lang('Times') @endif</td>
                          <td data-label="@lang('Received')">  {{__($data->return_rec_time)}} @lang('Times') </td>
                          <td data-label="@lang('Capital Back')">@if($data->capital_status == '1') <span class="badge badge-success">@lang('Yes')</span>  @else <span class="badge badge-warning">@lang('No')</span> @endif</td>
                          <td data-label="@lang('Invest Amount')">  {{__($general->currency_sym)}} {{__($data->amount)}} </td>
                          <td data-label="@lang('Status')" style="padding-top:20px">  @if($data->status == '1')  <span class="badge badge-warning"><i class="fas fa-spinner fa-spin"></i> @lang('Running')</span>  @else <span class="badge badge-primary">@lang('Complete')</span> @endif </td>
                          <td data-label="@lang('Next Payment')" scope="row" class="font-weight-bold " >  @if($data->status == '1') <p id="counter{{$data->id}}" class="demo countdown timess2 mt-1"></p> @else - @endif </td>

                      </tr>
                  <script>createCountDown('counter<?php echo $data->id ?>', {{\Carbon\Carbon::parse($data->next_time)->diffInSeconds() }}) ;</script>
                     @endforeach
                </tbody>
          </table>

          {{$trans->links()}}
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


<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="{{asset('assets_new/js/purpose.core.js') }}"></script>
<!-- Purpose JS -->
<script src="{{asset('assets_new/js/purpose.js') }}"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="{{asset('assets_new/js/demo.js') }}"></script>
</body>

</html>

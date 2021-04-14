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
        <!-- Shopping cart table -->
        <div class="table-responsive">
          <table class="table table-cards align-items-center">
            <thead>
                <tr>
                <th scope="col">@lang('Transaction ID')</th>
                <th scope="col">@lang('Amount')</th>
                <th scope="col">@lang('Remaining Balance')</th>
                <th scope="col">@lang('Details')</th>
                <th scope="col">@lang('Date')</th>
                </tr>
            </thead>
            <tbody>
               @if(count($logs) >0)
                @foreach($logs as $k=>$data)
                    <tr>
                        <td data-label="#@lang('Trx')">{{$data->trx}}</td>
                        <td data-label="@lang('Amount')">
                            <strong @if($data->type == '+') class="text-success" @else class="text-danger" @endif> {{($data->type == '+') ? '+':'-'}} {{formatter_money($data->amount)}} {{$general->cur_text}}</strong>
                        </td>
                        <td data-label="@lang('Remaining Balance')">
                            <strong class="text-info">{{formatter_money($data->main_amo)}} {{$general->cur_text}}</strong>
                        </td>
                        <td data-label="@lang('Details')">{{$data->title}}</td>
                        <td data-label="@lang('Date')">{{date('d M, Y', strtotime($data->created_at))}}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4"> @lang('No results found')!</td>
                </tr>
            @endif

              </tbody>
          </table>
        </div>

        {{$logs->links()}}
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

@include(activeTemplate() .'layouts.new_user')

    <!-- ========User-Panel-Section Starte Here ========-->
    <section class="slice slice-lg">
        <div class="container">
                <div class="actions-toolbar py-2 mb-4">
                    <h3 class="mb-1" style="background-color:#6E00FF;font-weight:bold; color:white;height: 50px;padding-top: 6px;">
                     <span style="padding: 15px;">{{__($page_title)}} </span>
                    </h3>
                </div>

            <section class="user-panel-section padding-bottom padding-top">
                <div class="container user-panel-container">
                    <div class=" user-panel-tab">
                        <div class="row">
                           <div class="col-lg-2">
                           </div>
                            <div class="col-lg-8" >
                                <div class="tab-area fullscreen-width">
                                    <div class="tab-item active">
                                        <div class="row mb-60-80 justify-content-center">
                                            <div class="col-md-8">
                                                <ul class="list-group text-center">
                                                    <li class="list-group-item">
                                                        <img
                                                            src="{{ $data->gateway_currency()->methodImage() }}"   style="max-width:100px; max-height:100px; margin:0 auto;"/>
                                                    </li>
                                                    <p class="list-group-item">
                                                        @lang('Amount'):
                                                        <strong>{{formatter_money($data->amount)}} </strong> {{$general->cur_text}}
                                                    </p>
                                                    <p class="list-group-item">
                                                        @lang('Charge'):
                                                        <strong>{{formatter_money($data->charge)}}</strong> {{$general->cur_text}}
                                                    </p>
                                                    <p class="list-group-item">
                                                        @lang('Payable'): <strong> {{$data->amount + $data->charge}}</strong> {{$general->cur_text}}
                                                    </p>
                                                    <p class="list-group-item">
                                                        @lang('Conversion Rate'): <strong>1 {{$data->baseCurrency()}}
                                                            = {{formatter_money($data->rate)}} {{$general->cur_text}}  </strong>
                                                    </p>

                                                    <p class="list-group-item">
                                                        @lang('In') {{$data->baseCurrency()}}:
                                                        <strong>{{formatter_money($data->final_amo)}}</strong>
                                                    </p>

                                                    @if($data->gateway->crypto==1)
                                                        <p class="list-group-item">
                                                            @lang('Conversion with')
                                                            <b> {{ $data->method_currency }}</b> @lang('and final value will Show on next step')
                                                        </p>
                                                    @endif
                                                </ul>
                                             <!-- <a href="{{route('user.manualDeposit.confirm')}}"  style="background-color: #a700ff;color: white;font-weight: bold;" class="btn btn-custom2 py-3  btn-block">@lang('Pay Now')</a> -->
                                             <a href="{{route('user.deposit.confirm')}}" class="btn btn-custom2 btn-block py-3 font-weight-bold" style="background-color: #a700ff;color: white;font-weight: bold;" >@lang('Pay Now')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </section>
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
    <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="{{asset('assets_new/js/purpose.core.js') }}"></script>
<!-- Purpose JS -->
<script src="{{asset('assets_new/js/purpose.js') }}"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="{{asset('assets_new/js/demo.js') }}"></script>
    <!-- ========User-Panel-Section Ends Here ========-->


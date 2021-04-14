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
                    <div class="col-lg-9" id="myvideo">
                        <div class="tab-area fullscreen-width">
                            <div class="tab-item active">
                                <div class="row mb-60-80 justify-content-center">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="{{ route('user.manualDeposit.update') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        @php
                                                            $extra = $data->gateway->extra;
                                                        @endphp

                                                        <div class="col-md-12">
                                                            <p class="text-center mt-2">@lang('You have requested ') <b class="text-success">{{ formatter_money($data['amount'])  }} {{$data['method_currency']}}</b> @lang(', Please pay ') <b class="text-success">{{$data['final_amo'] .' '.$data['method_currency'] }}</b> @lang(' for successful payment')</p>
                                                            <h4 class="text-center mb-4">@lang('Please follow the instruction bellow')</h4>

                                                            <p class="my-4"  style="background-color:#6E00FF;font-weight:bold; color:white;">@php echo  $data->gateway->description @endphp</p>
                                                            <p class="text-center mt-3 font-weight-bold"  style="background-color:#6E00FF;font-weight:bold; color:white;">@lang('Delay:') @php echo  $extra->delay @endphp</p>

                                                        </div>



                                                        <div class="col-md-12">
                                                            <div class="form-group mt-4">
                                                                <label for="a-trans"  style="background-color:#6E00FF;font-weight:bold; color:white;"  class="font-weight-bold"> {{__($extra->verify_image)}}</label>
                                                                <input type="file" class="form-control form-control-lg" name="verify_image">
                                                            </div>
                                                        </div>

                                                        @foreach(json_decode($method->parameter) as $input)
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="a-trans"  style="background-color:#6E00FF;font-weight:bold; color:white;"  class="font-weight-bold">{{__($input)}}</label>
                                                                    <input type="text"   style="background-color:#6E00FF;font-weight:bold; color:white;" class="form-control form-control-lg" name="ud[{{str_slug($input) }}]" placeholder="{{ $input }}">
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-custom2    btn-block mt-2 text-center" style="background-color:#6E00FF;font-weight:bold; color:white;height: 50px;padding-top: 6px;" >@lang('Pay Now')</button>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </form>

                                            </div>
                                        </div>
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
                <a class="nav-link" href="" target="_blank">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
     </div>
  </footer>
    <!-- ========User-Panel-Section Ends Here ========-->

    <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
    <script src="{{asset('assets_new/js/purpose.core.js') }}"></script>
<!-- Purpose JS -->
<script src="{{asset('assets_new/js/purpose.js') }}"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="{{asset('assets_new/js/demo.js') }}"></script>
    <!-- ========User-Panel-Section Ends Here ========-->


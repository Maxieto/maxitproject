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
                                        <div class="card card-deposit">
                                            <div class="card-header card-header-bg">
                                                <h5 class="text-center text-white my-1">@lang('Current Balance') : <strong>{{ formatter_money($withdraw->wallet->balance)}}  {{ $general->cur_text }}</strong></h5>
                                            </div>
                                            <div class="card-body card-body-deposit">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="font-weight-boldl"tyle="background-color: #a700ff;color: white;font-weight: bold;" >@lang('Request Amount') : </label>

                                                            <div class="input-group">
                                                                <input type="text" value="{{formatter_money($withdraw->amount )}}" readonly  class="form-control form-control-lg" placeholder="@lang('Enter Amount')">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text ">{{$general->cur_text }} </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="font-weight-bold">@lang('Withdrawal Charge') : </label>
                                                            <div class="input-group">
                                                                <input type="text" value="{{ formatter_money($withdraw->charge) }}" readonly   class="form-control form-control-lg" placeholder="@lang('Enter Amount')">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text ">{{ $general->cur_text}} </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="font-weight-bold">@lang('You Will Get') : </label>
                                                            <div class="input-group">
                                                                <input type="text" value="{{ formatter_money($withdraw->final_amount) }}" readonly class="form-control form-control-lg" placeholder="@lang('Enter  Amount')" required>
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text ">{{ $withdraw->currency }} </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">

                                                            <label class="font-weight-bold">@lang('Available Balance') : </label>
                                                            <div class="input-group">
                                                                <input type="text" value="{{formatter_money($withdraw->wallet->balance - ($withdraw->amount + $withdraw->charge))}}"  class="form-control form-control-lg" placeholder="@lang('Enter Amount')" required readonly>
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text ">{{ $general->cur_text }} </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-8">

                                                     {!!$withdraw->method->description!!}

                                                        <form action="{{route('user.withdraw.submit')}}" method="post" enctype="multipart/form-data">
                                                            @csrf

                                                            @foreach(json_decode($withdraw->detail) as $k=> $value)
                                                                <div class="form-group">
                                                                    <label class="font-weight-bold"> {{str_replace('_',' ',$k)}} </label>
                                                                    <input type="text" name="{{$k}}" value="{{old($k)}}"  class="form-control form-control-lg" placeholder="" >
                                                                </div>
                                                            @endforeach

                                                            <div class="form-group">
                                                                <button type="submit"  style="background-color: #a700ff;color: white;font-weight: bold;" class="btn btn-custom2 mt-4 text-center btn-lg">@lang('Confirm')</button>
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


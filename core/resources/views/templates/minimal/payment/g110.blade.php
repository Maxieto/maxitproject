@extends(activeTemplate() .'layouts.user')

@section('style')

@stop
@section('content')

    @include(activeTemplate().'partials.breadcrumb')
    <!-- ========User-Panel-Section Starte Here ========-->
    <section class="user-panel-section padding-bottom padding-top">
        <div class="container user-panel-container">
            <div class=" user-panel-tab">
                <div class="row">
                    @include(activeTemplate().'partials.sidebar')

                    <div class="col-lg-9" id="myvideo">
                        <div class="user-panel-header mb-60-80">
                            <div class="left d-sm-block d-none">
                                <h6 class="title">{{__($page_title)}}</h6>
                            </div>
                            <ul class="right">
                                <li>
                                    <a href="#0" id="fullScreen"><i class="flaticon-ui-2"></i></a>
                                    <a href="#0" id="exitScreen"><i class="flaticon-ui-1"></i></a>
                                </li>

                                <li>
                                    <a href="#0" class="log-out d-lg-none">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>

                                            <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <div class="tab-area fullscreen-width">
                            <div class="tab-item active">
                                <div class="row mb-60-80 justify-content-center">
                                    <div class="row">
                                        <div class="col-md-4">

                                            <img src="{{$deposit->gateway_currency()->methodImage()}}" class="card-img-top" alt=".." style="width: 100%">
                                        </div>
                                        <div class="col-md-8">
                                            <form action="{{$data->url}}" method="{{$data->method}}">

                                            <h5>@lang('Please Pay') {{formatter_money($deposit->final_amo)}} {{$deposit->method_currency}}</h5>
                                            <h5 class="my-3">@lang('To Get') {{formatter_money($deposit->amount)}}  {{$deposit->method_currency}}</h5>


                                                <script src="{{$data->checkout_js}}"
                                                        @foreach($data->val as $key=>$value)
                                                        data-{{$key}}="{{$value}}"
                                                    @endforeach >

                                                </script>

                                                <input type="hidden" custom="{{$data->custom}}" name="hidden">

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
    </section>
    <!-- ========User-Panel-Section Ends Here ========-->
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

@endsection


@section('load-js')
@stop


@section('script')
    <script>
        $(document).ready(function () {
            $('input[type="submit"]').addClass("ml-4 mt-4 btn-custom2 text-center btn-lg");
        })
    </script>
@endsection

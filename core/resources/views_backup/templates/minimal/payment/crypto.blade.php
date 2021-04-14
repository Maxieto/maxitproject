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
                                            <div class="card">
                                                <div class="card-header card-header-bg">@lang('Payment Preview')</div>
                                                <div class="card-body text-center">
                                                    <h4> @lang('PLEASE SEND EXACTLY') <span style="color: green"> {{ $data->amount }}</span> {{$data->currency}}</h4>
                                                    <h6>@lang('TO') <span style="color: green"> {{ $data->sendto }}</span></h6>
                                                    <img src="{{$data->img}}" alt="">
                                                    <h4 class="text-dark bold">@lang('SCAN TO SEND')</h4>
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
    <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="{{asset('assets_new/js/purpose.core.js') }}"></script>
<!-- Purpose JS -->
<script src="{{asset('assets_new/js/purpose.js') }}"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="{{asset('assets_new/js/demo.js') }}"></script>
    <!-- ========User-Panel-Section Ends Here ========-->


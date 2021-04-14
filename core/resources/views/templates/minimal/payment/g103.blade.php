@include(activeTemplate() .'layouts.new_user')


<section class="slice slice-lg">
      <div class="container">
        <div class="actions-toolbar py-2 mb-4">
                <h3 class="mb-1" style="background-color:#6E00FF;font-weight:bold; color:white;height: 50px;padding-top: 6px;">
                    <span style="padding: 15px;">{{__($page_title)}} </span>
                </h3>
        </div>

    <!-- ========User-Panel-Section Starte Here ========-->
      <section class="user-panel-section padding-bottom padding-top">
            <div class="container user-panel-container">
                <div class=" user-panel-tab">
                    <div class="row">
                            <div class="tab-area fullscreen-width">
                                <div class="tab-item active">
                                    <div class="row  justify-content-center">

                                      <div class="col-md-4">

                                      </div>
                                        <div class="col-md-8">
                                            <div class="card card-deposit">
                                                <div class="card-body card-body-deposit">
                                                    <div class="card-wrapper"></div>
                                                    <br><br>
                                                    <form role="form" id="payment-form" method="{{$data->method}}" action="{{$data->url}}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" value="{{$data->track}}" name="track">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="name">@lang('CARD NAME')</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control  custom-input" name="name"
                                                                        placeholder="@lang('Card Name')" autocomplete="off" autofocus/>
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text addon-bg"><i class="fa fa-font"></i></span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="cardNumber">@lang('CARD NUMBER')</label>
                                                                <div class="input-group">
                                                                    <input type="tel" class="form-control  custom-input"
                                                                        name="cardNumber" placeholder="Valid Card Number" autocomplete="off"
                                                                        required autofocus/>
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text addon-bg"><i class="fa fa-credit-card"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <div class="col-md-6">
                                                                <label for="cardExpiry">@lang('EXPIRATION DATE')</label>
                                                                <input type="tel" class="form-control  input-sz custom-input"
                                                                    name="cardExpiry" placeholder="MM / YYYY" autocomplete="off" required/>
                                                            </div>
                                                            <div class="col-md-6 ">

                                                                <label for="cardCVC">@lang('CVC CODE')</label>
                                                                <input type="tel" class="form-control  input-sz custom-input"
                                                                    name="cardCVC" placeholder="CVC" autocomplete="off" required/>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <button class="btn btn-custom2 btn-lg btn-block text-center" style="background-color:#6E00FF;font-weight:bold; color:white;" type="submit"> @lang('PAY NOW')
                                                        </button>

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
    <!-- ========User-Panel-Section Ends Here ========-->




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://rawgit.com/jessepollak/card/master/dist/card.js"></script>

    <script>
        (function ($) {
            $(document).ready(function () {
                var card = new Card({
                    form: '#payment-form',
                    container: '.card-wrapper',
                    formSelectors: {
                        numberInput: 'input[name="cardNumber"]',
                        expiryInput: 'input[name="cardExpiry"]',
                        cvcInput: 'input[name="cardCVC"]',
                        nameInput: 'input[name="name"]'
                    }
                });
            });
        })(jQuery);
    </script>


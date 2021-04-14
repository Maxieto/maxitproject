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

        <div class="col-md-12">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                    @endforeach
            @endif
        </div>

       <div class="row">
               @foreach($gatewayCurrency as $data)
            <div class="col-lg-3 col-sm-6">
                <div class="card text-center hover-shadow-lg hover-translate-y-n10">

                <h5 class="card-header card-header-bg text-center" style="background-color: #a700ff;color: white;font-weight: bold;" >{{__($data->name)}}</h5>

                    <div class="px-4 py-5">

                    <div class="card-body card-body-deposit">
                         <img src="{{$data->methodImage()}}" class="card-img-top" alt="{{$data->name}}" style="width: 100%">
                     </div>
                    <!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
                    <title><h5 class="card-header card-header-bg text-center" style="background-color: #a700ff;color: white;font-weight: bold;" >{{__($data->name)}}</h5> </title>
                    <defs></defs>
                    </div>
                    <div class="px-4 pb-5">
                    <button type="button"  data-id="{{$data->id}}" data-resource="{{$data}}" style="background-color: #a700ff;color: white;font-weight: bold;"
                             data-min_amount="{{formatter_money($data->min_amount, $data->method->crypto())}}"  data-max_amount="{{formatter_money($data->max_amount, $data->method->crypto())}}" data-fix_charge="{{formatter_money($data->fixed_charge, $data->method->crypto())}}"
                                     data-percent_charge="{{formatter_money($data->percent_charge, $data->method->crypto())}}"
                                   class=" btn btn-custom2  deposit" data-toggle="modal" data-target="#exampleModal">
                            @lang('Deposit Now')

					</button>
                    </div>
                </div>
            </div>
             @endforeach
       </div>

 </div>


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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title method-name" id="exampleModalLabel"></strong>
                    <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <form action="{{route('user.deposit.insert')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <p class="text-danger depositLimit"></p>
                        <p class="text-danger depositCharge"></p>
                        <div class="form-group">
                            <input type="hidden" name="currency" class="edit-currency" value="">
                            <input type="hidden" name="method_code" class="edit-method-code" value="">
                        </div>
                        <div class="form-group">
                            <label>@lang('Enter Amount'):</label>
                            <div class="input-group">
                                <input id="amount" type="text" class="form-control" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" name="amount" placeholder="0.00" required=""  value="{{old('amount')}}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text currency-addon addon-bg">{{$general->cur_text}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" style="background-color: #a700ff;color: white;font-weight: bold;" class="btn btn-primary">@lang('Confirm')</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.deposit').on('click', function () {
                var id = $(this).data('id');
                var result = $(this).data('resource');
                var minAmount = $(this).data('min_amount');
                var maxAmount = $(this).data('max_amount');
                var baseSymbol = "{{$general->cur_text}}";
                // var baseSymbol = $(this).data('base_symbol');
                var fixCharge = $(this).data('fix_charge');
                var percentCharge = $(this).data('percent_charge');

                var depositLimit = `@lang('Deposit Limit:') ${minAmount} - ${maxAmount}  ${baseSymbol}`;
                $('.depositLimit').text(depositLimit);
                var depositCharge = `@lang('Charge:') ${fixCharge} ${baseSymbol} + ${percentCharge} %`
                $('.depositCharge').text(depositCharge);
                $('.method-name').text(`@lang('Payment By ') ${result.name}`);
                // $('.currency-addon').text(`${result.currency}`);
                $('.currency-addon').text(baseSymbol);


                $('.edit-currency').val(result.currency);
                $('.edit-method-code').val(result.method_code);

            });
        });
    </script>
<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="{{asset('assets_new/js/purpose.core.js') }}"></script>
<!-- Purpose JS -->
<script src="{{asset('assets_new/js/purpose.js') }}"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="{{asset('assets_new/js/demo.js') }}"></script>
</body>

</html>

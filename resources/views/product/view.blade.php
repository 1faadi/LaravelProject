@extends('layouts.app')
@section('content')
    <html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <style>
        .launch{height: 50px}.close{font-size: 21px;cursor: pointer}.modal-body{height: 450px}.nav-tabs{border:none !important}.nav-tabs .nav-link.active{color: #495057;background-color: #fff;border-color: #ffffff #ffffff #fff;border-top: 3px solid blue !important}.nav-tabs .nav-link{margin-bottom: -1px;border: 1px solid transparent;border-top-left-radius: 0rem;border-top-right-radius: 0rem;border-top: 3px solid #eee;font-size: 20px}.nav-tabs .nav-link:hover{border-color: #e9ecef #ffffff #ffffff}.nav-tabs{display: table !important;width: 100%}.nav-item{display: table-cell}.form-control{border-bottom: 1px solid #eee !important;border:none;font-weight: 600}.form-control:focus{color: #495057;background-color: #fff;border-color: #8bbafe;outline: 0;box-shadow: none}.inputbox{position: relative;margin-bottom: 20px;width: 100%}.inputbox span{position: absolute;top:7px;left: 11px;transition: 0.5s}.inputbox i{position: absolute;top: 13px;right: 8px;transition: 0.5s;color: #3F51B5}input::-webkit-outer-spin-button, input::-webkit-inner-spin-button{-webkit-appearance: none;margin: 0}.inputbox input:focus~span{transform: translateX(-0px) translateY(-15px);font-size: 12px}.inputbox input:valid~span{transform: translateX(-0px) translateY(-15px);font-size: 12px}.pay button{height: 47px;border-radius: 37px}
    </style>
    <body>
<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                    <div>
                        <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                                    class="fas fa-angle-down mt-1"></i></a></p>
                    </div>
                </div>
                @if(isset($product))

                @foreach($product as $pro)

                <span class="card rounded-3 mb-4">

                    <span class="card-body p-4">
                        <span class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <img
                                    src="{{ asset($pro['item']['image']) }}"
                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="lead fw-normal mb-2">{{ $pro['item']['title'] }}</p>
                                <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
                            </div>
                            <span class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <a href="{{ route('decrease',['id'=>$pro['item']['id']]) }}" class="btn btn-primary">-</a>
                                <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <span id="form1" min="0" name="quantity" value="" type="number"
                                      class="form-control form-control-sm">{{ $pro['qty'] }}</span>

                                <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <a href="{{ route('increase',['id'=>$pro['item']['id']]) }}" class="btn btn-primary">+</a>
                            </span>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h5 class="mb-0">${{ $pro['item']['price'] }}</h5>
                            </div>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $pro['item']['id'] }}" name="id">
                                  <button class="px-4 py-2 text-white bg-red-600 shadow rounded-full">x</button>
                              </form>
                        </span>
                    </span>
                @endforeach

                </div>



                <div class="col-12">

                    <h3>$ {{ $totalPrice }}</h3>
                </div>




                <div class="card">
                    <div class="card-body">
                        <a href="{{url('/checkout-page')}}"> Proceed to Pay
                        </a>
                        @else
                            <div class="card-body">
                            <h1>Cart is Empty</h1>
                    </div>
                        @endif
{{--                        <!-- Modal -->--}}
{{--                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-body"> <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div> <div class="tabs mt-3"> <ul class="nav nav-tabs" id="myTab" role="tablist"> <li class="nav-item" role="presentation"> <a class="nav-link active" id="visa-tab" data-toggle="tab" href="#visa" role="tab" aria-controls="visa" aria-selected="true"> <img src="images/card.png" width="80"> </a> </li> <li class="nav-item" role="presentation"> <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false"> <img src="https://i.imgur.com/yK7EDD1.png" width="80"> </a> </li> </ul> <div class="tab-content" id="myTabContent"> <div class="tab-pane fade show active" id="visa" role="tabpanel" aria-labelledby="visa-tab"> <div class="mt-4 mx-4"> <div class="text-center"> <h5>Credit card</h5> </div> <div class="form mt-3"> <div class="inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Cardholder Name</span> </div> <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>Card Number</span> <i class="fa fa-eye"></i> </div> <div class="d-flex flex-row"> <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>Expiration Date</span> </div> <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>CVV</span> </div> </div> <div class="px-5 pay"> <button class="btn btn-success btn-block">Add card</button> </div> </div> </div> </div> <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab"> <div class="px-5 mt-5"> <div class="inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Email Address</span> </div> <div class="pay px-5"> <button class="btn btn-primary btn-block">Cash on Delivery</button> </div> </div> </div> </div> </div> </div> </div> </div>--}}
{{--                        </div>--}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

    </body>
    </html>
@endsection


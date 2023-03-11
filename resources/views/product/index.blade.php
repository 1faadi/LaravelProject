@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($product as $products)
                <div class="col-3 pt-3">
                    <div class="card">
                        <img src="{{asset($products->image)}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{$products->title}}</h5>
                            <p>{{$products->desc}}</p>
                            <p>Price : {{$products->price}}</p>
                            <a href="{{url('add-to-cart/'.$products->id)}}" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

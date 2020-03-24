@extends('layout')

@section('content')

    <div class="products-wrap border-top-0">
        <div class="container-fluid">
            <h2 class="text-center">Sản phẩm mới nhất</h2>
            <div class="row no-gutters products">
                @foreach($newests as $p)
                <div class="col-6 col-md-6 col-lg-4">
                    <a href="#" class="item">
                        <img src="{{asset('images/product_1.jpg')}}" alt="Image" class="img-fluid">
                        <div class="item-info">
                            <h3>{{$p->product_name}}</h3>
                            <span class="collection d-block">Summer Collection</span>
                            <strong class="price">{{$p->price}}</strong>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="container-fluid">
            <h2 class="text-center">Sản phẩm đắt nhất</h2>
            <div class="row no-gutters products">
                @foreach($max_price as $a)
                    <div class="col-6 col-md-6 col-lg-4">
                        <a href="#" class="item">
                            <img src="{{asset('images/product_1.jpg')}}" alt="Image" class="img-fluid">
                            <div class="item-info">
                                <h3>{{$a->product_name}}</h3>
                                <span class="collection d-block">Summer Collection</span>
                                <strong class="price">{{$a->price}}</strong>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container-fluid">
            <h2 class="text-center">Sản phẩm rẻ nhất</h2>
            <div class="row no-gutters products">
                @foreach($min_price as $b)
                    <div class="col-6 col-md-6 col-lg-4">
                        <a href="#" class="item">
                            <img src="{{asset('images/product_1.jpg')}}" alt="Image" class="img-fluid">
                            <div class="item-info">
                                <h3>{{$b->product_name}}</h3>
                                <span class="collection d-block">Summer Collection</span>
                                <strong class="price">{{$b->price}}</strong>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

@endsection


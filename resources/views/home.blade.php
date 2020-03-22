@extends('layout')

@section('content')

    <div class="products-wrap border-top-0">
        <div class="container-fluid">
            <div class="row no-gutters products">
                @foreach($product as $p)
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

{{--                <div class="col-6 col-md-6 col-lg-4">--}}
{{--                    <a href="#" class="item">--}}
{{--                        <span class="tag">Sale</span>--}}
{{--                        <img src="{{asset('images/product_1.jpg')}}" alt="Image" class="img-fluid">--}}
{{--                        <div class="item-info">--}}
{{--                            <h3>Marc Jacobs Bag</h3>--}}
{{--                            <span class="collection d-block">Summer Collection</span>--}}
{{--                            <strong class="price">$9.50 <del>$30.00</del></strong>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-6 col-md-6 col-lg-4">--}}
{{--                    <a href="#" class="item">--}}
{{--                        <img src="{{asset('images/product_1.jpg')}}" alt="Image" class="img-fluid">--}}
{{--                        <div class="item-info">--}}
{{--                            <h3>The  Belt</h3>--}}
{{--                            <span class="collection d-block">Summer Collection</span>--}}
{{--                            <strong class="price">$9.50</strong>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="col-6 col-md-6 col-lg-4">--}}
{{--                    <a href="#" class="item">--}}
{{--                        <img src="{{asset('images/product_1.jpg')}}" alt="Image" class="img-fluid">--}}
{{--                        <div class="item-info">--}}
{{--                            <h3>The Shoe</h3>--}}
{{--                            <span class="collection d-block">Summer Collection</span>--}}
{{--                            <strong class="price">$9.50</strong>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-6 col-md-6 col-lg-4">--}}
{{--                    <a href="#" class="item">--}}
{{--                        <span class="tag">Sale</span>--}}
{{--                        <img src="{{asset('images/product_1.jpg')}}" alt="Image" class="img-fluid">--}}
{{--                        <div class="item-info">--}}
{{--                            <h3>Marc Jacobs Bag</h3>--}}
{{--                            <span class="collection d-block">Summer Collection</span>--}}
{{--                            <strong class="price">$9.50 <del>$30.00</del></strong>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-6 col-md-6 col-lg-4">--}}
{{--                    <a href="#" class="item">--}}
{{--                        <img src="{{asset('images/product_1.jpg')}}" alt="Image" class="img-fluid">--}}
{{--                        <div class="item-info">--}}
{{--                            <h3>The  Belt</h3>--}}
{{--                            <span class="collection d-block">Summer Collection</span>--}}
{{--                            <strong class="price">{{$p->price}}</strong>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}

            </div>
        </div>
    </div>

@endsection


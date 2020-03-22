<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mun Mun - Hàng xách tay châu âu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>

<div class="site-wrap">


    <div class="site-navbar bg-white py-2">

        <div class="search-wrap">
            <div class="container">
                <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
                <form action="#" method="post">
                    <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
                </form>
            </div>
        </div>

        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="logo">
                    <div class="site-logo">
                        <a href="index.html" class="js-logo-clone">Dealers</a>
                    </div>
                </div>
                <div class="main-nav d-none d-lg-block">
                    <nav class="site-navigation text-right text-md-center" role="navigation">
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li class="has-children active">
                                <a href="index.html">Collection</a>
                                <ul class="dropdown">
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Children</a></li>
                                    <li class="has-children">
                                        <a href="#">Sub Menu</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Men</a></li>
                                            <li><a href="#">Women</a></li>
                                            <li><a href="#">Children</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="#">Catalogs</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="icons">
                    <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
                    <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
                    <a href="cart.html" class="icons-btn d-inline-block bag">
                        <span class="icon-shopping-bag"></span>
                        <span class="number">2</span>
                    </a>
                    <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="site-blocks-cover" data-aos="fade">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-5 text-center">
                    <div class="featured-hero-product w-100">
                        <h1 class="mb-2">Madewell</h1>
                        <h4>Summer Collection</h4>
                        <div class="price mt-3 mb-5"><strong>1,499</strong> <del>$1,999</del></div>
                        <p><a href="#" class="btn btn-outline-primary rounded-0">Shop Now</a> <a href="#" class="btn btn-primary rounded-0">Shop Now</a></p>
                    </div>
                </div>
                <div class="col-lg-7 align-self-end text-center text-lg-right">
                    <img src="{{asset('images/new/person_transparent.png')}}" alt="Image" class="img-fluid img-1">
                </div>

            </div>
        </div>

    </div>

@foreach($product as $p)
    <div class="products-wrap border-top-0">
        <div class="container-fluid">
            <div class="row no-gutters products">
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

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    {{--        <div class="site-blocks-cover inner-page py-5"  data-aos="fade">--}}
    {{--          <div class="container">--}}
    {{--            <div class="row align-items-center">--}}
    {{--              <div class="col-lg-4 ml-auto order-lg-2 align-self-start">--}}
    {{--                <div class="site-block-cover-content">--}}
    {{--                <h2 class="sub-title">#New Summer Collection 2019</h2>--}}
    {{--                <h1>Jacket</h1>--}}
    {{--                <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>--}}
    {{--                </div>--}}
    {{--              </div>--}}
    {{--              <div class="col-lg-8 order-1 align-self-end">--}}
    {{--                <img src="{{asset('images/model_woman_1.png')}}" alt="Image" class="img-fluid">--}}
    {{--              </div>--}}
    {{--            </div>--}}
    {{--          </div>--}}
    {{--        </div>--}}

    {{--        <div class="site-section">--}}
    {{--          <div class="container">--}}
    {{--            <div class="row">--}}
    {{--              <div class="title-section text-center col-12">--}}
    {{--                <h2 class="text-uppercase">Collections</h2>--}}
    {{--              </div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--              <div class="col-md-12 block-3 products-wrap">--}}
    {{--                <div class="nonloop-block-3 owl-carousel">--}}

    {{--                  <div class="product">--}}
    {{--                    <a href="#" class="item">--}}
    {{--                      <img src="images/product_1.jpg" alt="Image" class="img-fluid">--}}
    {{--                      <div class="item-info">--}}
    {{--                        <h3>The Shoe</h3>--}}
    {{--                        <span class="collection d-block">Summer Collection</span>--}}
    {{--                        <strong class="price">$9.50</strong>--}}
    {{--                      </div>--}}
    {{--                    </a>--}}
    {{--                  </div>--}}

    {{--                  <div class="product">--}}
    {{--                    <a href="#" class="item">--}}
    {{--                      <span class="tag">Sale</span>--}}
    {{--                      <img src="{{asset('images/product_2.jpg')}}" alt="Image" class="img-fluid">--}}
    {{--                      <div class="item-info">--}}
    {{--                        <h3>Marc Jacobs Bag</h3>--}}
    {{--                        <span class="collection d-block">Summer Collection</span>--}}
    {{--                        <strong class="price">$9.50 <del>$30.00</del></strong>--}}
    {{--                      </div>--}}
    {{--                    </a>--}}
    {{--                  </div>--}}

    {{--                  <div class="product">--}}
    {{--                    <a href="#" class="item">--}}
    {{--                      <img src="{{asset('images/product_3.jpg')}}" alt="Image" class="img-fluid">--}}
    {{--                      <div class="item-info">--}}
    {{--                        <h3>The  Belt</h3>--}}
    {{--                        <span class="collection d-block">Summer Collection</span>--}}
    {{--                        <strong class="price">$9.50</strong>--}}
    {{--                      </div>--}}
    {{--                    </a>--}}
    {{--                  </div>--}}

    {{--                  <div class="product">--}}
    {{--                    <a href="#" class="item">--}}
    {{--                      <img src="{{asset('images/product_1.jpg')}}" alt="Image" class="img-fluid">--}}
    {{--                      <div class="item-info">--}}
    {{--                        <h3>The Shoe</h3>--}}
    {{--                        <span class="collection d-block">Summer Collection</span>--}}
    {{--                        <strong class="price">$9.50</strong>--}}
    {{--                      </div>--}}
    {{--                    </a>--}}
    {{--                  </div>--}}

    {{--                  <div class="product">--}}
    {{--                    <a href="#" class="item">--}}
    {{--                      <span class="tag">Sale</span>--}}
    {{--                      <img src="{{asset('images/product_2.jpg')}}" alt="Image" class="img-fluid">--}}
    {{--                      <div class="item-info">--}}
    {{--                        <h3>Marc Jacobs Bag</h3>--}}
    {{--                        <span class="collection d-block">Summer Collection</span>--}}
    {{--                        <strong class="price">$9.50 <del>$30.00</del></strong>--}}
    {{--                      </div>--}}
    {{--                    </a>--}}
    {{--                  </div>--}}

    {{--                  <div class="product">--}}
    {{--                    <a href="#" class="item">--}}
    {{--                      <img src="{{asset('images/product_3.jpg')}}" alt="Image" class="img-fluid">--}}
    {{--                      <div class="item-info">--}}
    {{--                        <h3>The  Belt</h3>--}}
    {{--                        <span class="collection d-block">Summer Collection</span>--}}
    {{--                        <strong class="price">$9.50</strong>--}}
    {{--                      </div>--}}
    {{--                    </a>--}}
    {{--                  </div>--}}

    {{--                </div>--}}
    {{--              </div>--}}
    {{--            </div>--}}
    {{--          </div>--}}
    {{--        </div>--}}


    {{--        <div class="site-blocks-cover inner-page py-5"  data-aos="fade">--}}
    {{--          <div class="container">--}}
    {{--            <div class="row align-items-center">--}}
    {{--              <div class="col-lg-6 ml-auto order-lg-2 align-self-start">--}}
    {{--                <div class="site-block-cover-content">--}}
    {{--                <h2 class="sub-title">#New Summer Collection 2019</h2>--}}
    {{--                <h1>New Denim Coat</h1>--}}
    {{--                <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>--}}
    {{--                </div>--}}
    {{--              </div>--}}
    {{--              <div class="col-lg-6 order-1 align-self-end">--}}
    {{--                <img src="{{asset('images/model_5.png')}}" alt="Image" class="img-fluid">--}}
    {{--              </div>--}}
    {{--            </div>--}}
    {{--          </div>--}}
    {{--        </div>--}}

    <footer class="site-footer custom-border-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

                    <div class="block-7">
                        <h3 class="footer-heading mb-4">About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates sed dolorum excepturi iure eaque, aut unde.</p>
                    </div>
                    <div class="block-7">
                        <form action="#" method="post">
                            <label for="email_subscribe" class="footer-heading">Subscribe</label>
                            <div class="form-group">
                                <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                                <input type="submit" class="btn btn-sm btn-primary" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="footer-heading mb-4">Quick Links</h3>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <ul class="list-unstyled">
                                <li><a href="#">Sell online</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Shopping cart</a></li>
                                <li><a href="#">Store builder</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <ul class="list-unstyled">
                                <li><a href="#">Mobile commerce</a></li>
                                <li><a href="#">Dropshipping</a></li>
                                <li><a href="#">Website development</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <ul class="list-unstyled">
                                <li><a href="#">Point of sale</a></li>
                                <li><a href="#">Hardware</a></li>
                                <li><a href="#">Software</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="block-5 mb-5">
                        <h3 class="footer-heading mb-4">Contact Info</h3>
                        <ul class="list-unstyled">
                            <li class="address">Hà Đông</li>
                            <li class="phone"><a href="tel://+84932223796">+84932223796</a></li>
                            <li class="email">duyyanhh@gmail.com</li>
                        </ul>
                    </div>


                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://facebook.com/kjuhughhuu" target="_blank" class="text-primary">Duy Anh</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </div>
    </footer>
</div>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">


<head>
    @include('includes.head')

</head>
<body class="right-side">
<!-- main container of all the page elements -->
<div id="wrapper">

    <!-- Page Loader -->
    <div id="pre-loader" class="loader-container">
        <div class="loader">
            <img src="{{ asset('assets') }}/images/svg/rings.svg" alt="loader">
        </div>
    </div>
    <!-- Page Loader -->

    <!-- W1 start here -->
    <div class="w1">

        <!-- mt header style9 start here -->
        <header id="mt-header" class="style9">
            @include('includes.header')
        </header>
        <!-- mt header end here -->

        <!-- mt side menu start here -->
        <div class="mt-side-menu">
            <!-- mt holder start here -->
            <div class="mt-holder">
                <a href="#" class="side-close"><span></span><span></span></a>
                <strong class="mt-side-title">MENU</strong>

                <!-- mt side widget start here -->
                <div class="mt-side-widget borderbottom">
                    <nav class="mt-side-nav">
                        <ul>

                            @guest
{{--                                <li>--}}
{{--                                    <a href="#" class="drop-link">Login | Register <i aria-hidden="true" class="fa fa-angle-down"></i></a>--}}
{{--                                    <div class="drop">--}}
{{--                                        <ul>--}}
{{--                                            <li>--}}
{{--                                                <a href="{{ route('login') }}"> Login </a>--}}
{{--                                            </li>--}}

{{--                                            @if (Route::has('register'))--}}
{{--                                            <li>--}}
{{--                                                <a href="{{ route('register') }}"> Register </a>--}}
{{--                                            </li>--}}
{{--                                            @endif--}}

{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}


                                <li>
                                    <a href="{{ route('index') }}">Home</a>
                                </li>

                                <li>
                                    <a href="{{ route('products.index') }}">Products</a>
                                </li>

                                <li>
                                    <a href="{{ route('aboutUs') }}">About</a>
                                </li>

                                <li>
                                    <a href="{{ route('contactUs') }}" class="">Contact</a>
                                </li>

                            @else
{{--                                <li class="nav-item dropdown">--}}
{{--                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                        {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                                <li>--}}
{{--                                    <a href="{{ route('index') }}">Home</a>--}}
{{--                                </li>--}}

{{--                                <li>--}}
{{--                                    <a href="">Products</a>--}}
{{--                                </li>--}}

{{--                                <li>--}}
{{--                                    <a href="{{ route('aboutUs') }}">About</a>--}}
{{--                                </li>--}}

{{--                                <li>--}}
{{--                                    <a href="{{ route('contactUs') }}" class="">Contact</a>--}}
{{--                                </li>--}}
{{--                            --}}
{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}

                            @endguest

                        </ul>
                    </nav>
                </div>
                <!-- mt side widget end here -->

            </div>
            <!-- mt holder end here -->
        </div>
        <!-- mt side menu end here -->

        <!-- mt search popup start here -->
        <div class="mt-search-popup">
            <div class="mt-holder">
                <a href="#" class="search-close"><span></span><span></span></a>
                <div class="mt-frame">
                    <form action="#">
                        <fieldset>
                            <input type="text" placeholder="Search...">
{{--                            <span class="icon-microphone"></span>--}}
                            <button class="icon-magnifier" type="submit"></button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <!-- mt search popup end here -->

        <!-- mt main start here -->
        <main id="mt-main">
            @yield('content')
        </main>
        <!-- mt main end here -->

        <!-- footer of the Page -->
        <footer id="mt-footer">
            @include('includes.footer')
        </footer>
        <!-- footer of the Page end -->

    </div>
    <!-- W1 end here -->
    <span id="back-top" class="fa fa-arrow-up"></span>
</div>




{{--<a id="newsletter-hiddenlink" href="#popup2" class="lightbox" style="display: none;">NEWSLETTER</a>--}}

<!-- Popup Holder of the Page -->
<div class="popup-holder">

    <!-- Popup of the Page -->
    <div id="popup1" class="lightbox">
        <!-- Mt Product Detial of the Page -->
        <section class="mt-product-detial">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Slider of the Page -->
                        <div class="slider">

                            <!-- Product Slider of the Page -->
                            <div class="product-slider">
                                <div class="slide">
                                    <img src="{{ asset('assets') }}/images/products/img22.jpg" alt="image descrption">
                                </div>
                            </div>
                            <!-- Product Slider of the Page end -->

                            <!-- Page Slider of the Page -->
                            <ul class="list-unstyled slick-slider pagg-slider">
{{--                                <li><img src="{{ asset('assets') }}/images/products/img22.jpg" alt="image description"></li>--}}
                            </ul>
                            <!-- Page Slider of the Page end -->

                        </div>
                        <!-- Slider of the Page end -->

                        <!-- Detail Holder of the Page -->
                        <div class="detial-holder">
                            <!-- Breadcrumbs of the Page -->
                            <ul class="list-unstyled breadcrumbs">
                                <li><a href="#">Chairs <i class="fa fa-angle-right"></i></a></li>
                                <li>Products</li>
                            </ul>
                            <!-- Breadcrumbs of the Page end -->
                            <h2>KAILA FABRIC CHAIR</h2>
                            <!-- Rank Rating of the Page -->
                            <div class="rank-rating">
                                <ul class="list-unstyled rating-list">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <span class="total-price">Reviews (12)</span>
                            </div><!-- Rank Rating of the Page end -->
                            <ul class="list-unstyled list">
                                <li><a href="#"><i class="fa fa-share-alt"></i>SHARE</a></li>
                                <li><a href="#"><i class="fa fa-exchange"></i>COMPARE</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i>ADD TO WISHLIST</a></li>
                            </ul>
                            <div class="txt-wrap">
                                <p>Koila is a chair designed for restaurants and food lovers in general. Designed in collaboration with restaurant professionals, it ensures comfort and an ideal posture, as there are armrests on both sides of the chair.</p>
                                <p>Koila is a seat designed for restaurants and gastronomic places in general. Designed in collaboration with professional of restaurants and hotels field, this armchair is composed of a curved shell with a base in oak who has pinched the back upholstered in fabric or leather. It provides comfort and holds for ideal sitting position,the arms may rest on the sides ofthe armchair.</p>
                            </div>
                            <div class="text-holder">
                                <span class="price">$ 79.00 <del>399,00</del></span>
                            </div><!-- Product Form of the Page -->
                            <form action="#" class="product-form">
                                <fieldset>
                                    <div class="row-val">
                                        <label for="qty">qty</label>
                                        <select id="clr">
                                            <option>1</option>
                                        </select>
                                    </div>
                                    <div class="row-val">
                                        <button type="submit">ADD TO CART</button>
                                    </div>
                                </fieldset>
                            </form><!-- Product Form of the Page end -->
                        </div><!-- Detail Holder of the Page end -->
                    </div>
                </div>
            </div>
        </section><!-- Mt Product Detial of the Page end -->
    </div>
    <!-- Popup of the Page end -->

    <!-- Popup of the Page -->
    <div id="popup2" class="lightbox">
        <!-- Mt Newsletter Popup of the Page -->
        <section class="mt-newsletter-popup">
            <span class="title">NEWSLETTER</span>
            <div class="holder">
                <div class="txt-holder">
                    <h1>JOIN OUR NEWSLETTER</h1>
                    <span class="txt">Subscribe now to get <b>15%</b> off on any product!</span>
                    <!-- Newsletter Form of the Page -->
                    <form action="#" class="newsletter-form">
                        <fieldset>
                            <input type="email" class="form-control" placeholder="Enter your e-mail">
                            <button type="submit">SUBSCRIBE</button>
                        </fieldset>
                    </form><!-- Newsletter Form of the Page -->
                </div>
                <div class="img-holder">
                    <img src="{{ asset('assets') }}/images/img02.png" alt="image description">
                </div>
            </div><!-- Popup Form of the Page -->
            <form action="#" class="popup-form">
                <fieldset>
                    <input type="checkbox" class="form-control">Don’t show this popup again
                </fieldset>
            </form><!-- Popup Form of the Page end -->
        </section><!-- Mt Newsletter Popup of the Page -->
    </div>
    <!-- Popup of the Page end -->

</div>
<!-- Popup Holder of the Page end -->

@include('includes.scripts')

</body>

</html>

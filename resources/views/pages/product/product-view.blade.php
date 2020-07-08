@extends('layouts.master')
@section('content')


    <!-- Mt Contact Banner of the Page -->
    <section class="mt-contact-banner style4"
             style="background-image: url('{{ asset('assets/images/img11.jpg') }}');
                 visibility: visible;
                 background-repeat: no-repeat;
                 animation-delay: 0.4s;
                 animation-name: fadeInUp;">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1>Products</h1>

                    <!-- Breadcrumbs of the Page -->
                    <nav class="breadcrumbs">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('index') }}">Home <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{ route('products.index') }}">Products <i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Breadcrumbs of the Page end -->

                </div>
            </div>
        </div>
    </section>
    <!-- Mt Contact Banner of the Page end -->

    <div class="container">
        <div class="row">

            <!-- sidebar of the Page start here -->
            <aside id="sidebar" class="col-xs-12 col-sm-4 col-md-3 wow fadeInLeft" data-wow-delay="0.4s"
                   style="visibility: visible;
                    animation-delay: 0.4s;
                     animation-name: fadeInLeft;">

                <!-- shop-widget filter-widget of the Page start here -->
                <section class="shop-widget filter-widget bg-grey">
                    <h2>FILTER</h2>
                    <span class="sub-title">Filter by Price</span>
                    <div class="price-range">
                        <div class="range-slider">
                            <span class="dot"></span>
                            <span class="dot dot2"></span>
                        </div>
                        <span class="price">Price &nbsp;   $ 10  &nbsp;  -  &nbsp;   $ 599</span>
                        <a href="#" class="filter-btn">Filter</a>
                    </div>
                </section>
                <!-- shop-widget filter-widget of the Page end here -->

            </aside>
            <!-- sidebar of the Page end here -->

            <div class="col-xs-12 col-sm-8 col-md-9 wow fadeInRight" data-wow-delay="0.4s"
                 style="visibility: visible;
                 animation-delay: 0.4s;
                 animation-name: fadeInRight;">

                <!-- mt shoplist header start here -->
                <header class="mt-shoplist-header">

                    <!-- btn-box start here -->
                    <div class="btn-box">
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="drop-link">
                                    Default Sorting <i aria-hidden="true" class="fa fa-angle-down"></i>
                                </a>
                                <div class="drop">
                                    <ul class="list-unstyled">
                                        <li><a href="#">ASC</a></li>
                                        <li><a href="#">DSC</a></li>
                                        <li><a href="#">Price</a></li>
                                        <li><a href="#">Relevance</a></li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- btn-box end here -->

                    <!-- mt-textbox start here -->
                    <div class="mt-textbox">
                        <p>Showing <strong>1–9</strong> of <strong>65</strong> results</p>
                        <p>View <a href="#">9</a> / <a href="#">18</a> / <a href="#">27</a> / <a href="#">All</a></p>
                    </div><!-- mt-textbox end here -->
                </header>
                <!-- mt shoplist header end here -->

                <!-- mt productlisthold start here -->
                <ul class="mt-productlisthold list-inline">
                    @foreach($products as $product)
                        <li>
                            <!-- mt product1 large start here -->
                            <div class="mt-product1">
                                <div class="box">
                                    <div class="b1">
                                        <div class="b2">
                                            <a href="{{ route('products.show',$product->id) }}">
                                                <img src="{{ asset('uploads').'/'.$product->image }}" alt="Product Image">
                                            </a>
                                            <ul class="links">
                                                <li><a href="{{ route('products.show',$product->id) }}" class="lightbox"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="txt">
                                    <strong class="title"><a href="{{ route('products.show',$product->id) }}"> {{ $product->name }} </a></strong>
                                    <span class="price"><i class="fa fa-dollar"></i>
                                        <span> {{ $product->price }} </span>
                                    </span>
                                </div>
                            </div>
                            <!-- mt product1 center end here -->
                        </li>
                    @endforeach

                </ul>
                <!-- mt productlisthold end here -->

                <!-- mt pagination start here -->
                <nav class="mt-pagination">
                    <ul class="list-inline">
                        <li><a href="#">1</a></li>
                    </ul>
                </nav>
                <!-- mt pagination end here -->

            </div>
        </div>
    </div>



@endsection

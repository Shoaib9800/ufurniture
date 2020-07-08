@extends('layouts.master')

@section('content')
    <!-- mt-mainslider4 add start here -->
    <div class="mt-mainslider4 add">
        <div class="container">
            <div class="row">

                <!-- banner slider start here -->
                <div class="banner-slider">
                    <!-- holder start here -->
                    <div class="holder">
                        <div class="img">
                            <img src="{{ asset('assets') }}/images/sliders/img13.jpg" alt="image description">
                        </div>
                        <div class="txt">
                            <span class="sub-title">UFURNITURE DESIGNS IDEAS</span>
                            <h1>Upholstered fabric</h1>
                            <h2>Counter stool</h2>
                            <span class="price">$ 79<sub>.00</sub></span>
                        </div>
                    </div><!-- holder end here -->
                    <!-- holder start here -->
                    <div class="holder">
                        <div class="img">
                            <img src="{{ asset('assets') }}/images/sliders/img11.jpg" alt="image description">
                        </div>
                        <div class="txt">
                            <span class="sub-title">UFURNITURE DESIGNS IDEAS</span>
                            <h1>Upholstered fabric</h1>
                            <h2>Counter stool</h2>
                            <span class="price">$ 79<sub>.00</sub></span>
                        </div>
                    </div><!-- holder end here -->
                </div>
                <!-- banner slider end here -->

            </div>
        </div>
    </div>
    <!-- mt-mainslider4 add end here -->


    <div id="product-masonry">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul id="product-filter">
                        <li> Available Products</li>
{{--                        <li class="active" ><a href="#" data-filter=".fil1">SoFaS</a></li>--}}
{{--                        <li><a href="#" data-filter=".fil2">ChAIrS</a></li>--}}
{{--                        <li><a href="#" data-filter=".fil3">aRmCHaIR</a></li>--}}
{{--                        <li class="left"><a href="#" id="product-shuffle"><i class="fa fa-random" aria-hidden="true"></i> shuffle</a></li>--}}
                    </ul>

                    <ul class="masonry-list">
                        @foreach($products as $product)
                        <li class="fil1">
                            <!-- mt product start here -->
                            <div class="mt-product1">

                                <!-- box start here -->
                                <div class="box">
                                    <a href="{{ route('products.show',$product->id) }}">
                                        <img src="{{ asset('uploads').'/'.$product->image }}" alt="Product Image">
                                    </a>
                                    <ul class="links">
{{--                                        <li><a href="#"><i class="icon-handbag"></i></a></li>--}}
{{--                                        <li><a href="#"><i class="icon-heart"></i></a></li>--}}
                                        <li><a href="{{ route('products.show',$product->id) }}" class="lightbox"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                                <!-- box end here -->

                                <!-- txt end here -->
                                <div class="txt">
                                    <strong class="title"><a href="{{ route('products.show',$product->id) }}"> {{ $product->name }} </a></strong>
                                    <span class="price">
                                        <i class="fa fa-dollar"></i>
                                        <span>
                                            {{ $product->price }}
                                        </span>
                                    </span>
                                </div><!-- txt end here -->
                            </div>
                            <!-- mt product1 end here -->
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

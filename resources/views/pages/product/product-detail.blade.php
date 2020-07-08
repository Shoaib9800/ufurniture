@extends('layouts.master')
@section('content')

    <!-- Mt Product Detial of the Page -->
    <section class="mt-product-detial wow fadeInUp" data-wow-delay="0.4s"
             style="visibility: visible;
             animation-delay: 0.4s;
             animation-name: fadeInUp;">

        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!-- Slider of the Page -->
                    <div class="slider">
                        <!-- Product Slider of the Page -->
                        <div class="product-slider slick-initialized slick-slider">
                            <div aria-live="polite" class="slick-list draggable">
                                <div class="slick-track" style="opacity: 1; width: 2440px;" role="listbox">
                                    <div class="slide slick-slide slick-current slick-active" data-slick-index="0"
                                         aria-hidden="false"
                                         style="width: 610px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"
                                         tabindex="-1" role="option" aria-describedby="slick-slide00">
                                        <img src="{{ asset('uploads').'/'.$product->image }}" alt="image descrption">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- Product Slider of the Page end -->
                    </div>
                    <!-- Slider of the Page end -->

                    <!-- Detail Holder of the Page -->
                    <div class="detial-holder">
                        <!-- Breadcrumbs of the Page -->
                        <ul class="list-unstyled breadcrumbs">
                            <li><a href="{{ route('products.index') }}">All Products <i class="fa fa-angle-right"></i></a></li>
                            <li>Product Detail</li>
                        </ul>
                        <!-- Breadcrumbs of the Page end -->
                        <h2>{{ $product->name }}</h2>
                        <div class="txt-wrap">
                            <p> {{ $product->description }} </p>
                        </div>
                        <div class="text-holder">
                            <span class="price">
                                $ {{ $product->price }}
{{--                                <del>399,00</del>--}}
                            </span>
                        </div>
                        <!-- Product Form of the Page -->
                        <form action="#" class="product-form">
                            <fieldset>
{{--                                <div class="row-val">--}}
{{--                                    <label for="qty">qty</label>--}}
{{--                                    <input type="number" id="qty" placeholder="1">--}}
{{--                                </div>--}}
                                <div class="row-val">
                                    <button type="submit">Buy It!</button>
                                </div>
                            </fieldset>
                        </form>
                        <!-- Product Form of the Page end -->
                    </div>
                    <!-- Detail Holder of the Page end -->

                </div>
            </div>
        </div>

    </section>
    <!-- Mt Product Detial of the Page end -->


@endsection

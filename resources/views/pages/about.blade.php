@extends('layouts.master')
@section('content')
    <!-- Mt Content Banner of the Page -->
    <section class="mt-contact-banner wow fadeInUp" data-wow-delay="0.4s"
             style="background-image: url('{{ asset('assets/images/img43.jpg') }}');
             visibility: visible;
             background-repeat: no-repeat;
             animation-delay: 0.4s;
             animation-name: fadeInUp;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1>ABOUT US</h1>
                    <nav class="breadcrumbs">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('index') }}">home <i class="fa fa-angle-right"></i></a></li>
                            <li>About Us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Mt Content Banner of the Page end -->

    <!-- Mt About Section of the Page -->
    <section class="mt-about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <div class="txt wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <h2>WHO WE ARE?</h2>
                        <p>
                            Bringing your house to a warm state-of-art classic home is not only our most successful expertise, but it’s our passion to
                            bring you the antique and the most update furniture design ambiances for you and your loved ones.
                        </p>
                        <p>
                            It doesn’t matter whether your house is big or small in scale. What’s important is uFurniture is that every single
                            ambiance in your home brings peace of mine, happiness, comfort, and an environment that makes you feel
                            happy being there.
                        </p>
                        <p>
                            Our mission is to provide you brilliant verity of furniture for your home. We do need to be aware that having the best is
                            what bring the most out of it. It’s what makes us feel fulfilled, and this fulfillment at home is the most important ingredient
                            to keeping us healthy, happy, and prosperous.
                        </p>
                    </div>

                    <div class="mt-follow-holder">
{{--                        <span class="title">Follow Us</span>--}}
                        <!-- Social Network of the Page -->
                        <ul class="list-unstyled social-network">
{{--                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>--}}
                        </ul>
                        <!-- Social Network of the Page end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mt About Section of the Page -->

    <!-- Mt Team Section of the Page -->
{{--    <section class="mt-team-sec">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-12">--}}
{{--                    <h3>OUR TEAM</h3>--}}
{{--                    <div class="holder">--}}
{{--                        <!-- col of the Page -->--}}
{{--                        <div class="col wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">--}}
{{--                            <div class="img-holder">--}}
{{--                                <a href="#">--}}
{{--                                    <img src="images/img44.jpg" alt="CLARA WOODEN">--}}
{{--                                    <ul class="list-unstyled social-icon">--}}
{{--                                        <li><i class="fa fa-twitter"></i></li>--}}
{{--                                        <li><i class="fa fa-facebook"></i></li>--}}
{{--                                        <li><i class="fa fa-linkedin"></i></li>--}}
{{--                                    </ul>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="mt-txt">--}}
{{--                                <h4><a href="#">CLARA WOODEN</a></h4>--}}
{{--                                <span class="sub-title">DESIGNER</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- col of the Page end -->--}}
{{--                        <!-- col of the Page -->--}}
{{--                        <div class="col wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">--}}
{{--                            <div class="img-holder">--}}
{{--                                <a href="#">--}}
{{--                                    <img src="images/img45.jpg" alt="JOHN WICK">--}}
{{--                                    <ul class="list-unstyled social-icon">--}}
{{--                                        <li><i class="fa fa-twitter"></i></li>--}}
{{--                                        <li><i class="fa fa-facebook"></i></li>--}}
{{--                                        <li><i class="fa fa-linkedin"></i></li>--}}
{{--                                    </ul>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="mt-txt">--}}
{{--                                <h4><a href="#">JOHN WICK</a></h4>--}}
{{--                                <span class="sub-title">FOUNDER</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- col of the Page end -->--}}
{{--                        <!-- col of the Page -->--}}
{{--                        <div class="col wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">--}}
{{--                            <div class="img-holder">--}}
{{--                                <a href="#">--}}
{{--                                    <img src="images/img46.jpg" alt="HARRY KANE">--}}
{{--                                    <ul class="list-unstyled social-icon">--}}
{{--                                        <li><i class="fa fa-twitter"></i></li>--}}
{{--                                        <li><i class="fa fa-facebook"></i></li>--}}
{{--                                        <li><i class="fa fa-linkedin"></i></li>--}}
{{--                                    </ul>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="mt-txt">--}}
{{--                                <h4><a href="#">HARRY KANE</a></h4>--}}
{{--                                <span class="sub-title">DESIGNER</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- col of the Page end -->--}}
{{--                        <!-- col of the Page -->--}}
{{--                        <div class="col wow fadeInUp" data-wow-delay="0.10s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">--}}
{{--                            <div class="img-holder">--}}
{{--                                <a href="#">--}}
{{--                                    <img src="images/img47.jpg" alt="CLARA WOODEN">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- col of the Page end -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Mt About Section of the Page -->

    <!-- Mt Workspace Section of the Page -->
{{--    <section class="mt-workspace-sec wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-12">--}}
{{--                    <h2>OUR WORKSPACE</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Work Slider of the Page -->--}}
{{--        <ul class="list-unstyled work-slider slick-initialized slick-slider">--}}



{{--            <div aria-live="polite" class="slick-list draggable" style="padding: 0px 10%;"><div class="slick-track" style="opacity: 1; width: 9856px; left: -5632px;" role="listbox"><li class="slick-slide slick-cloned" tabindex="-1" role="option" aria-describedby="slick-slide01" style="width: 1393px;" data-slick-index="-2" aria-hidden="true">--}}
{{--                        <div class="img-holder">--}}
{{--                            <img src="images/img48.jpg" alt="image description">--}}
{{--                        </div>--}}
{{--                        <div class="img-holder">--}}
{{--                            <div class="coll1">--}}
{{--                                <img src="images/img49.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                            <div class="coll2">--}}
{{--                                <img src="images/img50.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                            <div class="coll3">--}}
{{--                                <img src="images/img51.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li><li class="slick-slide slick-cloned slick-center" tabindex="-1" role="option" aria-describedby="slick-slide02" style="width: 1393px;" data-slick-index="-1" aria-hidden="true">--}}
{{--                        <div class="img-holder">--}}
{{--                            <img src="images/img48.jpg" alt="image description">--}}
{{--                        </div>--}}
{{--                        <div class="img-holder">--}}
{{--                            <div class="coll1">--}}
{{--                                <img src="images/img49.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                            <div class="coll2">--}}
{{--                                <img src="images/img50.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                            <div class="coll3">--}}
{{--                                <img src="images/img51.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li><li class="slick-slide" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 1393px;" data-slick-index="0" aria-hidden="true">--}}
{{--                        <div class="img-holder">--}}
{{--                            <img src="images/img48.jpg" alt="image description">--}}
{{--                        </div>--}}
{{--                        <div class="img-holder">--}}
{{--                            <div class="coll1">--}}
{{--                                <img src="images/img49.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                            <div class="coll2">--}}
{{--                                <img src="images/img50.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                            <div class="coll3">--}}
{{--                                <img src="images/img51.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li><li class="slick-slide" tabindex="-1" role="option" aria-describedby="slick-slide01" style="width: 1393px;" data-slick-index="1" aria-hidden="true">--}}
{{--                        <div class="img-holder">--}}
{{--                            <img src="images/img48.jpg" alt="image description">--}}
{{--                        </div>--}}
{{--                        <div class="img-holder">--}}
{{--                            <div class="coll1">--}}
{{--                                <img src="images/img49.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                            <div class="coll2">--}}
{{--                                <img src="images/img50.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                            <div class="coll3">--}}
{{--                                <img src="images/img51.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li><li class="slick-slide slick-current slick-active slick-center" tabindex="-1" role="option" aria-describedby="slick-slide02" style="width: 1393px;" data-slick-index="2" aria-hidden="false">--}}
{{--                        <div class="img-holder">--}}
{{--                            <img src="images/img48.jpg" alt="image description">--}}
{{--                        </div>--}}
{{--                        <div class="img-holder">--}}
{{--                            <div class="coll1">--}}
{{--                                <img src="images/img49.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                            <div class="coll2">--}}
{{--                                <img src="images/img50.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                            <div class="coll3">--}}
{{--                                <img src="images/img51.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li><li class="slick-slide slick-cloned" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 1393px;" data-slick-index="3" aria-hidden="true">--}}
{{--                        <div class="img-holder">--}}
{{--                            <img src="images/img48.jpg" alt="image description">--}}
{{--                        </div>--}}
{{--                        <div class="img-holder">--}}
{{--                            <div class="coll1">--}}
{{--                                <img src="images/img49.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                            <div class="coll2">--}}
{{--                                <img src="images/img50.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                            <div class="coll3">--}}
{{--                                <img src="images/img51.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li><li class="slick-slide slick-cloned" tabindex="-1" role="option" aria-describedby="slick-slide01" style="width: 1393px;" data-slick-index="4" aria-hidden="true">--}}
{{--                        <div class="img-holder">--}}
{{--                            <img src="images/img48.jpg" alt="image description">--}}
{{--                        </div>--}}
{{--                        <div class="img-holder">--}}
{{--                            <div class="coll1">--}}
{{--                                <img src="images/img49.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                            <div class="coll2">--}}
{{--                                <img src="images/img50.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                            <div class="coll3">--}}
{{--                                <img src="images/img51.jpg" alt="image description">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li></div></div><ul class="slick-dots" role="tablist" style="display: block;"><li class="" aria-hidden="true" role="presentation" aria-selected="true" aria-controls="navigation00" id="slick-slide00"><button type="button" data-role="none" role="button" aria-required="false" tabindex="0">1</button></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation01" id="slick-slide01" class=""><button type="button" data-role="none" role="button" aria-required="false" tabindex="0">2</button></li><li aria-hidden="false" role="presentation" aria-selected="false" aria-controls="navigation02" id="slick-slide02" class="slick-active"><button type="button" data-role="none" role="button" aria-required="false" tabindex="0">3</button></li></ul></ul>--}}
{{--        <!-- Work Slider of the Page end -->--}}
{{--    </section>--}}
    <!-- Mt Workspace Section of the Page -->
@stop

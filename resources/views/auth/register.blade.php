@extends('layouts.master')
@section('content')


    <!-- Mt Content Banner of the Page -->
    <section class="mt-contact-banner"
             style="background-image: url('{{ asset('assets/images/img43.jpg') }}');
                 visibility: visible;
                 background-repeat: no-repeat;
                 animation-delay: 0.4s;
                 animation-name: fadeInUp;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1>register</h1>
                    <nav class="breadcrumbs">
                        <ul class="list-unstyled">
                            <li><a href="index.html">home <i class="fa fa-angle-right"></i></a></li>
                            <li>register</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Mt Content Banner of the Page end -->
    <!-- Mt About Section of the Page -->
    <section class="mt-about-sec" style="padding-bottom: 0;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="txt wow fadeInUp" data-wow-delay="0.4s"
                         style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">

                    <div style="margin-bottom: 26px;">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red">{{ $message }}</strong>
                        </span>
                        @enderror

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red">{{ $message }}</strong>
                        </span>
                        @enderror


                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red">{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                        <h2>register</h2>
                        <p>Morbi in erat malesuada, sollicitudin massa at, tristique nisl. Maecenas id eros scelerisque,
                            vulputate tortor quis, efficitur arcu sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Umco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit sse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                            occaecat cupidatat <strong>Vestibulum sit amet metus euismod, condimentum lectus id,
                                ultrices sem.</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mt About Section of the Page -->
    <!-- Mt Detail Section of the Page -->
    <section class="mt-detail-sec toppadding-zero">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-push-1">
                    <div class="holder" style="margin: 0;">
                        <div class="mt-side-widget">
                            <header>
                                <h2 style="margin: 0 0 5px;">register</h2>
                                <p>Don’t have an account?</p>
                            </header>



                            <form method="POST" action="{{ route('register') }}" style="margin: 0 0 80px;">
                                @csrf
                                <fieldset>

                                    <div class="row">

                                        <div class="col-xs-12 col-sm-6">
                                            <input id="name" type="text" placeholder="Name"
                                                   class="input @error('name') is-invalid @enderror"
                                                   name="name"
                                                   value="{{ old('name') }}"
                                                   required
                                                   autocomplete="name"
                                                   autofocus>
                                        </div>

                                        <div class="col-xs-12 col-sm-6">
                                            <input id="email" type="email" placeholder="Your Email"
                                                   class="input @error('email') is-invalid @enderror"
                                                   name="email"
                                                   value="{{ old('email') }}"
                                                   required
                                                   autocomplete="email">
                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="col-xs-12 col-sm-6">
                                            <input type="text" placeholder="Your Phone" class="input">
                                        </div>

                                        <div class="col-xs-12 col-sm-6">
                                            <textarea placeholder="Address" class="input"></textarea>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-xs-12 col-sm-6">
                                            <input id="password" type="password" placeholder="Password"
                                                   class="input @error('password') is-invalid @enderror"
                                                   name="password"
                                                   required
                                                   autocomplete="new-password">
                                        </div>


                                        <div class="col-xs-12 col-sm-6">
                                            <input id="password-confirm" type="password" placeholder="Re-type Password"
                                                   class="input"
                                                   name="password_confirmation"
                                                   required
                                                   autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="box">
                                        <a href="#" class="help"></a>
                                    </div>

                                    <button type="submit" class="btn-type1">Register Me</button>

                                </fieldset>
                            </form>

                            <!-- Register with Social -->
{{--                            <header>--}}
{{--                                <h2 style="margin: 0 0 5px;">register with social</h2>--}}
{{--                                <p>Create an account using social</p>--}}
{{--                            </header>--}}
{{--                            <ul class="mt-socialicons">--}}
{{--                                <li class="mt-facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>--}}
{{--                                <li class="mt-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                <li class="mt-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
{{--                                <li class="mt-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
{{--                                <li class="mt-pinterest"><a href="#"><i class="fa fa-openid"></i></a></li>--}}
{{--                                <li class="mt-youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>--}}
{{--                            </ul>--}}
                        <!-- Register with Social Ends -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

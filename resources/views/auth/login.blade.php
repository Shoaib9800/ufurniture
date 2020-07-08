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
                    <h1>login</h1>
                    <nav class="breadcrumbs">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('index') }}">home <i class="fa fa-angle-right"></i></a></li>
                            <li>login</li>
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


                        <h2>login</h2>
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
                <div class="col-xs-12 col-sm-8 col-sm-push-2">
                    <div class="holder" style="margin: 0;">
                        <div class="mt-side-widget">
                            <header>
                                <h2 style="margin: 0 0 5px;">SIGN IN</h2>
                                <p>Welcome back! Sign in to Your Account</p>
                            </header>





                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <fieldset>

                                    <input id="email" type="email" placeholder="Email address"
                                           class="input @error('email') is-invalid @enderror"
                                           name="email"
                                           value="{{ old('email') }}"
                                           required
                                           autocomplete="email"
                                           autofocus>

                                    <input id="password" type="password" placeholder="Password"
                                           class="input @error('password') is-invalid @enderror"
                                           name="password"
                                           required
                                           autocomplete="current-password">




                                    <div class="box">
                                        <span class="left">
                                            <input class="checkbox form-check-input" type="checkbox" name="remember" id="check1" {{ old('remember') ? 'checked' : '' }}>

                                            <label for="check1">Remember Me</label>
                                        </span>


                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="help">
                                            Forgot Your Password?
                                        </a>
                                        @endif

                                    </div>

                                    <button type="submit" class="btn-type1">Login</button>

                                </fieldset>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@extends('layouts.master')
@section('content')
    <!-- Mt Contact Banner of the Page -->
    <section class="mt-contact-banner wow fadeInUp" data-wow-delay="0.4s"
             style="background-image: url('{{ asset('assets/images/img06.jpg') }}');
                 visibility: visible;
                 background-repeat: no-repeat;
                 animation-delay: 0.4s;
                 animation-name: fadeInUp;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1>CONTACT</h1>
                    <nav class="breadcrumbs">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('index') }}">Home <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- Mt Contact Banner of the Page -->
    <!-- Mt Contact Detail of the Page -->
    <section class="mt-contact-detail content-info wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <div class="txt-wrap">
                        <h2>uFurniture</h2>
                        <p>
                            <strong>Still, Got a question in your mind??</strong>
                            <span>
                            <br> <mark>Get in touch!</mark>
                        </span>
                        </p>
                    </div>
                    <ul class="list-unstyled contact-txt">
                        <li>
                            <strong>Phone</strong>
                            <a href="#">647-969-1872</a>
                        </li>
                        <li>
                            <strong>E_mail</strong>
                            <a href="#">sj@utradeinc.ca</a>
                        </li>
{{--                        <li>--}}
{{--                            <strong>Address</strong>--}}
{{--                            <address>Suite 18B, 148 Connaught Road <br>Central <br>New Yankee</address>--}}
{{--                        </li>--}}
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <h2>Have a question?</h2>
                    <!-- Contact Form of the Page -->
                    <form action="#" class="contact-form">
                        <fieldset>
                            <input type="text" class="form-control" placeholder="Name">
                            <input type="email" class="form-control" placeholder="E-Mail">
                            <input type="text" class="form-control" placeholder="Subject">
                            <textarea class="form-control" placeholder="Message"></textarea>
                            <button class="btn-type3" type="submit">Send</button>
                        </fieldset>
                    </form>
                    <!-- Contact Form of the Page end -->
                </div>
            </div>
        </div>
    </section><!-- Mt Contact Detail of the Page end -->

@endsection

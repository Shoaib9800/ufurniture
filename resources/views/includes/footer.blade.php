<!-- Footer Holder of the Page -->
<div class="footer-holder">
    <div class="container divider">
        <div class="row">
            <nav class="col-xs-12 col-sm-8">
                <!-- Footer Nav of the Page -->
                <ul class="list-unstyled f-widget-nav2">
                    <li><a href="{{ route('index') }}">Home</a></li>
{{--                    <li><a href="#">Products</a></li>--}}
{{--                    <li><a href="#">Collections</a></li>--}}
                    <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                    <li><a href="{{ route('contactUs') }}">Contact</a></li>
                </ul>
                <!-- Footer Nav of the Page end -->
            </nav>
            <div class="col-xs-12 col-sm-4">
                <!-- Social Network of the Page -->
                <ul class="list-unstyled social-network text-right">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
                <!-- Social Network of the Page end -->
            </div>
        </div>
    </div>
</div>
<!-- Footer Holder of the Page end -->



<!-- Footer area of the Page -->
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="bank-card align-center">
                    <img src="{{ asset('assets') }}/images/bank-card.png" alt="bank-card">
                </div>
                <p>© <a href="{{ route('index') }}">uFurniture</a> - All rights Reserved</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer area of the Page end -->


<!-- pageFooterAreaWrap -->
<div class="pageFooterAreaWrap position-relative text-center text-sm-left" data-parallax="scroll">
    <!-- pageFooterWrapHolder -->
    <div class="container position-relative pageFooterWrapHolder">
        <!-- subscribeAsideBlock -->
        <aside class="subscribeAsideBlock">
            <form action="/contact" method="post">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <h3 class="text-white text-uppercase">Sign up for our newsletter:</h3>
                        <p>Join over 5,000 people who get free</p>
                    </div>
                    <div class="col-12 col-md-5">
                        
                        <!-- input group -->
                        <div class="input-group">
                                @csrf
                                <input type="hidden" name="type" value="newsletter" />
                                <input name="email" type="email" class="form-control" placeholder="Your Email">
                                <div class="input-group-append">
                                    <!-- button -->
                                    <button class="btn btnTheme text-uppercase" type="submit" data-hover="Send">
                                        <span class="d-block btnText">Subscribe</span>
                                    </button>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </form>
        </aside>
        <!-- separator -->
        <hr class="separator">
        <footer id="pageFooter" class="position-relative">
            <div class="row">
                
                <div class="col-md-3 text-center text-lg-left position-static">
                    <!-- logo -->
                    <div class="logo">
                        <a href="home.html">
                            <img src="{{ asset('images/logo.png') }}" alt="Harrison Locks">
                        </a>
                    </div>
                    <!-- ftAddress -->
                    <address class="d-block ftAddress">
                        <!-- adrList -->
                        <ul class="list-unstyled adrList mb-0">
                            <li>
                                <i class="fas fa-map-marker-alt flex-shrink-0 icn"><span class="sr-only">icon</span></i>
                                <strong class="font-weight-normal text d-block">14, Central Market, Punjabi Bagh (West), New Delhi-110026</strong>
                            </li>
                            <li>
                                <i class="fas fa-phone fa-flip-horizontal flex-shrink-0 icn"><span class="sr-only">icon</span></i>
                                <strong class="font-weight-normal text d-block"><a href="#">+91 114 576 1101, 02, 03 ... 20</a></strong>
                            </li>
                            <li>
                                <i class="fas fa-envelope flex-shrink-0 icn"><span class="sr-only">icon</span></i>
                                <strong class="font-weight-normal text d-block"><a href="mailto:info@harrisonlocks.com">info@harrisonlocks.com</a></strong>
                            </li>
                        </ul>
                    </address>
                    <!-- copyrightWrap -->
                    <div class="copyrightWrap">
                        <p>Copyright &copy; 2019 <a href="/">Harrison Locks</a>.</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <!-- ftLinksNav -->
                    <nav class="ftLinksNav">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <h3 class="text-white">Information</h3>
                                <ul class="list-unstyled">
                                    <li><a href="/terms-and-conditions">Terms &amp; Conditions</a></li>
                                    <li><a href="/privacy-policy">Privacy policy</a></li>
                                    <li><a href="/disclaimer">Disclaimer</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <h3 class="text-white">Quick Link</h3>
                                <ul class="list-unstyled">
                                    <li><a href="/helpline-numbers">Helpline Numbers</a></li>
                                    <li><a href="/products">Products</a></li>
                                    <li><a href="/about-us">About Us</a></li>
                                    <li><a href="/contact-us">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                
                <div class="col-md-3 text-center text-md-left">
                    <h3 class="text-white">Find Us</h3>
                    <!-- ftSocialLinks -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14002.485472720467!2d77.1338362!3d28.6710537!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e54092bb285b3e1!2sHarrison%20Locks!5e0!3m2!1sen!2sin!4v1569585853540!5m2!1sen!2sin" width="300" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>

            </div>
        </footer>
    </div>
</div>

<span id="back-top" class="text-center rounded-circle fa fa-angle-up"></span>
<div id="loader" class="loader-holder">
    <div class="block">
        <div class="dot white"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div>



<div id="myModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Newsletter Subscription Confirmed</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Thankyou for subscribing with us</p>
        </div>
        <div class="modal-footer">
            <button class="btn btnTheme text-uppercase" type="button" data-hover="Close"  data-dismiss="modal">
                <span class="d-block btnText">Close</span>
            </button>
        </div>
        </div>
    </div>
</div>


@if (session('success'))
<script >
    $('#myModal').modal('show');
</script>
@endif

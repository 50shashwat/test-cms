
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
                    
                    {!! $footer[0]->content !!}
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
                                {!!$footer[1]->content !!}
                            </div>
                            <div class="col-md-6 col-sm-12">
                                {!! $footer[2]->content !!}
                            </div>
                        </div>
                    </nav>
                </div>
                
                <div class="col-md-3 text-center text-md-left">
                    {!! $footer[3]->content !!}
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


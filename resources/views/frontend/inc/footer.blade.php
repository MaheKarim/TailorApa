<!-- Footer Section Start -->
<footer class="full-row bg-footer footer-simple-dark text-general">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="mb-5 border-left pl-3">
                    <span class="d-block mb-3">Call us any time</span>
                    <div class="h6 text-white">+880 177 8966 356</div>
                    <span class="text-primary">24/7 Available</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="mb-5 border-left pl-3">
                    <span class="d-block mb-3">Send us email</span>
                    <div class="h6 text-white">admin@tailorapa.com</div>
                    <span class="text-primary">Response time avg 24/h</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="mb-5 border-left pl-3">
                    <span class="d-block mb-3">Visit in office</span>
                    <div class="h6 text-white">Dhanmondi, Dhaka , Bangladesh</div>
                    <span class="text-primary">10:00am - 4:00pm week</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="footer-widget footer-nav mb-5">
                    <h4 class="widget-title mb-4">Important Links</h4>
                    <ul>
                        <li><a href="#">About Company</a></li>
                        <li><a href="#">Payment System</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">Company History</a></li>
                        <li><a href="#">Consultation</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer-widget widget-hours mb-5">
                    <h4 class="widget-title mb-4">Business Hours</h4>
                    <ul>
                        <li>Monday - Friday : <span>9:00 am - 8:00 pm</span></li>
                        <li>Saturday : <span>9:00 am - 6:00 pm</span></li>
                        <li>Sunday : <span>Closed</span></li>
                        <li>Working Site : <span>7 Days</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer-widget widget-hours mb-5">
                    <h4 class="widget-title mb-4">Newslatter</h4>
                    <p>Signup for newslatter to get latest news and company updates.</p>
                    <form action="#" class="subscribe-widget">
                        <input class="form-control bg-dark" type="text" placeholder="Email Address" aria-label="Address">
                        <button class="btn btn-primary-fixed text-secondary rounded-0" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Copyright Section Start -->
<div class="copyright bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <span>© 2020 All Rights Reserved by TailorApa</span>
                <span class="pl-3">Design By <span class="text-primary">TailorApa</span></span>
            </div>
            <div class="col-md-4">
                <ul class="line-menu sitemap list-color-general">
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Permission</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Copyright Section End -->

<!-- Scroll to top -->
<a href="#" class="bg-primary text-white" id="scroll"><i class="fa fa-angle-up"></i></a>
<!-- End Scroll To top -->
</div>


<!--===============================================================================================-->
<!-- All Javascript Plugin File here -->
<script src="{{ asset('/')  }}frontend/assets/js/jquery.min.js"></script>
<script src="{{ asset('/')  }}frontend/assets/js/greensock.js"></script>
<script src="{{ asset('/')  }}frontend/assets/js/layerslider.transitions.js"></script>
<script src="{{ asset('/')  }}frontend/assets/js/layerslider.kreaturamedia.jquery.js"></script>
<script src="{{ asset('/')  }}frontend/assets/js/popper.min.js"></script>
<script src="{{ asset('/')  }}frontend/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('/')  }}frontend/assets/js/bootstrap-select.min.js"></script>
<script src="{{ asset('/')  }}frontend/assets/js/jquery.fancybox.min.js"></script>
<script src="{{ asset('/')  }}frontend/assets/js/wow.min.js"></script>
<script src="{{ asset('/')  }}frontend/assets/js/owl.carousel.min.js"></script>
<script src="{{ asset('/')  }}frontend/assets/js/mixitup.min.js"></script>
<script src="{{ asset('/')  }}frontend/assets/js/paraxify.js"></script>
<script src="{{ asset('/')  }}frontend/assets/js/validate.js"></script>
<script src="{{ asset('/')  }}frontend/assets/js/custom.js"></script>
<script>
    $(document).ready(function() {

        $('#slider').layerSlider({
            sliderVersion: '6.0.0',
            type: 'fullwidth',
            pauseOnHover: 'disabled',
            responsiveUnder: 0,
            layersContainer: 1200,
            maxRatio: 1,
            parallaxScrollReverse: true,
            hideUnder: 0,
            hideOver: 100000,
            skin: 'numbers',
            showBarTimer: false,
            showCircleTimer: false,
            thumbnailNavigation: 'disabled',
            allowRestartOnResize: true,
            skinsPath: 'assets/skins/',
            height: 960
        });

    });
</script>

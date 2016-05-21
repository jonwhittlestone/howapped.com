<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials._head')
    </head>
    <body>
        <div class="wrap">
           @include('layouts.partials._header')
           @yield('content')

            <footer class="footer-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="widget about-us">
                                <span class="footer-brand">How<span>Apped.</span></span>
                                <p>Jon is a Web Developer based in Dorking, Surrey. With over 10 years' experience with Front End and Back End development. Jon can help your Business flourish by delivering web projects, on budget and on schedule. He works in and around South London, UK.</p>
                            </div>
                            <!-- /.about-us -->
                        </div>
                        @include('layouts.partials.subfooter')
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </footer>
            <!-- /.footer-1 -->
           @include('layouts.partials.footer')
           
        </div>
        <!-- Bootstrap JS & Others JavaScript Plugins
            ================================================== -->
        <!-- Placed At The End Of The Document So Page Loads Faster -->
        <script src="/assets/js/jquery-2.0.3.min.js"></script>
        <script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="/assets/carouFredSel-6.2.1/jquery.carouFredSel-6.2.1.js"></script>
        <script src="/assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script src="/assets/jflickrfeed/jflickrfeed.min.js"></script>
        <script src="/assets/UItoTop/js/easing.js"></script>
        <script src="/assets/UItoTop/js/jquery.ui.totop.min.js"></script>
        <script src="/assets/isotope-site/jquery.isotope.min.js"></script>
        <script src="/assets/FitVids.js/jquery.fitvids.js"></script>
        <script type="text/javascript">
            var tpj = jQuery;
            tpj.noConflict();
            tpj(document).ready(function () {

                // Revolution Slider
                if (tpj.fn.cssOriginal != undefined)
                    tpj.fn.css = tpj.fn.cssOriginal;
                tpj('.fullwidthbanner').revolution(
                                    {
                                        delay: 9000,
                                        startwidth: 1200,
                                        startheight: 400,

                                        onHoverStop: "on",

                                        thumbWidth: 100,
                                        thumbHeight: 50,
                                        thumbAmount: 3,

                                        hideThumbs: 0,

                                        navigationType: "none",
                                        navigationArrows: "solo",
                                        navigationStyle: "round",
                                        navigationHAlign: "left",
                                        navigationVAlign: "bottom",
                                        navigationHOffset: 30,
                                        navigationVOffset: 30,

                                        soloArrowLeftHalign: "left",
                                        soloArrowLeftValign: "center",
                                        soloArrowLeftHOffset: 20,
                                        soloArrowLeftVOffset: 0,

                                        soloArrowRightHalign: "right",
                                        soloArrowRightValign: "center",
                                        soloArrowRightHOffset: 20,
                                        soloArrowRightVOffset: 0,

                                        stopAtSlide: -1,
                                        stopAfterLoops: -1,
                                        hideCaptionAtLimit: 0,
                                        hideAllCaptionAtLilmit: 0,
                                        hideSliderAtLimit: 0,

                                        fullWidth: "on",
                                        fullScreen: "off",
                                        fullScreenOffsetContainer: "#topheader-to-offset",

                                        shadow: 0
                                    });

                // PrettyPhoto
                tpj("a[rel^='prettyPhoto']").prettyPhoto({
                    theme: 'light_square',
                    social_tools: false
                });
                // jflickrfeed

                // jQuery UItoTop
                tpj().UItoTop({ easingType: 'easeOutQuart' });

                tpj('#sendit').on('click',function(e){
                    e.preventDefault();
                    tpj('#email-form .form-control').attr('disabled',true);


                    console.log('test');
                });

            });
            // jQuery CarouFredSel
            var caroufredsel = function () {
                tpj('#caroufredsel-portfolio-container').carouFredSel({
                    responsive: true,
                    scroll: 1,
                    circular: false,
                    infinite: false,
                    items: {
                        visible: {
                            min: 1,
                            max: 3
                        }
                    },
                    prev: '#portfolio-prev',
                    next: '#portfolio-next',
                    auto: {
                        play: false
                    }
                });
                tpj('#clients-wrapper').carouFredSel({
                    responsive: true,
                    scroll: 1,
                    circular: false,
                    infinite: false,
                    items: {
                        visible: {
                            min: 1,
                            max: 4
                        }
                    },
                    prev: '#client-prev',
                    next: '#client-next',
                    auto: {
                        play: false
                    }
                });
            };
            tpj(window).load(function () {
                caroufredsel();
            });
            tpj(window).resize(function () {
                caroufredsel();
            });

        </script>
    </body>
</html>
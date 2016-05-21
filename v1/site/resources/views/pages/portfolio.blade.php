@extends('layouts.master')
@section('content')
        <section class="page-title-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 page-title">
                        <h4>Portfolio</h4>
                    </div>
                    <!-- /.page-title -->
                    <div class="col-xs-6 hidden-xs breadcrumb-wrapper">
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Home</a></li>
                            <li class="active">Portfolio</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb-wrapper -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.page-title-wrapper -->
        <section class="colored-wrapper">
            <div class="container">
                <ul class="portfolio-filter nav nav-pills">
                    <li class="active"><a href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".artwork">Artwork</a></li>
                    <li><a href="#" data-filter=".creative">Creative</a></li>
                    <li><a href="#" data-filter=".nature">Nature</a></li>
                    <li><a href="#" data-filter=".outside">Outside</a></li>
                    <li><a href="#" data-filter=".photography">Photography</a></li>
                </ul>
                <!-- /.portfolio-filter -->
                <div class="row">
                    <div id="isotope-portfolio-container">
                        <div class="col-xs-12 col-md-6 portfolio-item-wrapper artwork creative">
                            <div class="portfolio-item">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/portfolio/photo (1).jpg" class="img-responsive" alt="1st Portfolio Thumb">
                                    <div class="image-overlay"></div>
                                    <a href="assets/img/portfolio/photo (1).jpg" rel="prettyPhoto[pp_gal]"  class="portfolio-zoom"><i class="icon-eye-open"></i></a>
                                    <a href="portfolio-single.html" class="portfolio-link"><i class="icon-link"></i></a>
                                </div>
                                <div class="portfolio-content">
                                    <h5>1st Portfolio Item</h5>
                                    <p>Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.portfolio-item-wrapper -->
                        <div class="col-xs-12 col-md-6 portfolio-item-wrapper nature outside">
                            <div class="portfolio-item">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/portfolio/photo (12).jpg" class="img-responsive" alt="2nd Portfolio Thumb">
                                    <div class="image-overlay"></div>
                                    <a href="assets/img/portfolio/photo (12).jpg" rel="prettyPhoto[pp_gal]" class="portfolio-zoom"><i class="icon-eye-open"></i></a>
                                    <a href="portfolio-single.html" class="portfolio-link"><i class="icon-link"></i></a>
                                </div>
                                <div class="portfolio-content">
                                    <h5>2nd Portfolio Item</h5>
                                    <p>Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.portfolio-item-wrapper -->
                        <div class="col-xs-12 col-md-6 portfolio-item-wrapper photography artwork">
                            <div class="portfolio-item">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/portfolio/photo (2).jpg" class="img-responsive" alt="3rd Portfolio Thumb">
                                    <div class="image-overlay"></div>
                                    <a href="assets/img/portfolio/photo (2).jpg" rel="prettyPhoto[pp_gal]" class="portfolio-zoom"><i class="icon-eye-open"></i></a>
                                    <a href="portfolio-single.html" class="portfolio-link"><i class="icon-link"></i></a>
                                </div>
                                <div class="portfolio-content">
                                    <h5>3rd Portfolio Item</h5>
                                    <p>Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.portfolio-item-wrapper -->
                        <div class="col-xs-12 col-md-6 portfolio-item-wrapper creative nature">
                            <div class="portfolio-item">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/portfolio/photo (4).jpg" class="img-responsive" alt="4th Portfolio Thumb">
                                    <div class="image-overlay"></div>
                                    <a href="assets/img/portfolio/photo (4).jpg" rel="prettyPhoto[pp_gal]" class="portfolio-zoom"><i class="icon-eye-open"></i></a>
                                    <a href="portfolio-single.html" class="portfolio-link"><i class="icon-link"></i></a>
                                </div>
                                <div class="portfolio-content">
                                    <h5>4th Portfolio Item</h5>
                                    <p>Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.portfolio-item-wrapper -->
                        <div class="col-xs-12 col-md-6 portfolio-item-wrapper nature">
                            <div class="portfolio-item">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/portfolio/photo (5).jpg" class="img-responsive" alt="5th Portfolio Thumb">
                                    <div class="image-overlay"></div>
                                    <a href="assets/img/portfolio/photo (5).jpg" rel="prettyPhoto[pp_gal]" class="portfolio-zoom"><i class="icon-eye-open"></i></a>
                                    <a href="portfolio-single.html" class="portfolio-link"><i class="icon-link"></i></a>
                                </div>
                                <div class="portfolio-content">
                                    <h5>5th Portfolio Item</h5>
                                    <p>Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.portfolio-item-wrapper -->
                        <div class="col-xs-12 col-md-6 portfolio-item-wrapper artwork creative">
                            <div class="portfolio-item">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/portfolio/photo (3).jpg" class="img-responsive" alt="6th Portfolio Thumb">
                                    <div class="image-overlay"></div>
                                    <a href="assets/img/portfolio/photo (3).jpg" rel="prettyPhoto[pp_gal]" class="portfolio-zoom"><i class="icon-eye-open"></i></a>
                                    <a href="portfolio-single.html" class="portfolio-link"><i class="icon-link"></i></a>
                                </div>
                                <div class="portfolio-content">
                                    <h5>6th Portfolio Item</h5>
                                    <p>Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.portfolio-item-wrapper -->
                        <div class="col-xs-12 col-md-6 portfolio-item-wrapper nature outside">
                            <div class="portfolio-item">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/portfolio/photo (7).jpg" class="img-responsive" alt="7th Portfolio Thumb">
                                    <div class="image-overlay"></div>
                                    <a href="assets/img/portfolio/photo (7).jpg" rel="prettyPhoto[pp_gal]" class="portfolio-zoom"><i class="icon-eye-open"></i></a>
                                    <a href="portfolio-single.html" class="portfolio-link"><i class="icon-link"></i></a>
                                </div>
                                <div class="portfolio-content">
                                    <h5>7th Portfolio Item</h5>
                                    <p>Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.portfolio-item-wrapper -->
                        <div class="col-xs-12 col-md-6 portfolio-item-wrapper photography artwork">
                            <div class="portfolio-item">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/portfolio/photo (6).jpg" class="img-responsive" alt="8th Portfolio Thumb">
                                    <div class="image-overlay"></div>
                                    <a href="assets/img/portfolio/photo (6).jpg" rel="prettyPhoto[pp_gal]" class="portfolio-zoom"><i class="icon-eye-open"></i></a>
                                    <a href="portfolio-single.html" class="portfolio-link"><i class="icon-link"></i></a>
                                </div>
                                <div class="portfolio-content">
                                    <h5>8th Portfolio Item</h5>
                                    <p>Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.portfolio-item-wrapper -->
                    </div>
                    <!-- /.isotope-portfolio-container -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

@stop
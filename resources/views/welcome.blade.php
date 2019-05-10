@extends('layouts.app')
@section('content')
@include('layouts.nav')
<!-- START REVOLUTION SLIDER 5.0 -->
<div id="slider_container" class="rev_slider_wrapper">
    <div id="rev-slider" class="rev_slider"  data-version="5.0">
        <ul>

            @foreach ($cats as $item)
            <li data-transition="slideremoveright">
                    <!-- MAIN IMAGE -->
                    <img src="img/slider/slide14.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption default-text capUppercase-title"
                        id="slide-1-layer-1"
                        data-x="left" data-hoffset="['160','160','120','40']"
                        data-y="top" data-voffset="['240','180','160','80']"
                        data-width="['auto','auto','auto','auto']"
                        data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="x:left;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-textAlign="['left','left','left','left']"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-fontsize="['24','18','14','12']"
                        data-lineheight="['24','18','14','12']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-start="500"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        style="z-index: 5;font-weight:700;white-space: nowrap;">Welcome to bacotna
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption default-text capUppercase-title"
                        id="slide-1-layer-2"
                        data-x="left" data-hoffset="['160','160','120','40']"
                        data-y="top" data-voffset="['275','205','180','95']"
                        data-width="['auto','auto','auto','auto']"
                        data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="x:left;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-textAlign="['left','left','left','left']"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-fontsize="['60','48','36','30']"
                        data-lineheight="['60','48','36','30']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-start="1500"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        style="z-index: 5;font-weight:700;white-space: nowrap;"><strong class="primary">Creative</strong> design
                    </div>

                    <!-- LAYER NR. 3 -->
                    <a class="tp-caption btn btn-default btn-lg btn-stroke"
                        id="slide-1-layer-3"
                        data-x="left" data-hoffset="['160','160','120','40']"
                        data-y="top" data-voffset="['360','270','230','135']"
                        data-width="['auto','auto','auto','auto']"
                        data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-paddingtop="[8,8,6,5]"
                        data-paddingright="[15,15,8,6]"
                        data-paddingbottom="[8,8,6,5]"
                        data-paddingleft="[15,15,8,6]"
                        data-fontsize="['14','14','11','9']"
                        data-lineheight="['18','18','14','12']"
                        data-start="2500"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        style="z-index: 5; white-space: nowrap;" href="#">Get in touch with us
                    </a>
                </li>
            @endforeach

        </ul>
    </div>
</div>
<!-- END OF SLIDER WRAPPER -->

<!-- Start contain wrapp -->
<div class="contain-wrapp paddingbot-clear">
    <div class="container">
        <div class="row marginbot20">
            <div class="col-md-4">
                <div class="align-icon">
                    <i class="fa fa-laptop icon-default fa-5x"></i>
                    <h5>Web design</h5>
                    <p>
                    Eam affert vivendo ea, quo et vero vituperatoribus, duo oporteat eleifend ut. Qui detracto deserunt ea. Te mea semper commodo persius.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="align-icon">
                    <i class="fa fa-diamond icon-default fa-5x"></i>
                    <h5>Graphic design</h5>
                    <p>
                    Eam affert vivendo ea, quo et vero vituperatoribus, duo oporteat eleifend ut. Qui detracto deserunt ea. Te mea semper commodo persius.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="align-icon">
                    <i class="fa fa-heart-o icon-default fa-5x"></i>
                    <h5>Logos design</h5>
                    <p>
                    Eam affert vivendo ea, quo et vero vituperatoribus, duo oporteat eleifend ut. Qui detracto deserunt ea. Te mea semper commodo persius.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading single-heading text-center">
                    <h3>Our work.</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Start gallery filter  -->
                <ul class="filter-items">
                    <li><a href="#" data-filter="" class="active">All</a></li>
                    <li><a href="#" data-filter="web">Web design</a></li>
                    <li><a href="#" data-filter="graphic">Graphic</a></li>
                    <li><a href="#" data-filter="logo">Logo</a></li>
                    <li><a href="#" data-filter="app">App</a></li>
                    <li><a href="#" data-filter="fonts">Fonts</a></li>
                </ul>
                <!-- End gallery filter -->
            </div>
        </div>
    </div>
    <div class="fullwidth">
        <div id="gallery" class="masonry gallery">
            <div class="grid-sizer col-md-4 col-sm-4  col-xs-12"></div>
            <!-- Start Gallery 01 -->
            <div data-filter="web" class="grid-item col-md-4 col-sm-4 col-xs-12">
                <div class="img-wrapper">
                    <div class="img-caption white-bg capBounceOut">
                        <a href="portfolio-detail.html" class="zoomer">
                            <h5>Dissentias
                            <span>By 99webpage</span></h5>
                        </a>
                    </div>
                    <img src="img/gallery/570x440/img01.jpg" class="img-responsive" alt="" />
                </div>
            </div>
            <!-- End Gallery 01 -->

            <!-- Star Gallery 02 -->
            <div data-filter="graphic" class="grid-item col-md-4 col-sm-4 col-xs-12">
                <div class="img-wrapper">
                    <div class="img-caption white-bg capBounceOut">
                        <a href="portfolio-detail.html" class="zoomer">
                            <h5>Dissentias
                            <span>By 99webpage</span></h5>
                        </a>
                    </div>
                    <img src="img/gallery/570x440/img02.jpg" class="img-responsive" alt="" />
                </div>
            </div>
            <!-- End Gallery 02 -->

            <!-- Start Gallery 03 -->
            <div data-filter="app" class="grid-item col-md-4 col-sm-4 col-xs-12">
                <div class="img-wrapper">
                    <div class="img-caption white-bg capBounceOut">
                        <a href="portfolio-detail.html" class="zoomer">
                            <h5>Dissentias
                            <span>By 99webpage</span></h5>
                        </a>
                    </div>
                    <img src="img/gallery/570x440/img03.jpg" class="img-responsive" alt="" />
                </div>
            </div>
            <!-- End Gallery 03 -->

            <!-- Start Gallery 04 -->
            <div data-filter="logo" class="grid-item col-md-4 col-sm-4 col-xs-12">
                <div class="img-wrapper">
                    <div class="img-caption white-bg capBounceOut">
                        <a href="portfolio-detail.html" class="zoomer">
                            <h5>Expetenda
                            <span>By 99webpage</span></h5>
                        </a>
                    </div>
                    <img src="img/gallery/570x440/img04.jpg" class="img-responsive" alt="" />
                </div>
            </div>
            <!-- End Gallery 04 -->

            <!-- Start Gallery 05 -->
            <div data-filter="logo" class="grid-item col-md-4 col-sm-4 col-xs-12">
                <div class="img-wrapper">
                    <div class="img-caption white-bg capBounceOut">
                        <a href="portfolio-detail.html" class="zoomer">
                            <h5>Eaplacerat
                            <span>By 99webpage</span></h5>
                        </a>
                    </div>
                    <img src="img/gallery/570x440/img05.jpg" class="img-responsive" alt="" />
                </div>
            </div>
            <!-- End Gallery 05 -->

            <!-- Start Gallery 06 -->
            <div data-filter="web" class="grid-item col-md-4 col-sm-4 col-xs-12">
                <div class="img-wrapper">
                    <div class="img-caption white-bg capBounceOut">
                        <a href="portfolio-detail.html" class="zoomer">
                            <h5>Definiebas
                            <span>By 99webpage</span></h5>
                        </a>
                    </div>
                    <img src="img/gallery/570x440/img06.jpg" class="img-responsive" alt="" />
                </div>
            </div>
            <!-- End Gallery 06 -->

            <!-- Start Gallery 07 -->
            <div data-filter="logo" class="grid-item col-md-4 col-sm-4 col-xs-12">
                <div class="img-wrapper">
                    <div class="img-caption white-bg capBounceOut">
                        <a href="portfolio-detail.html" class="zoomer">
                            <h5>Argumentum
                            <span>By 99webpage</span></h5>
                        </a>
                    </div>
                    <img src="img/gallery/570x440/img07.jpg" class="img-responsive" alt="" />
                </div>
            </div>
            <!-- End Gallery 07 -->

            <!-- Start Gallery 08 -->
            <div data-filter="logo" class="grid-item col-md-4 col-sm-4 col-xs-12">
                <div class="img-wrapper">
                    <div class="img-caption white-bg capBounceOut">
                        <a href="portfolio-detail.html" class="zoomer">
                            <h5>Quaerendum
                            <span>By 99webpage</span></h5>
                        </a>
                    </div>
                    <img src="img/gallery/570x440/img08.jpg" class="img-responsive" alt="" />
                </div>
            </div>
            <!-- End Gallery 08 -->

            <!-- Start Gallery 09 -->
            <div data-filter="web" class="grid-item col-md-4 col-sm-4 col-xs-12">
                <div class="img-wrapper">
                    <div class="img-caption white-bg capBounceOut">
                        <a href="portfolio-detail.html" class="zoomer">
                            <h5>Adolescens
                            <span>By 99webpage</span></h5>
                        </a>
                    </div>
                    <img src="img/gallery/570x440/img09.jpg" class="img-responsive" alt="" />
                </div>
            </div>
            <!-- End Gallery 09 -->
        </div>
    </div>
</div>
<!-- End contain wrapp -->

<!-- Start contain wrapp -->
<div class="contain-wrapp">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading single-heading text-center">
                    <h3>Testimoni.</h3>
                </div>
            </div>
        </div>
        <div class="row marginbot40">
            <div class="col-md-8 col-md-offset-2">
                <div class="single-item owl-carousel owl-theme">
                    <!-- Start item 1 -->
                    <div class="item">
                        <div class="single-testimoni">
                            <blockquote class="centered quote-sm">
                            <p>
                            Cu nec salutandi <strong>voluptatibus</strong>. Ceteros <strong>definitionem ad ius</strong>, ut eam unum volutpat, omnium gloriatur te mei.
                            </p>
                            </blockquote>
                            <div class="testimoni-author">
                                <a href="#" class="avatar"><img src="img/testimoni/avatar01.jpg" class="avatar" alt="" /></a>
                                <h6>Neng <span>geboy</span></h6>
                                <p>CFO - <a href="#">99webpage.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End item 1 -->

                    <!-- Start item 2 -->
                    <div class="item">
                        <div class="single-testimoni">
                            <blockquote class="centered quote-sm">
                            <p>
                            Tollit recusabo <strong>comprehensam</strong> vim ex, ceteros <strong>eligendi sententiae</strong> sed in. Te duo illum. Ne nec phaedrum nec.
                            </p>
                            </blockquote>
                            <div class="testimoni-author">
                                <a href="#" class="avatar"><img src="img/testimoni/avatar02.jpg" class="avatar" alt="" /></a>
                                <h6>Asep <span>jebot</span></h6>
                                <p>CFO - <a href="#">99webpage.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End item 2 -->

                    <!-- Start item 3 -->
                    <div class="item">
                        <div class="single-testimoni">
                            <blockquote class="centered quote-sm">
                            <p>
                            No pro civibus <strong>oportere</strong>, laoreet vivendo lobortis ei has, ei usu <strong>deleniti instructior</strong>. No nemore utamur mea.
                            </p>
                            </blockquote>
                            <div class="testimoni-author">
                                <a href="#" class="avatar"><img src="img/testimoni/avatar03.jpg" class="avatar" alt="" /></a>
                                <h6>Ujang <span>helmn</span></h6>
                                <p>CEO - <a href="#">99webpage.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End item 3 -->

                    <!-- Start item 4 -->
                    <div class="item">
                        <div class="single-testimoni">
                            <blockquote class="centered quote-sm">
                            <p>
                             Nemore tacimates <strong>argumentum</strong> id pri, nonumy delicatissimi ei sed. <strong>Quo ceteros perfecto</strong> sadipscing in pri.
                            </p>
                            </blockquote>
                            <div class="testimoni-author">
                                <a href="#" class="avatar"><img src="img/testimoni/avatar04.jpg" class="avatar" alt="" /></a>
                                <h6>Edah <span>jebrag</span></h6>
                                <p>Head manager - <a href="#">99webpage.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End item 4 -->

                    <!-- Start item 5 -->
                    <div class="item">
                        <div class="single-testimoni">
                            <blockquote class="centered quote-sm">
                            <p>
                            At duo nihil <strong>exerci quidam</strong>, ut homero utamur mea, usu in <strong>habemus recusabo</strong>. Nam cu solum ornatus, cu eum fuisset
                            </p>
                            </blockquote>
                            <div class="testimoni-author">
                                <a href="#" class="avatar"><img src="img/testimoni/avatar05.jpg" class="avatar" alt="" /></a>
                                <h6>Acep <span>pitak</span></h6>
                                <p>Designer - <a href="#">99webpage.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End item 5 -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 owl-column-wrapp">
                <div class="recent-4column owl-carousel owl-theme nav-sm">
                    <!-- Start item 1 -->
                    <div class="item">
                        <div class="clients-logo">
                            <a href="#" class="logo-current"><img src="img/clients/logo01-gray.png" alt="" /></a>
                            <a href="#" class="logo-hover"><img src="img/clients/logo01.png" alt="" /></a>
                        </div>
                    </div>
                    <!-- End item 1 -->

                    <!-- Start item 2 -->
                    <div class="item">
                        <div class="clients-logo">
                            <a href="#" class="logo-current"><img src="img/clients/logo02-gray.png" alt="" /></a>
                            <a href="#" class="logo-hover"><img src="img/clients/logo02.png" alt="" /></a>
                        </div>
                    </div>
                    <!-- End item 2 -->

                    <!-- Start item 3 -->
                    <div class="item">
                        <div class="clients-logo">
                            <a href="#" class="logo-current"><img src="img/clients/logo03-gray.png" alt="" /></a>
                            <a href="#" class="logo-hover"><img src="img/clients/logo03.png" alt="" /></a>
                        </div>
                    </div>
                    <!-- End item 3 -->

                    <!-- Start item 4 -->
                    <div class="item">
                        <div class="clients-logo">
                            <a href="#" class="logo-current"><img src="img/clients/logo04-gray.png" alt="" /></a>
                            <a href="#" class="logo-hover"><img src="img/clients/logo04.png" alt="" /></a>
                        </div>
                    </div>
                    <!-- End item 4 -->

                    <!-- Start item 5 -->
                    <div class="item">
                        <div class="clients-logo">
                            <a href="#" class="logo-current"><img src="img/clients/logo05-gray.png" alt="" /></a>
                            <a href="#" class="logo-hover"><img src="img/clients/logo05.png" alt="" /></a>
                        </div>
                    </div>
                    <!-- End item 5 -->

                    <!-- Start item 6 -->
                    <div class="item">
                        <div class="clients-logo">
                            <a href="#" class="logo-current"><img src="img/clients/logo06-gray.png" alt="" /></a>
                            <a href="#" class="logo-hover"><img src="img/clients/logo06.png" alt="" /></a>
                        </div>
                    </div>
                    <!-- End item 6 -->

                    <!-- Start item 7 -->
                    <div class="item">
                        <div class="clients-logo">
                            <a href="#" class="logo-current"><img src="img/clients/logo07-gray.png" alt="" /></a>
                            <a href="#" class="logo-hover"><img src="img/clients/logo07.png" alt="" /></a>
                        </div>
                    </div>
                    <!-- End item 7 -->

                    <!-- Start item 8 -->
                    <div class="item">
                        <div class="clients-logo">
                            <a href="#" class="logo-current"><img src="img/clients/logo08-gray.png" alt="" /></a>
                            <a href="#" class="logo-hover"><img src="img/clients/logo08.png" alt="" /></a>
                        </div>
                    </div>
                    <!-- End item 8 -->

                    <!-- Start item 9 -->
                    <div class="item">
                        <div class="clients-logo">
                            <a href="#" class="logo-current"><img src="img/clients/logo09-gray.png" alt="" /></a>
                            <a href="#" class="logo-hover"><img src="img/clients/logo09.png" alt="" /></a>
                        </div>
                    </div>
                    <!-- End item 9 -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End contain wrapp -->

<!-- Start contain wrapp -->
<div class="contain-wrapp soft-container paddingbot-clear">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading single-heading text-center">
                    <h3>Our team.</h3>
                </div>
            </div>
        </div>
    </div>
    <ul class="team-fullwidth">
        <li>
            <div class="team-base">
                <img src="img/team/team01.png" class="img-team" alt="" />
                <div class="content-caption">
                    <div class="team-content-caption">
                        <div>
                            <h5>Asep jebot</h5>
                            <span class="team-position">Founder</span>
                            <a href="#" class="network"><i class="fa fa-facebook icon-rectangle icon-primary"></i></a>
                            <a href="#" class="network"><i class="fa fa-twitter icon-rectangle icon-primary"></i></a>
                            <a href="#" class="network"><i class="fa fa-instagram icon-rectangle icon-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="team-base">
                <img src="img/team/team02.png" class="img-team" alt="" />
                <div class="content-caption">
                    <div class="team-content-caption">
                        <div>
                            <h5>Neng geboy</h5>
                            <span class="team-position">Co-Founder</span>
                            <a href="#" class="network"><i class="fa fa-facebook icon-rectangle icon-primary"></i></a>
                            <a href="#" class="network"><i class="fa fa-twitter icon-rectangle icon-primary"></i></a>
                            <a href="#" class="network"><i class="fa fa-instagram icon-rectangle icon-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="team-base">
                <img src="img/team/team03.png" class="img-team" alt="" />
                <div class="content-caption">
                    <div class="team-content-caption">
                        <div>
                            <h5>Ujang bako</h5>
                            <span class="team-position">Web designer</span>
                            <a href="#" class="network"><i class="fa fa-facebook icon-rectangle icon-primary"></i></a>
                            <a href="#" class="network"><i class="fa fa-twitter icon-rectangle icon-primary"></i></a>
                            <a href="#" class="network"><i class="fa fa-instagram icon-rectangle icon-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="team-base">
                <img src="img/team/team04.png" class="img-team" alt="" />
                <div class="content-caption">
                    <div class="team-content-caption">
                        <div>
                            <h5>Acep kehed</h5>
                            <span class="team-position">Graphic designer</span>
                            <a href="#" class="network"><i class="fa fa-facebook icon-rectangle icon-primary"></i></a>
                            <a href="#" class="network"><i class="fa fa-twitter icon-rectangle icon-primary"></i></a>
                            <a href="#" class="network"><i class="fa fa-instagram icon-rectangle icon-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<!-- End contain wrapp -->
<div class="clearfix"></div>

<!-- Start contain wrapp -->
<div class="contain-wrapp padding-bot30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading single-heading text-center">
                    <h3>Our blog.</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="lastest-article unboxed">
                    <div class="img-wrapper">
                        <ul class="meta-caption">
                            <li><a href="#"><i class="fa fa-comments"></i>4 Comments</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i>08/08/2017</a></li>
                            <li><a href="#"><i class="fa fa-user"></i>John doe</a></li>
                        </ul>
                        <a href="#"><img src="img/blog/570x440/img01.jpg" class="img-responsive" alt="" /></a>
                    </div>
                    <div class="article-content">
                        <h5 class="title"><a href="#">Quaestio his possim audiam sit</a></h5>
                        <p>
                        Dolores consequ sea at nam eros quaeque tincidunt nihil theophrastus, qui saperet perfecto id. Ut est unum vocent ocurreret, quo et iriure option.
                        </p>
                        <a href="#" class="btn btn-default btn-stroke btn-sm">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="lastest-article unboxed">
                    <div class="img-wrapper">
                        <ul class="meta-caption">
                            <li><a href="#"><i class="fa fa-comments"></i>0 Comments</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i>08/08/2017</a></li>
                            <li><a href="#"><i class="fa fa-user"></i>John doe</a></li>
                        </ul>
                        <a href="#"><img src="img/blog/570x440/img02.jpg" class="img-responsive" alt="" /></a>
                    </div>
                    <div class="article-content">
                        <h5 class="title"><a href="#">Ornatus eum fuisset cu solum </a></h5>
                        <p>
                        Dolores consequ sea at nam eros quaeque tincidunt nihil theophrastus, qui saperet perfecto id. Ut est unum vocent ocurreret, quo et iriure option.
                        </p>
                        <a href="#" class="btn btn-default btn-stroke btn-sm">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="lastest-article unboxed">
                    <div class="img-wrapper">
                        <ul class="meta-caption">
                            <li><a href="#"><i class="fa fa-comments"></i>1 Comments</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i>05/08/2017</a></li>
                            <li><a href="#"><i class="fa fa-user"></i>John doe</a></li>
                        </ul>
                        <a href="#"><img src="img/blog/570x440/img03.jpg" class="img-responsive" alt="" /></a>
                    </div>
                    <div class="article-content">
                        <h5 class="title"><a href="#">At duo nihil exerci quidam ut</a></h5>
                        <p>
                        Dolores consequ sea at nam eros quaeque tincidunt nihil theophrastus, qui saperet perfecto id. Ut est unum vocent ocurreret, quo et iriure option.
                        </p>
                        <a href="#" class="btn btn-default btn-stroke btn-sm">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End contain wrapp -->

@include('layouts.footer')
@endsection

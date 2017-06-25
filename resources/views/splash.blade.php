<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Premise Software Solutions, Inc.</title>

    <!-- Bootstrap core CSS -->
    {{--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">--}}

    <link href="{{asset('css/vendor.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this theme -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>

    <!-- Temporary navbar container fix -->
    <style>
        .navbar-toggler {
            z-index: 1;
        }

        @media (max-width: 576px) {
            nav > .container {
                width: 100%;
            }
        }
    </style>

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse navbar-expanded" id="mainNav">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand page-scroll" href="#page-top">Premise Software</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="app"></div>

<style>
    .h-85 {
        height: 85% !important;
    }

</style>

<!-- Masthead -->
<header class="masthead" style="background-image: url('img/AustinSkyLine.png');">
    <div class="container h-85">
        <div class="row h-85">
            <div class="col-12 my-auto text-center text-white">
                <div class="masthead-title" style="font-weight: bolder;">Premise<br/>Software<br/>Solutions</div>
                <hr class="colored">
            </div>
        </div>
    </div>
    <div class="scroll-down">
        <a class="btn page-scroll" href="#about">
            <i class="fa fa-angle-down fa-fw"></i>
        </a>
    </div>
</header>

<!-- About Section -->
<section class="page-section" id="about">
    <div class="container-fluid">
        <div class="wow fadeIn text-center">
            <h2>A little about myself... </h2>
            <p class="mb-0">Prior <a href="https://en.wikipedia.org/wiki/NonStop_(server_computers)" target="_blank">HP NonStop</a> application developer turned lose as an open source full-stack web developer back in late 2014.<br/>
                Basically, a <a href="https://en.wikipedia.org/wiki/Who_Moved_My_Cheese%3F" target="_blank" >'who moved my cheese'</a> kind of situation.  This did not come as a surprise to me, as I could see it coming,<br/>
                and as such started my search for new and interesting development work.  In 2015, I discovered Laravel and have been working with it ever since,<br/>
                and am currently working at rateGenius.com in Austin Texas as a full-stack Laravel developer.</p>
        </div>
        <hr class="colored">
    </div>
</section>

<!-- Team Section -->
<section class="page-section bg-faded" id="team">
    <div class="container text-center wow fadeIn">
        <div class="item">
            <img class="img-fluid img-responsive" src="img/facebookPic-bigger.png" alt="">
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="call-to-action" style="background-image: url('img/poles-small.jpg');"></section>

<!-- Portfolio Grid Section -->
<section class="page-section" id="portfolio">
    <div class="container text-center wow fadeIn">
        <h2>Projects and Design Patterns</h2>
        <hr class="colored">
        <div class="controls mt-3">
            <button type="button" class="control btn btn-secondary btn-sm mx-2 mb-4" data-filter="all">All</button>
            <button type="button" class="control btn btn-secondary btn-sm mx-2 mb-4" data-filter=".project">Projects</button>
            <button type="button" class="control btn btn-secondary btn-sm mx-2 mb-4" data-filter=".design-pattern">Patterns</button>
        </div>
        <div class="portfolio-grid clearfix" id="portfolioList">
            <!-- Grid Item 1 -->
            <div class="mix project" href="#portfolioModal1" data-toggle="modal" id="portGrid01">
                <div class="portfolio-wrapper">
                    <img src="img/ezslot-small.png" alt="">
                    <div class="caption">
                        <div class="caption-text">
                            <a class="text-title">Option Trading Site</a>
                            <span class="text-category"></span>
                        </div>
                        <div class="caption-bg"></div>
                    </div>
                </div>
            </div>
            <!-- Grid Item 5 -->
            <div class="mix design-pattern" href="#portfolioModal5" data-toggle="modal" id="portGrid02">
                <div class="portfolio-wrapper">
                    <img src="img/design-pattern-background-small.png" alt="">
                    <div class="caption">
                        <div class="caption-text">
                            <a class="text-title">Chain of Responsibility Design Pattern</a>
                            <span class="text-category"></span>
                        </div>
                        <div class="caption-bg"></div>
                    </div>
                </div>
            </div>
            <!-- Grid Item 3 -->
            <div class="mix project" href="#portfolioModal3" data-toggle="modal" id="portGrid02">
                <div class="portfolio-wrapper">
                    <img src="img/photo-gallery-small.png" alt="">
                    <div class="caption">
                        <div class="caption-text">
                            <a class="text-title">HTML tables Site</a>
                            <span class="text-category"></span>
                        </div>
                        <div class="caption-bg"></div>
                    </div>
                </div>
            </div>
            <!-- Grid Item 4 -->
            <div class="mix project" href="#portfolioModal4" data-toggle="modal" id="portGrid02">
                <div class="portfolio-wrapper">
                    <img src="img/bullcreekdata-small.png" alt="">
                    <div class="caption">
                        <div class="caption-text">
                            <a class="text-title">HTML tables Site</a>
                            <span class="text-category"></span>
                        </div>
                        <div class="caption-bg"></div>
                    </div>
                </div>
            </div>
            <!-- Grid Item 2 -->
            <div class="mix project" href="#portfolioModal2" data-toggle="modal" id="portGrid02">
                <div class="portfolio-wrapper">
                    <img src="img/time-trax-small.png" alt="">
                    <div class="caption">
                        <div class="caption-text">
                            <a class="text-title">HTML tables Site</a>
                            <span class="text-category"></span>
                        </div>
                        <div class="caption-bg"></div>
                    </div>
                </div>
            </div>
            <!-- Grid Item 6 -->
            <div class="mix design-pattern" href="#portfolioModal6" data-toggle="modal" id="portGrid02">
                <div class="portfolio-wrapper">
                    <img src="img/design-pattern-background-small.png" alt="">
                    <div class="caption">
                        <div class="caption-text">
                            <a class="text-title">Strategy Design Pattern</a>
                            <span class="text-category"></span>
                        </div>
                        <div class="caption-bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="page-section pricing" id="pricing" style="background-image: url('img/poles-small.jpg'); height: 750px;"></section>

<!-- Contact Section -->
<section class="page-section" id="contact">
    <div class="container wow fadeIn">
        <div class="text-center">
            <h2>Contact Us</h2>
            <hr class="colored">
            <p>Please tell us about your next project and we will let you know what we can do to help you.</p>
        </div>
        <div class="row mt-4">
            <div class="col-lg-8 offset-lg-2">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-secondary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<section class="footer" style="background: #888E9E; padding: 2rem;">
    <div class="container text-center">
        <div class="col-lg-12">
            &copy; Copyright 2008 -
            <script language="JavaScript" type="text/javascript">
                let now = new Date;
                theYear=now.getYear();
                if (theYear < 1900) {
                    theYear=theYear+1900;
                }
                document.write(theYear)
            </script>
            Premise Software Solutions. All rights reserved.
        </div>
    </div>
</section>

<!-- Portfolio Modals -->
<!-- Example Modal 1: Corresponds with Portfolio Carousel Item 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('img/ezslot-small.png')">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal modal-dismiss" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h2>Swing Low Option Trading</h2>
                            <hr class="colored">
                            <p>An application for managing the trades of options sellers.</p>
                            <br/>
                            <br/>
                            <br/>
                            <p class="lead">
                                <a href="https://www.swinglowoptiontrading.com//" target="_blank" class="btn btn-lg btn-primary">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/ezslot" target="_blank" class="btn btn-lg btn-primary">Github</a>
                            </p>
                        </div>
                        <div class="col-lg-8 offset-lg-2">
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <div class="col-lg-8 offset-lg-2">
                            <button type="button" class="btn btn-primary modal-dismiss" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Example Modal 2: Corresponds with Portfolio Carousel Item 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('img/time-trax-small.png')">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal modal-dismiss" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h2>Swing Low Option Trading</h2>
                            <hr class="colored">
                            <p>An application for managing the trades of options sellers.</p>
                            <br/>
                            <br/>
                            <br/>
                            <p class="lead">
                                <a href="http://www.premisesoftwaresolutions.com/timeCard/2015-11-09" target="_blank" class="btn btn-lg btn-primary" target="_blank" style="color: #e6e6f1">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/TimeTrax" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Github</a>
                            </p>
                        </div>
                        <div class="col-lg-8 offset-lg-2">
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <div class="col-lg-8 offset-lg-2">
                            <button type="button" class="btn btn-primary modal-dismiss" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Example Modal 3: Corresponds with Portfolio Carousel Item 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('img/photo-gallery-small.png')">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal modal-dismiss" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h2>Swing Low Option Trading</h2>
                            <hr class="colored">
                            <p>An application for managing the trades of options sellers.</p>
                            <br/>
                            <br/>
                            <br/>
                            <p class="lead">
                                <a href="http://photoGallery.premisesoftware.com" class="btn btn-lg btn-primary" target="_blank" style="color: #e6e6f1">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/photo_gallery.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Github</a>
                            </p>
                        </div>
                        <div class="col-lg-8 offset-lg-2">
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <div class="col-lg-8 offset-lg-2">
                            <button type="button" class="btn btn-primary modal-dismiss" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Example Modal 4: Corresponds with Portfolio Carousel Item 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('img/bullcreekdata-small.png')">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal modal-dismiss" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h2>Swing Low Option Trading</h2>
                            <hr class="colored">
                            <p>An application for managing the trades of options sellers.</p>
                            <br/>
                            <br/>
                            <br/>
                            <p class="lead">
                                <a href="http://photoGallery.premisesoftware.com" target="_blank" class="btn btn-lg btn-primary" target="_blank" style="color: #e6e6f1">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/photo_gallery.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Github</a>
                            </p>
                        </div>
                        <div class="col-lg-8 offset-lg-2">
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <div class="col-lg-8 offset-lg-2">
                            <button type="button" class="btn btn-primary modal-dismiss" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Example Modal 5: Corresponds with Portfolio Carousel Item 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('img/design-pattern-background-small.png')">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal modal-dismiss" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h2>Swing Low Option Trading</h2>
                            <hr class="colored">
                            <p>An application for managing the trades of options sellers.</p>
                            <br/>
                            <br/>
                            <br/>
                            <p class="lead">
                                <a href="http://photoGallery.premisesoftware.com" target="_blank" class="btn btn-lg btn-primary" target="_blank" style="color: #e6e6f1">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/photo_gallery.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Github</a>
                            </p>
                        </div>
                        <div class="col-lg-8 offset-lg-2">
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <div class="col-lg-8 offset-lg-2">
                            <button type="button" class="btn btn-primary modal-dismiss" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Example Modal 6: Corresponds with Portfolio Carousel Item 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('img/design-pattern-background-small.png')">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal modal-dismiss" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h2>Swing Low Option Trading</h2>
                            <hr class="colored">
                            <p>An application for managing the trades of options sellers.</p>
                            <br/>
                            <br/>
                            <br/>
                            <p class="lead">
                                <a href="http://photoGallery.premisesoftware.com" target="_blank" class="btn btn-lg btn-primary" target="_blank" style="color: #e6e6f1">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/photo_gallery.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Github</a>
                            </p>
                        </div>
                        <div class="col-lg-8 offset-lg-2">
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <div class="col-lg-8 offset-lg-2">
                            <button type="button" class="btn btn-primary modal-dismiss" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/vendor.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>


</body>

</html>

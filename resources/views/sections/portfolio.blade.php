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
                    <img src="{{asset('img/ezslot-small.png')}}" alt="">
                    <div class="caption">
                        <div class="caption-text">
                            <a class="text-title">Option Trading</a>
                            <span class="text-category"></span>
                        </div>
                        <div class="caption-bg"></div>
                    </div>
                </div>
            </div>
            <!-- Grid Item 5 -->
            <div class="mix design-pattern" href="#portfolioModal5" data-toggle="modal" id="portGrid02">
                <div class="portfolio-wrapper">
                    <img src="{{asset('img/design-pattern-background-small.png')}}" alt="">
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
                    <img src="{{asset('img/photo-gallery-small.png')}}" alt="">
                    <div class="caption">
                        <div class="caption-text">
                            <a class="text-title">A no framework photo gallery</a>
                            <span class="text-category"></span>
                        </div>
                        <div class="caption-bg"></div>
                    </div>
                </div>
            </div>
            <!-- Grid Item 4 -->
            <div class="mix project" href="#portfolioModal4" data-toggle="modal" id="portGrid02">
                <div class="portfolio-wrapper">
                    <img src="{{asset('img/forum-small.png')}}" alt="">
                    <div class="caption">
                        <div class="caption-text">
                            <a class="text-title">A Forum Application</a>
                            <span class="text-category"></span>
                        </div>
                        <div class="caption-bg"></div>
                    </div>
                </div>
            </div>
            <!-- Grid Item 2 -->
            <div class="mix project" href="#portfolioModal2" data-toggle="modal" id="portGrid02">
                <div class="portfolio-wrapper">
                    <img src="{{asset('img/time-trax-small.png')}}" alt="">
                    <div class="caption">
                        <div class="caption-text">
                            <a class="text-title">Data Consistency</a>
                            <span class="text-category"></span>
                        </div>
                        <div class="caption-bg"></div>
                    </div>
                </div>
            </div>
            <!-- Grid Item 6 -->
            <div class="mix design-pattern" href="#portfolioModal6" data-toggle="modal" id="portGrid02">
                <div class="portfolio-wrapper">
                    <img src="{{asset('img/design-pattern-background-small.png')}}" alt="">
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
                            <h2>data consistency</h2>
                            <hr class="colored">
                            <p>From my observation and experience, the PHP world does not typically embrace this in their application design.  Its more of an after thought that never really gets implemented.</p>
                            <p>The simple premise behind this is; if another user has changed the data which you are currently viewing, you should be notified as such.</p>
                            <p>This application demonstrates a server side technique, informing you that another user has changed the data with which you are attempting to change.</p>
                            <p>This technique ensures data consistency.</p>
                            <br/>
                            <p class="lead">
                                <a href="http://www.premisesoftwaresolutions.com/timeCard/2015-11-09" class="btn btn-lg btn-primary" target="_blank" style="color: #e6e6f1">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/TimeTrax" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Github</a>
                            </p>
                        </div>
                        <br/>
                        <div class="embed-responsive">
                            <video id="timetraxVid" class="video-js vjs-default-skin vjs-big-play-centered" controls width="1600px" height="900px" preload="auto"
                                   data-setup='{"aspectRatio":"16:9"}'>
                                <source src="{{asset('mov/dataConsistency.mp4')}}" type='video/mp4'>
                                <p class="vjs-no-js">
                                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                </p>
                            </video>
                        </div>
                        <div class="col-lg-8 offset-lg-2" style="padding: 30px">
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
                            <p>An application for managing the option trades.</p>
                            <br/>
                            <p class="lead">
                                <a href="http://photoGallery.premisesoftware.com/public" class="btn btn-lg btn-primary" target="_blank" style="color: #e6e6f1">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/photo_gallery.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Github</a>
                            </p>
                        </div>
                        <div class="col-lg-8 offset-lg-2">
                        </div>
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
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('img/forum-small.png')">
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
                            <h2>A Forum Application</h2>
                            <hr class="colored">
                            {{--<p>Just for fun; a forum app</p>--}}
                            <br/>
                            <br/>
                            <br/>
                            <p class="lead">
                                <a href="http://forum.premisesoftware.com/" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/forum" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Github</a>
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
                            <h2>Chain of Responsibility</h2>
                            <hr class="colored">
                            <br/>
                            <br/>
                            <br/>
                            <p class="lead">
                                <a href="https://github.com/RichJones22/chainOfResponsibility_cpp.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">C++</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/chainOfResponsibility_java.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Java</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/chainOfResponsibility_php.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">PHP</a>
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
                            <h2>Strategy</h2>
                            <hr class="colored">
                            <br/>
                            <br/>
                            <br/>
                            <p class="lead">
                                <a href="https://github.com/RichJones22/strategy_cpp.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">C++</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/strategy_java.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Java</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/strategy_php.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">PHP</a>
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





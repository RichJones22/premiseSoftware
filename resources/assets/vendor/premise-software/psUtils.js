/*
 Premise Software javascript utilities

 file name: psUtils.js
 */

psNS.namespace('ps.utils');
psNS.ps.utils = {
    reloadMainNavBar: function () {

        function LT992() {
            $("#mainNav").addClass("navbar-shrink");
            $("#mainNavName").removeClass("display-off");
            $("#logo-no-symbol").addClass("display-off");
        }

        function mainNavNameGT100() {
            if ($("#mainNav").offset().top > 100) {
                $("#mainNavName").removeClass("display-off");
            } else {
                $("#mainNavName").addClass("display-off");
            }
        }

        function mainNavGT100() {
            if ($("#mainNav").offset().top > 100) {
                $("#mainNav").addClass("navbar-shrink");
            } else {
                $("#mainNav").removeClass("navbar-shrink");
            }
        }

        function logoNoSymbolGT300() {
            if ($("#mainNav").offset().top > 300) {
                $("#logo-no-symbol").addClass("display-off").fadeOut('slow', 'swing');
            } else {
                $("#logo-no-symbol").removeClass("display-off").fadeIn('low', 'swing');
            }
        }

        function displayOffLogoNoSymbol() {
            setTimeout(function () {
                $("#logo-no-symbol")
                    .removeClass("display-off");
            }, 1000);
        }

        function callLT992(callBack) {
            if ($(window).width() < 992) {
                LT992();
            }
            else {
                callBack();
            }
        }

        function onLoadAndResize() {
            callLT992(function() {
                mainNavGT100();
                mainNavNameGT100();
                displayOffLogoNoSymbol()
            });
        }

        //
        // window refresh; SPA specific page refresh
        //
        $(window).on('load', function() {
            onLoadAndResize();
        });

        //
        // window resize
        //
        $(window).on('resize', function() {
            onLoadAndResize();
        });

        //
        // window scrolls
        //
        $(window).scroll(function() {
            callLT992(function() {
                mainNavNameGT100();
                logoNoSymbolGT300();
            });
        });
    },
    timetraxVidModalClose: function() {
        // get the user defined id
        let thisId = "#timetraxVid";

        // get videojs src from thisId
        let vidObj = $(thisId).children('video');
        let vidSrc = vidObj.find('source');
        let url = $(vidSrc).attr('src');

        // get dom inject video id.
        let vidId = $(vidObj).attr('id');

        // get the player
        let player = videojs(vidId);

        /* Assign empty url value to the video src attribute when
         modal hide, which stop the video playing */
        $("#portfolioModal2").on('hide.bs.modal', function() {
            player.reset();
        });

        /* Assign the initially stored url back to the video src
         attribute when modal is displayed again */
        $("#portfolioModal2").on('show.bs.modal', function() {
            player.src(url);
        });
    },
    isNotDefined: function (value) {
        return typeof value === 'undefined';
    },
    isDefined: function(value) {
        return psNS.ps.utils.isNotDefined(value) === false;
    },
    getCurrentYear: function() {
        let now1 = new Date;
        let theYear = now1.getYear();
        if (theYear < 1900) {
            theYear = theYear+1900;
        }
        return theYear;
    }
};

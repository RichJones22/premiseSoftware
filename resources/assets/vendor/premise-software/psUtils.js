/*
 Premise Software javascript utilities

 file name: psUtils.js
 */

psNS.namespace('ps.utils');
psNS.ps.utils = {
    reloadMainNavBar: function () {
        //
        // the below code is specific to SPA page refreshes...
        //
        $(window).on('load', function(){
            if ($("#mainNav").offset().top > 100) {
                $("#mainNav").addClass("navbar-shrink");
            } else {
                $("#mainNav").removeClass("navbar-shrink");
            }

            if ($("#mainNav").offset().top > 100) {
                $("#mainNavName").removeClass("display-off");
            } else {
                $("#mainNavName").addClass("display-off");
            }
        });

        //
        // as the window scrolls
        //
        $(window).scroll(function() {
            if ($("#mainNav").offset().top > 100) {
                $("#mainNavName").removeClass("display-off");
            } else {
                $("#mainNavName").addClass("display-off");
            }

            if ($("#mainNav").offset().top > 300) {
                $("#logo-no-symbol").addClass("display-off").fadeOut('slow', 'swing');
            } else {
                $("#logo-no-symbol").removeClass("display-off").fadeIn('low', 'swing');
            }
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

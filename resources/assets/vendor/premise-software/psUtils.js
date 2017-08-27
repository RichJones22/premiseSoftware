/*
 Premise Software javascript utilities

 file name: psUtils.js
 */

psNS.namespace('ps.utils');
psNS.ps.utils = {
    reloadMainNavBar: function () {
        $(window).on('load', function(){
            if ($("#mainNav").offset().top > 100) {
                $("#mainNav").addClass("navbar-shrink");
            } else {
                $("#mainNav").removeClass("navbar-shrink");
            }
        });
    },
    timetraxVidModalClose: function() {
        // get the user defined id
        let thisId = "#timetraxVid";

        // get source that the video play plays via the user defined id.
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
    // ,
    // PsCopyWrite: function() {
    //     return '&copy; Copyright 2008 - '+psNS.ps.utils.getCurrentYear()+' Premise Software Solutions, Incorporated. All rights reserved.'
    // }
};

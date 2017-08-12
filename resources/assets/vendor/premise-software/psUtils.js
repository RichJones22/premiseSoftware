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
        /* Get iframe src attribute value i.e. YouTube video url
         and store it in a variable */
        let url = $("#timetraxVid").attr('src');

        /* Assign empty url value to the iframe src attribute when
         modal hide, which stop the video playing */
        $("#portfolioModal2").on('hide.bs.modal', function(){
            $("#timetraxVid").attr('src', '');
        });

        /* Assign the initially stored url back to the iframe src
         attribute when modal is displayed again */
        $("#portfolioModal2").on('show.bs.modal', function(){
            $("#timetraxVid").attr('src', url);
        });
    },
    isNotDefined: function (value) {
        return typeof value === 'undefined';
    },
    isDefined: function(value) {
        return psNS.ps.utils.isNotDefined(value) === false;
    }
};

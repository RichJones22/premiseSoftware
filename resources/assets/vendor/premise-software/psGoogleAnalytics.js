/*
 Premise Software javascript utilities

 file name: psGoogleAnalytics.js
 */

psNS.namespace('ps.utils');
psNS.ps.googleAnalytics = {
    gaHeadSection() {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-113475271-1', 'auto');
        ga('send', 'pageview');

        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-113475271-1');
    },
    touchAboutPage() {
        $('a[href=\"#about\"]').click(function(){
            ga('set', 'page', '/about');
            ga('send', 'pageview');
        });
    },
    touchBannerPage() {
        $('a[href=\"#page-top\"]').click(function(){
            ga('set', 'page', '/');
            ga('send', 'pageview');
        });
    },
    touchPortfolioPage() {
        $('a[href=\"#portfolio\"]').click(function(){
            ga('set', 'page', '/portfolio');
            ga('send', 'pageview');
        });
    },
    touchContactPage() {
        $('a[href=\"#contact\"]').click(function(){
            ga('set', 'page', '/contact');
            ga('send', 'pageview');
        });
    },
    init() {
        psNS.ps.googleAnalytics.gaHeadSection();
        psNS.ps.googleAnalytics.touchAboutPage();
        psNS.ps.googleAnalytics.touchBannerPage();
        psNS.ps.googleAnalytics.touchPortfolioPage();
        psNS.ps.googleAnalytics.touchContactPage();
    }
};

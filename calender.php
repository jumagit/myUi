<?php include "includes/mainHead.php"; ?>
<div id="container">
    <?php include "includes/mainSideNav.php"; ?>
    <div id="content">
        <div class="container">
            <?php "includes/mainNav.php"; ?>
            <div class="page-header">
                <div class="page-title">
                    <h3>Calendar</h3> <span>Good morning, John!</span>
                </div>
                <ul class="page-stats">
                    <li>
                        <div class="summary"> <span>New orders</span>
                            <h3>17,561</h3>
                        </div>
                        <div id="sparkline-bar" class="graph sparkline hidden-xs">
                            20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
                    </li>
                    <li>
                        <div class="summary"> <span>My balance</span>
                            <h3>$21,561.21</h3>
                        </div>
                        <div id="sparkline-bar2" class="graph sparkline hidden-xs">
                            20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <div class="widget-header">
                            <h4><i class="icon-calendar"></i> Calendar</h4>
                        </div>
                        <div class="widget-content">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
if (location.host == "envato.stammtec.de" || location.host == "themes.stammtec.de") {
    var _paq = _paq || [];
    _paq.push(["trackPageView"]);
    _paq.push(["enableLinkTracking"]);
    (function() {
        var a = (("https:" == document.location.protocol) ? "https" : "http") + "://analytics.stammtec.de/";
        _paq.push(["setTrackerUrl", a + "piwik.php"]);
        _paq.push(["setSiteId", "17"]);
        var e = document,
            c = e.createElement("script"),
            b = e.getElementsByTagName("script")[0];
        c.type = "text/javascript";
        c.defer = true;
        c.async = true;
        c.src = a + "piwik.js";
        b.parentNode.insertBefore(c, b)
    })()
};
</script>
</body>
<!-- Mirrored from envato.stammtec.de/themeforest/melon/pages_calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jun 2020 05:14:54 GMT -->

</html>
<?php include "includes/mainHead.php"; ?>
<div id="container">
    <?php include "includes/mainSideNav.php"; ?>
    <div id="content">
        <div class="container">
            <?php "includes/mainNav.php"; ?>
            <div class="page-header">
                <div class="page-title">
                    <h3>Charts &amp; Statistics</h3> <span>Good morning, John!</span>
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
                    <div class="widget box">
                        <div class="widget-chart">
                            <div id="chart_widget" class="chart chart-medium"></div>
                        </div>
                        <div class="widget-content">
                            <ul class="stats">
                                <li> <strong>4,853</strong> <small>Total Views</small> </li>
                                <li class="light"> <strong>271</strong> <small>Last 24 Hours</small> </li>
                                <li> <strong>1,025</strong> <small>Unique Users</small> </li>
                                <li class="light"> <strong>105</strong> <small>Last 24 Hours</small> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="widget box">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Selection and Zooming</h4>
                            <div class="toolbar no-padding">
                                <div class="btn-group"> <span class="btn btn-xs widget-collapse"><i
                                            class="icon-angle-down"></i></span> </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div id="chart_selection_zooming" class="chart"></div>
                        </div>
                        <div class="divider"></div>
                        <div class="widget-content widget-deeper">
                            <div id="chart_selection_zooming_overview" class="chart chart-small"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="widget box">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Filled Chart (Green)</h4>
                            <div class="toolbar no-padding">
                                <div class="btn-group"> <span class="btn btn-xs widget-collapse"><i
                                            class="icon-angle-down"></i></span> </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div id="chart_filled_green" class="chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget box">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Filled Chart (Red)</h4>
                            <div class="toolbar no-padding">
                                <div class="btn-group"> <span class="btn btn-xs widget-collapse"><i
                                            class="icon-angle-down"></i></span> </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div id="chart_filled_red" class="chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget box">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Filled Chart (Blue)</h4>
                            <div class="toolbar no-padding">
                                <div class="btn-group"> <span class="btn btn-xs widget-collapse"><i
                                            class="icon-angle-down"></i></span> </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div id="chart_filled_blue" class="chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="widget box">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Vertical Bars</h4>
                            <div class="toolbar no-padding">
                                <div class="btn-group"> <span class="btn btn-xs widget-collapse"><i
                                            class="icon-angle-down"></i></span> </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div id="chart_bars_vertical" class="chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="widget box">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Horizontal Bars</h4>
                            <div class="toolbar no-padding">
                                <div class="btn-group"> <span class="btn btn-xs widget-collapse"><i
                                            class="icon-angle-down"></i></span> </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div id="chart_bars_horizontal" class="chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="widget box">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Donut Chart</h4>
                            <div class="toolbar no-padding">
                                <div class="btn-group"> <span class="btn btn-xs widget-collapse"><i
                                            class="icon-angle-down"></i></span> </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div id="chart_donut" class="chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="widget box">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Pie Chart</h4>
                            <div class="toolbar no-padding">
                                <div class="btn-group"> <span class="btn btn-xs widget-collapse"><i
                                            class="icon-angle-down"></i></span> </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div id="chart_pie" class="chart"></div>
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
<!-- Mirrored from envato.stammtec.de/themeforest/melon/charts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jun 2020 05:15:27 GMT -->

</html>
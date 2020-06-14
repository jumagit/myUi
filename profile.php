<?php include "includes/mainHead.php"; ?>

<div id="container">
    <?php include "includes/mainSideNav.php"; ?>
    <div id="content">
        <div class="container">
            <?php "includes/mainNav.php"; ?>
            <div class="page-header">
                <div class="page-title">
                    <h3>User Profile</h3> <span>Good morning, John!</span>
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
                    <div class="tabbable tabbable-custom tabbable-full-width">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_overview" data-toggle="tab">Overview</a></li>
                            <li><a href="#tab_edit_account" data-toggle="tab">Edit Account</a></li>
                        </ul>
                        <div class="tab-content row">
                            <div class="tab-pane active" id="tab_overview">
                                <div class="col-md-3">
                                    <div class="list-group">
                                        <li class="list-group-item no-padding"> <img
                                                src="assets/img/demo/avatar-large.jpg" alt=""> </li> <a
                                            href="javascript:void(0);" class="list-group-item">Projects</a> <a
                                            href="javascript:void(0);" class="list-group-item">Messages</a> <a
                                            href="javascript:void(0);" class="list-group-item"><span
                                                class="badge">3</span>Friends</a> <a href="javascript:void(0);"
                                            class="list-group-item">Settings</a>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="row profile-info">
                                        <div class="col-md-7">
                                            <div class="alert alert-info">You will receive all future updates for free!
                                            </div>
                                            <h1>John Doe</h1>
                                            <dl class="dl-horizontal">
                                                <dt>Description lists</dt>
                                                <dd>A description list is perfect for defining terms.</dd>
                                                <dt>Euismod</dt>
                                                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio
                                                    sem nec elit.</dd>
                                                <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                                <dt>Malesuada porta</dt>
                                                <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                                <dt>Felis euismod semper eget lacinia</dt>
                                                <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                                    nibh, ut fermentum massa justo sit amet risus.</dd>
                                            </dl>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt
                                                erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.</p>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="widget">
                                                <div class="widget-header">
                                                    <h4><i class="icon-reorder"></i> Sales</h4>
                                                </div>
                                                <div class="widget-content">
                                                    <div id="chart_filled_blue" class="chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="widget">
                                                <div class="widget-content">
                                                    <table class="table table-hover table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>First Name</th>
                                                                <th>Last Name</th>
                                                                <th class="hidden-xs">Username</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Joey</td>
                                                                <td>Greyson</td>
                                                                <td class="hidden-xs">joey123</td>
                                                                <td><span class="label label-success">Approved</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Wolf</td>
                                                                <td>Bud</td>
                                                                <td class="hidden-xs">wolfy</td>
                                                                <td><span class="label label-info">Pending</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Darin</td>
                                                                <td>Alec</td>
                                                                <td class="hidden-xs">alec82</td>
                                                                <td><span class="label label-warning">Suspended</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Andrea</td>
                                                                <td>Brenden</td>
                                                                <td class="hidden-xs">andry</td>
                                                                <td><span class="label label-danger">Blocked</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_edit_account">
                                <form class="form-horizontal" action="#">
                                    <div class="col-md-12">
                                        <div class="widget">
                                            <div class="widget-header">
                                                <h4>General Information</h4>
                                            </div>
                                            <div class="widget-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group"> <label
                                                                class="col-md-4 control-label">First name:</label>
                                                            <div class="col-md-8"><input type="text" name="regular"
                                                                    class="form-control" value="John"></div>
                                                        </div>
                                                        <div class="form-group"> <label
                                                                class="col-md-4 control-label">Last name:</label>
                                                            <div class="col-md-8"><input type="text" name="regular"
                                                                    class="form-control" value="Doe"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"> <label
                                                                class="col-md-4 control-label">Gender:</label>
                                                            <div class="col-md-8"> <select class="form-control">
                                                                    <option value="male" selected="selected">Male
                                                                    </option>
                                                                    <option value="female">Female</option>
                                                                </select> </div>
                                                        </div>
                                                        <div class="form-group"> <label
                                                                class="col-md-4 control-label">Age:</label>
                                                            <div class="col-md-8"><input type="text" name="regular"
                                                                    class="form-control input-width-small" value="28">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-vertical no-margin">
                                        <div class="widget">
                                            <div class="widget-header">
                                                <h4>Settings</h4>
                                            </div>
                                            <div class="widget-content">
                                                <div class="row">
                                                    <div class="col-md-4 col-lg-2"> <strong
                                                            class="subtitle padding-top-10px">Permanent
                                                            username</strong>
                                                        <p class="text-muted">Dolor sit amet.</p>
                                                    </div>
                                                    <div class="col-md-8 col-lg-10">
                                                        <div class="form-group"> <label
                                                                class="control-label padding-top-10px">Username:</label>
                                                            <input type="text" name="username" class="form-control"
                                                                value="john.doe" disabled="disabled"> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-lg-2"> <strong class="subtitle">Change
                                                            password</strong>
                                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit.</p>
                                                    </div>
                                                    <div class="col-md-8 col-lg-10">
                                                        <div class="form-group"> <label class="control-label">Old
                                                                password:</label> <input type="password"
                                                                name="old_password" class="form-control"
                                                                placeholder="Leave empty for no password-change"> </div>
                                                        <div class="form-group"> <label class="control-label">New
                                                                password:</label> <input type="password"
                                                                name="new_password" class="form-control"
                                                                placeholder="Leave empty for no password-change"> </div>
                                                        <div class="form-group"> <label class="control-label">Repeat new
                                                                password:</label> <input type="password"
                                                                name="new_password_repeat" class="form-control"
                                                                placeholder="Leave empty for no password-change"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions"> <input type="submit" value="Update Account"
                                                class="btn btn-primary pull-right"> </div>
                                    </div>
                                </form>
                            </div>
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


</html>
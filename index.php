<?php include "includes/header.php" ?>
<div class="logo"> <img src="assets/img/logo.png" alt="logo" /> <strong>ME</strong>LON </div>
<div class="box">
    <div class="content">
        <form class="form-vertical login-form" action="http://envato.stammtec.de/themeforest/melon/index.html"
            method="post">
            <h3 class="form-title">Sign In to your Account</h3>
            <div class="alert fade in alert-danger" style="display: none;"> <i class="icon-remove close"
                    data-dismiss="alert"></i> Enter any username and password. </div>
            <div class="form-group">
                <div class="input-icon"> <i class="icon-user"></i> <input type="text" name="username"
                        class="form-control" placeholder="Username" autofocus="autofocus" data-rule-required="true"
                        data-msg-required="Please enter your username." /> </div>
            </div>
            <div class="form-group">
                <div class="input-icon"> <i class="icon-lock"></i> <input type="password" name="password"
                        class="form-control" placeholder="Password" data-rule-required="true"
                        data-msg-required="Please enter your password." /> </div>
            </div>
            <div class="form-actions"> <label class="checkbox pull-left"><input type="checkbox" class="uniform"
                        name="remember"> Remember me</label> <button type="submit"
                    class="submit btn btn-primary pull-right"> Sign In <i class="icon-angle-right"></i> </button> </div>
        </form>

    </div>
    <div class="inner-box">
        <div class="content"> <i class="icon-remove close hide-default"></i> <a href="#"
                class="forgot-password-link">Forgot Password?</a>
            <form class="form-vertical forgot-password-form hide-default"
                action="http://envato.stammtec.de/themeforest/melon/login.html" method="post">
                <div class="form-group">
                    <div class="input-icon"> <i class="icon-envelope"></i> <input type="text" name="email"
                            class="form-control" placeholder="Enter email address" data-rule-required="true"
                            data-rule-email="true" data-msg-required="Please enter your email." /> </div>
                </div> <button type="submit" class="submit btn btn-default btn-block"> Reset your Password </button>
            </form>
            <div class="forgot-password-done hide-default"> <i class="icon-ok success-icon"></i> <span>Great. We have
                    sent you an email.</span> </div>
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
<!-- Mirrored from envato.stammtec.de/themeforest/melon/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jun 2020 05:14:56 GMT -->

</html>
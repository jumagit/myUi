<!DOCTYPE html>
<html lang="en"> 
          <head>
               <meta charset="utf-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
               <title>Dashboard | Melon - Flat &amp; Responsive Admin Template</title>
              
              <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
               <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/><![endif]-->
               <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
               <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
               <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
               <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
               <link rel="stylesheet" href="assets/css/fontawesome/font-awesome.min.css">
               <!--[if IE 7]><link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css"><![endif]-->
               <!--[if IE 8]><link href="assets/css/ie8.css" rel="stylesheet" type="text/css"/><![endif]-->
               <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel='stylesheet' type='text/css'>
               <script type="text/javascript" src="assets/js/libs/jquery-1.10.2.min.js"></script>
               <script type="text/javascript" src="plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
               <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
               <script type="text/javascript" src="assets/js/libs/lodash.compat.min.js"></script>
               <!--[if lt IE 9]><script src="assets/js/libs/html5shiv.js"></script><![endif]-->
               <script type="text/javascript" src="plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
               <script type="text/javascript" src="plugins/event.swipe/jquery.event.move.js"></script>
               <script type="text/javascript" src="plugins/event.swipe/jquery.event.swipe.js"></script>
               <script type="text/javascript" src="assets/js/libs/breakpoints.js"></script>
               <script type="text/javascript" src="plugins/respond/respond.min.js"></script>
               <script type="text/javascript" src="plugins/cookie/jquery.cookie.min.js"></script>
               <script type="text/javascript" src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
               <script type="text/javascript" src="plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script>
               <script type="text/javascript" src="plugins/sparkline/jquery.sparkline.min.js"></script>
               <script type="text/javascript" src="plugins/daterangepicker/moment.min.js"></script>
               <script type="text/javascript" src="plugins/daterangepicker/daterangepicker.js"></script>
               <script type="text/javascript" src="plugins/blockui/jquery.blockUI.min.js"></script>
               <script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script>
               <script type="text/javascript" src="plugins/select2/select2.min.js"></script>
               <script type="text/javascript" src="plugins/datatables/jquery.dataTables.min.js"></script>
               <script type="text/javascript" src="plugins/datatables/DT_bootstrap.js"></script>
               <script type="text/javascript" src="plugins/datatables/responsive/datatables.responsive.js"></script>
               <script type="text/javascript" src="assets/js/app.js"></script>
               <script type="text/javascript" src="assets/js/plugins.js"></script>
               <script type="text/javascript" src="assets/js/plugins.form-components.js"></script>
               <script>
     $(document).ready(function() { App.init();
          Plugins.init();
          FormComponents.init() });
               </script>
               <script type="text/javascript" src="assets/js/custom.js"></script>
          </head>


           <header class="header navbar navbar-fixed-top" role="banner">
                    <div class="container">
                         <ul class="nav navbar-nav">
                              <li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
                         </ul> <a class="navbar-brand" href="index.html"> <img src="assets/img/logo.png" alt="logo" /> <strong>ME</strong>LON </a> <a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation"> <i class="icon-reorder"></i> </a>
                         <ul class="nav navbar-nav navbar-left hidden-xs hidden-sm">
                              <li> <a href="#"> Dashboard </a> </li>
                              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Dropdown <i class="icon-caret-down small"></i> </a>
                                   <ul class="dropdown-menu">
                                        <li><a href="#"><i class="icon-user"></i> Example #1</a></li>
                                        <li><a href="#"><i class="icon-calendar"></i> Example #2</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-tasks"></i> Example #3</a></li>
                                   </ul>
                              </li>
                         </ul>
                         <ul class="nav navbar-nav navbar-right">
                              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-warning-sign"></i> <span class="badge">5</span> </a>
                                   <ul class="dropdown-menu extended notification">
                                        <li class="title">
                                             <p>You have 5 new notifications</p>
                                        </li>
                                        <li> <a href="javascript:void(0);"> <span class="label label-success"><i class="icon-plus"></i></span> <span class="message">New user registration.</span> <span class="time">1 mins</span> </a> </li>
                                        <li> <a href="javascript:void(0);"> <span class="label label-danger"><i class="icon-warning-sign"></i></span> <span class="message">High CPU load on cluster #2.</span> <span class="time">5 mins</span> </a> </li>
                                        <li> <a href="javascript:void(0);"> <span class="label label-success"><i class="icon-plus"></i></span> <span class="message">New user registration.</span> <span class="time">10 mins</span> </a> </li>
                                       
                                        <li class="footer"> <a href="javascript:void(0);">View all notifications</a> </li>
                                   </ul>
                              </li>
                           
                              <li class="dropdown hidden-xs hidden-sm"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-envelope"></i> <span class="badge">1</span> </a>
                                   <ul class="dropdown-menu extended notification">
                                        <li class="title">
                                             <p>You have 3 new messages</p>
                                        </li>
                                        <li> <a href="javascript:void(0);"> <span class="photo"><img src="assets/img/demo/avatar-1.jpg" alt="" /></span> <span class="subject"> <span class="from">Bob Carter</span> <span class="time">Just Now</span> </span> <span class="text"> Consetetur sadipscing elitr... </span> </a> </li>
                                        
                                   </ul>
                              </li>
                              <li> <a href="#" class="dropdown-toggle row-bg-toggle"> <i class="icon-resize-vertical"></i> </a> </li>
                              <li class="dropdown"> <a href="#" class="project-switcher-btn dropdown-toggle"> <i class="icon-folder-open"></i> <span>Projects</span> </a> </li>
                              <li class="dropdown user"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-male"></i> <span class="username">John Doe</span> <i class="icon-caret-down small"></i> </a>
                                   <ul class="dropdown-menu">
                                        <li><a href="pages_user_profile.html"><i class="icon-user"></i> My Profile</a></li>
                                        
                                        <li class="divider"></li>
                                        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                                   </ul>
                              </li>
                         </ul>
                    </div>
                    <div id="project-switcher" class="container project-switcher">
                         <div id="scrollbar">
                              <div class="handle"></div>
                         </div>
                         <div id="frame">
                              <ul class="project-list">
                                   <li> <a href="javascript:void(0);"> <span class="image"><i class="icon-desktop"></i></span> <span class="title">Lorem ipsum dolor</span> </a> </li>
                                   <li> <a href="javascript:void(0);"> <span class="image"><i class="icon-compass"></i></span> <span class="title">Dolor sit invidunt</span> </a> </li>
                                   <li class="current"> <a href="javascript:void(0);"> <span class="image"><i class="icon-male"></i></span> <span class="title">Consetetur sadipscing elitr</span> </a> </li>
                                   <li> <a href="javascript:void(0);"> <span class="image"><i class="icon-thumbs-up"></i></span> <span class="title">Sed diam nonumy</span> </a> </li>
                                   <li> <a href="javascript:void(0);"> <span class="image"><i class="icon-female"></i></span> <span class="title">At vero eos et</span> </a> </li>
                                   <li> <a href="javascript:void(0);"> <span class="image"><i class="icon-beaker"></i></span> <span class="title">Sed diam voluptua</span> </a> </li>
                                   <li> <a href="javascript:void(0);"> <span class="image"><i class="icon-desktop"></i></span> <span class="title">Lorem ipsum dolor</span> </a> </li>
                                   <li> <a href="javascript:void(0);"> <span class="image"><i class="icon-compass"></i></span> <span class="title">Dolor sit invidunt</span> </a> </li>
                                   <li> <a href="javascript:void(0);"> <span class="image"><i class="icon-male"></i></span> <span class="title">Consetetur sadipscing elitr</span> </a> </li>
                                   <li> <a href="javascript:void(0);"> <span class="image"><i class="icon-thumbs-up"></i></span> <span class="title">Sed diam nonumy</span> </a> </li>
                                   <li> <a href="javascript:void(0);"> <span class="image"><i class="icon-female"></i></span> <span class="title">At vero eos et</span> </a> </li>
                                   <li> <a href="javascript:void(0);"> <span class="image"><i class="icon-beaker"></i></span> <span class="title">Sed diam voluptua</span> </a> </li>
                              </ul>
                         </div>
                    </div>
               </header>
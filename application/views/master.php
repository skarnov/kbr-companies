<!DOCTYPE html>

<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
        <!-- CSS -->
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/style.css' type='text/css' media='screen, projection' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/layout.css' type='text/css' media='screen, projection' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/blue.css' type='text/css' media='screen, projection' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/responsive.css' type='text/css' media='screen, projection' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/formalize.css' type='text/css' media='screen, projection' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/superfish.css' type='text/css' media='screen, projection' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/prettyPhoto.css' type='text/css' media='screen, projection' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/plugin/flexslider/flexslider.css' type='text/css' media='all' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/plugin/rs/settings.css' type='text/css' media='all' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/dashicons.min.css' type='text/css' media='all' />
        <!-- End CSS -->
        <!-- JS -->
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery-migrate.min.js' ></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/swfobject.js' ></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/plugin/rs/jquery.themepunch.revolution.min.js' ></script>
        <!-- End JS -->
        <style type="text/css">	
            #wrap #content {float: left;}
            #wrap #sidebar {float: right;}
            #wrap #sidebar .widget-container {
                margin-left: 20px;
                margin-right: 0px;
            }
            #wrap #sidebar_second {float:left;}
            #wrap #sidebar_second .widget-container {
                margin-right: 20px;
                margin-left: 0px;
            }
            body {
                color:#666666;
                font-size:13px;
                font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif;
                font-weight:normal;
                font-style:normal;
            }
            #navigation ul li a {
                color:#777777;
                font-size:13px !important;
                font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif !important;
                font-weight:normal !important;
                font-style:normal !important;
                text-transform:capitalize !important;
            }
            #navigation ul.sub-menu li a {
                color:#ffffff;
                font-size:12px !important;
                font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif !important;
                font-weight:normal !important;
                font-style:normal !important;
                text-transform:capitalize !important;
            }
            h1 { 
                font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif; font-size: 24px;
            }
            h2 { font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;font-size: 20px;}
            h3 { font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;font-size: 18px;}
            h4 { font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;font-size: 16px;}
            h5 { font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;font-size: 14px;}
            h6 { font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;font-size: 12px;}
            h1, h2, h3, h4, h5, h6 {color: #333333;} 
            h1, h2, h3, h4, h5, h6 {font-weight: 100;font-style: normal; }
            .tp-caption.themecolor_background {background-color: #3c8a85;}
            .tp-caption.themecolor_normal {color: #3c8a85;}
            #nav-below, .entry-meta, .post-ut, .comments-link{ display:none;}
            .nav-wrap{background-color:green; border-bottom:2px solid #fff;}
            #navigation ul li a{color:#fff; height:45px; line-height:45px;}
            .naviline{top:13px;}
            #navigation ul.sub-menu { 
                background-color: rgba(50, 47, 131, 0.9); 
                border-top: 2px solid #FFED00; 
                box-shadow: 0 0 2px rgba(0, 0, 0, 0.2); }
            .nevada-caption.white { 
                background:none !important; 
                box-shadow:none !important;
                color: #56646F !important; 
                position:absolute;
                top:200px;
            }
            .container .nevada-caption.white h2 {
                color: white !important; 
                font-size:20px; 
                line-height:28px; 
                font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;
            }
            #navigation ul.sub-menu a:hover { color: #000000 !important;}
            #navigation ul li:hover a {color: #fff;}
            #navigation ul.sub-menu { margin-left: 12px;}
            #sub-footer-wrap { background-color: green;}
            @media (min-width: 1920px) {
                .nevada-caption.white { top:20% !important; left:-4%;}
            }@media (min-width: 980px) {
                .nevada-caption.white { top:30px;left:-4%;}
            }@media (min-width: 768px) and (max-width: 979px) {
                .nevada-caption.white { top:0 !important;}
            }@media (max-width: 767px) {
                .nevada-caption.white { top:0 !important;}
            }@media (max-width: 480px) {
                .nevada-caption.white { top:0 !important;}
            }
            #lambda-featured-header-wrap { 
                background:#111111 url(http://themeforest.unitedthemes.com/wpversions/nevada/xml/wp-content/uploads/2012/09/featured_header_two.jpg) no-repeat;}			
            #wrap {
                padding:0;
                margin:0;
                position:relative;            
            }
            #lambda-featured-header { 
                max-width:100%; 
                margin: 0 auto; 
            }
            body {
                background: #242424 !important;
            }
            #wrap {
                width:100%;
            }
        </style>
    </head>

    <body class="home page page-id-3242 page-template page-template-template-home page-template-template-home-php">
        <div id="toTop">Go to Top</div>
        <div id="wrap" class="container clearfix" data-role="page">
            <header id="header" class="fluid clearfix" data-role="header">
                <div class="container">
                    <div id="logo">
                        <a href="<?php echo base_url(); ?>" title=""><img id="sitelogo" src=""></a>
                    </div>        
                    <div class="h-right" style="margin-top:0px">
                        <span class="top-header-tagline">  
                            Call Us (88) 02 9842526						
                        </span>
                        <div class="widget-1 widget-first widget-last widget-odd lw_social-4 lambda_widget_social clearfix">
                            <ul class="social-icons clearfix">
                                <li>
                                    <a href="">
                                        <img src="<?php echo base_url(); ?>asset/public/img/facebook.png" alt="Facebook" title="Facebook" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>asset/public/img/twitter.png" alt="Twitter" title="Twitter" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>  
            </header>
            <div class="clear"></div>
            <?php echo $nav; ?>
            <div class="clear"></div>
            <?php echo $home; ?>
            <footer id="footer-wrap" class="fluid clearfix">
                <div class="container">
                    <div id="footer" class="normal sixteen columns"> 
                        <div class="sixteen columns alpha omega">
                            <div class="widget-1 widget-first widget-odd text-4 widget_text">
                                <div class="textwidget">
                                    <div class="one_fourth">
                                        <div class="text-2 widget_text">
                                            <div class="textwidget">
                                                <p class="footer-logo"><img src="<?php echo base_url(); ?>asset/public/img/"></p>
                                            </div>
                                        </div>
                                        <div class="lw_contact-4 lambda_widget_contact">
                                            <ul>
                                                <li class="clearfix">
                                                    <div class="left"><span class="lambda-address"></span></div>
                                                    <div class="description"><?php echo $home_page_address_info->name; ?></div>
                                                </li>
                                                <li class="clearfix">
                                                    <div class="left"><span class="lambda-phone"></span></div>
                                                    <div class="description"><?php echo $home_page_address_info->phone; ?></div>
                                                </li>
                                                <li class="clearfix">
                                                    <div class="left"><span class="lambda-fax"></span></div>
                                                    <div class="description"><?php echo $home_page_address_info->fax; ?></div>
                                                </li>
                                                <li class="clearfix">
                                                    <div class="left"><span class="lambda-email"></span></div>
                                                    <div class="description"><?php echo $home_page_address_info->email; ?></div>
                                                </li>
                                                <li class="clearfix last">
                                                    <div class="left"><span class="lambda-internet"></span></div>
                                                    <div class="description"><?php echo $home_page_address_info->website; ?></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <style> 
                                .rpwe-block ul {
                                    list-style: none!important;
                                    margin-left: 0!important;
                                    padding-left: 0!important;
                                }
                                .rpwe-block li {
                                    border-bottom: 1px solid #eee;
                                    margin-bottom: 10px;
                                    padding-bottom: 10px;
                                    list-style-type: none;
                                }
                                .rpwe-block a {
                                    display: inline!important;
                                    text-decoration: none;
                                }
                                .rpwe-block h3 {
                                    background: none!important;
                                    clear: none;
                                    margin-bottom: 0!important;
                                    margin-top: 0!important;
                                    font-weight: 400;
                                    font-size: 12px!important;
                                    line-height: 1.5em;
                                }
                                .rpwe-thumb {
                                    border: 1px solid #EEE!important;
                                    box-shadow: none!important;
                                    margin: 2px 10px 2px 0;
                                    padding: 3px!important;
                                }
                                .rpwe-summary {
                                    font-size: 12px;
                                }
                                .rpwe-time {
                                    color: #bbb;
                                    font-size: 11px;
                                }
                                .rpwe-comment {
                                    color: #bbb;
                                    font-size: 11px;
                                    padding-left: 5px;
                                }
                                .rpwe-alignleft {
                                    display: inline;
                                    float: left;
                                }
                                .rpwe-alignright {
                                    display: inline;
                                    float: right;
                                }
                                .rpwe-aligncenter {
                                    display: block;
                                    margin-left: auto;
                                    margin-right: auto;
                                }
                                .rpwe-clearfix:before,
                                .rpwe-clearfix:after {
                                    content: "";
                                    display: table !important;
                                }
                                .rpwe-clearfix:after {
                                    clear: both;
                                }
                                .rpwe-clearfix {
                                    zoom: 1;
                                }
                            </style>
                            <div class="widget-2 widget-even one_fourth widget_pages rpwe_widget-2 rpwe_widget recent-posts-extended">
                                <h3 class="widget-title"><span>OUR PROJECTS</span></h3>
                                <div  class="rpwe-block">
                                    <ul class="rpwe-ul">
                                        <?php foreach ($all_project as $v_project) { ?>
                                        <li class="rpwe-li rpwe-clearfix"><h3 class="rpwe-title"><a href="<?php echo base_url(); ?>home/project_details/<?php echo $v_project->project_id; ?>" title="<?php echo $v_project->project_name; ?>"><?php echo $v_project->project_name; ?></a></h3></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-3 widget-odd one_fourth pages-2 widget_pages">
                                <h3 class="widget-title"><span>Pages</span></h3>
                                <ul>
                                    <li class="page_item page-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                                    <li class="page_item page-item"><a href="<?php echo base_url(); ?>home/about_us">About Us</a></li>
                                    <li class="page_item page-item"><a href="<?php echo base_url(); ?>home/our_projects">Our Projects</a></li>
                                    <li class="page_item page-item"><a href="<?php echo base_url(); ?>home/contact_us">Contact Us</a></li>
                                    <li class="page_item page-item"><a href="<?php echo base_url(); ?>home/news">News &#038; Events</a></li>
                                </ul>
                            </div>
                            <div class="widget-4 widget-last widget-even text-5 widget_text">
                                <div class="textwidget">

                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </footer>
            <div id="sub-footer-wrap" class="clearfix">
                <div class="container">
                    <div class="sixteen columns">	
                        <div class="copyright eight columns alpha">
                            &copy; 2016 <a href="<?php echo base_url(); ?>">KBR Companies</a>
                        </div>
                        <div class="unitedthemes eight columns omega">
                            Developed by <a href="http://www.labtrio.it/">LabTrio</a>
                        </div>    
                    </div>
                </div>      
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('.flexslider').flexslider({
                });
            });
        </script>
        <script type="text/javascript">
            (function ($) {
                $(document).ready(function () {
                    /* Prettyphoto
                     ================================================== */
                    $("a[data-rel^='prettyPhoto']").prettyPhoto({
                        show_title: false
                    });
                });
            })(jQuery);
        </script>
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/cameraslider.css' type='text/css' media='all' />
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/superfish.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.jcarousellite.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.fitvids.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.isotope.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.formalize.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/nonverblaster.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/app.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.prettyPhoto.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/plugin/flexslider/jquery.flexslider.min.js'></script>
    </body>
</html>
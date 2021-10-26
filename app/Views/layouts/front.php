<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?= isset($title) ? $title . ' | ' . APP_NAME : APP_NAME ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/et-line-icon.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header Area Start -->
		<header class="top">
		    <div class="header-top">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-8 col-sm-8">
		                    <div class="header-top-left">
		                        <p>MEMILIKI PERTANYAAN UNTUK KAMI ?  +62 8966 6103 0388</p>
		                    </div>
		                </div>
		                <div class="col-md-4 col-sm-4">
		                    <div class="header-top-right text-md-end text-center">
		                        <ul>
		                            <li><a href="/login">login</a></li>
		                            <li><a href="/register">register</a></li>
		                        </ul>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
			<div class="header-area two header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-5 col-6">
							<div class="logo">
								<a href="index.html"><img src="img/logo.png" alt="eduhome" /></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-7 col-6">
                            <div class="content-wrapper text-end">
                                <!-- Main Menu Start -->
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="index.html">Home</a>
                                                <ul>
                                                    <li><a href="index.html">Home One</a></li>
                                                    <li><a href="index-2.html">Home Two</a></li>
                                                    <li><a href="index-3.html">Home Three</a></li>
                                                    <li><a href="index-4.html">Home Four</a></li>
                                                    <li><a href="index-5.html">Home Five</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="course.html">courses</a>
                                                <ul>
                                                    <li><a href="course.html">courses</a></li>
                                                    <li><a href="course-details.html">courses details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="event.html">event</a>
                                                <ul>
                                                    <li><a href="event.html">event</a></li>
                                                    <li><a href="event-left-side-bar.html">event left sidebar</a></li>
                                                    <li><a href="event-right-side-bar.html">event right sidebar</a></li>
                                                    <li><a href="event-details.html">event details</a></li>
                                                </ul>
                                            </li>
                                            <li class="hidden-sm"><a href="teacher.html">teacher</a>
                                                <ul>
                                                    <li><a href="teacher.html">teacher</a></li>
                                                    <li><a href="teacher-details.html">teacher details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html">blog</a>
                                                <ul>
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="blog-left-side-bar.html">blog left sidebar</a></li>
                                                    <li><a href="blog-right-side-bar.html">blog righ sidebar</a></li>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="contact.html">Buy Now</a>
                                        </ul>
                                    </nav>
                                </div>
                                <!--Search Form Start-->
                                <div class="search-btn">
                                    <ul class="header-search search-toggle">
                                        <li class="search-menu">
                                            <i class="fa fa-search"></i>
                                        </li>
                                    </ul>
                                    <div class="search">
                                        <div class="search-form">
                                            <form id="search-form" action="#">
                                                <input type="search" placeholder="Search here..." name="search" />
                                                <button type="submit">
                                                    <span><i class="fa fa-search"></i></span>
                                                </button>
                                            </form>                                
                                        </div>
                                    </div>
                                </div>
                                <!--End of Search Form-->
                                <!-- Main Menu End -->
                            </div>
						</div>
                        <div class="col-12">
                            <div class="mobile-menu hidden-sm"></div> 
                        </div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Area End -->

        <?= $this->renderSection('content') ?>

		<script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/ajax-mail.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.mb.YTPlayer.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>

</html>

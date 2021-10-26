<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?= isset($title) ? $title . ' | ' . APP_NAME : APP_NAME ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/img/favicon.png">

        <link rel="stylesheet" href="<?= base_url() ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>/css/animate.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>/css/meanmenu.css">
        <link rel="stylesheet" href="<?= base_url() ?>/css/magnific-popup.css">
        <link rel="stylesheet" href="<?= base_url() ?>/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>/css/et-line-icon.css">
        <link rel="stylesheet" href="<?= base_url() ?>/css/reset.css">
        <link rel="stylesheet" href="<?= base_url() ?>/css/ionicons.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>/css/style.css">
        <link rel="stylesheet" href="<?= base_url() ?>/css/responsive.css">
        <script src="<?= base_url() ?>/js/vendor/modernizr-3.11.2.min.js"></script>

        <?= $this->renderSection('css') ?>
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
		                            <li><a href="javascript:void(0)">login</a></li>
		                            <li><a href="javascript:void(0)">register</a></li>
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
								<a href="page/beranda"><img src="<?= base_url() ?>/img/logo.png" alt="eduhome" /></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-7 col-6">
                            <div class="content-wrapper text-end">
                                <!-- Main Menu Start -->
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="<?= base_url() ?>/beranda">Beranda</a></li>
                                            <li><a href="<?= base_url() ?>/page/profile">Profile</a>
                                                <ul>
                                                    <li><a href="<?= base_url() ?>/page/sejarah">Sejarah</a></li>
                                                    <li><a href="<?= base_url() ?>/page/visi-misi">Visi & Misi</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="<?= base_url() ?>/page/prestasi">Prestasi</a>
                                            <li><a href="<?= base_url() ?>/page/kontak">Kontak</a>
                                            <li><a href="<?= base_url() ?>/page/bkk">Bursa Kerja Khusus</a>
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
                                                <button type="button">
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

		<script src="<?= base_url() ?>/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="<?= base_url() ?>/js/vendor/jquery-migrate-3.3.2.min.js"></script>
        <script src="<?= base_url() ?>/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>/js/jquery.meanmenu.js"></script>
        <script src="<?= base_url() ?>/js/jquery.magnific-popup.js"></script>
        <script src="<?= base_url() ?>/js/ajax-mail.js"></script>
        <script src="<?= base_url() ?>/js/owl.carousel.min.js"></script>
        <script src="<?= base_url() ?>/js/jquery.mb.YTPlayer.js"></script>
        <script src="<?= base_url() ?>/js/jquery.nicescroll.min.js"></script>
        <script src="<?= base_url() ?>/js/plugins.js"></script>
        <script src="<?= base_url() ?>/js/main.js"></script>

        <?= $this->renderSection('js') ?>
    </body>

</html>

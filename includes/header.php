<?php
session_start();
require_once __DIR__ . '/../config/config.php';
?>
<!DOCTYPE html>
<html lang="id-ID" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo SITE_TAGLINE; ?>">
    <meta name="keywords" content="kjks, syariah, lembaga keuangan, keuangan, koperasi, bmt, tamzis">
    <meta name="author" content="TAMZIS Bina Utama">
    <meta property="og:url" content="<?php echo SITE_URL; ?>" />
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?>" />
    <meta property="og:description" content="<?php echo SITE_TAGLINE; ?>" />
    <meta property="og:site_name" content="<?php echo SITE_NAME; ?>" />
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/logo-tamzis.jpg" />
    <meta property="og:type" content="website" />

    <title><?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo SITE_URL; ?>/assets/images/favicon.png" />

    <!-- Google Fonts - Poppins (Astra-like) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/bootstrap.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/owl.theme.default.min.css">

    <!-- AOS Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/global.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/components.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/responsive.css">

    <?php if(isset($extra_css)): ?>
    <?php foreach($extra_css as $css): ?>
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/<?php echo $css; ?>">
    <?php endforeach; ?>
    <?php endif; ?>
</head>
<body class="<?php echo isset($body_class) ? $body_class : 'home-page'; ?>">

<!-- Preloader -->
<div id="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7 col-sm-12">
                <ul class="top-info list-inline">
                    <li><i class="fas fa-phone-alt"></i> <a href="tel:+62286325303">0286-325303</a></li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:info@tamzis.id">info@tamzis.id</a></li>
                    <li><i class="fas fa-map-marker-alt"></i> Jl. KH. Wahid Hasyim No. 27 Purwokerto</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12">
                <ul class="top-social list-inline pull-right">
                    <li><a href="<?php echo $social_media['whatsapp']; ?>" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="<?php echo $social_media['instagram']; ?>" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="<?php echo $social_media['facebook']; ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="<?php echo $social_media['youtube']; ?>" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Header / Navbar -->
<header class="site-header" id="site-header">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="site-logo">
                    <a href="<?php echo SITE_URL; ?>/index.php">
                        <img src="<?php echo SITE_URL; ?>/assets/images/logo-tamzis.jpg" alt="Tamzis Logo" class="img-responsive logo-img">
                    </a>
                </div>
            </div>

            <!-- Navigation -->
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
                <nav class="main-navigation" id="main-navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" id="mobile-menu-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <ul class="nav navbar-nav main-nav" id="main-nav">
                        <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                            <a href="<?php echo SITE_URL; ?>/index.php"><i class="fas fa-home"></i> Beranda</a>
                        </li>
                        <li class="dropdown <?php echo strpos($_SERVER['REQUEST_URI'], 'company-profile') !== false || strpos($_SERVER['REQUEST_URI'], 'visi-misi') !== false || strpos($_SERVER['REQUEST_URI'], 'corporate-culture') !== false || strpos($_SERVER['REQUEST_URI'], 'penghargaan') !== false || strpos($_SERVER['REQUEST_URI'], 'alamat-kantor') !== false ? 'active' : ''; ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo SITE_URL; ?>/company-profile.php"><i class="fas fa-building"></i> Company Profile</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/visi-misi.php"><i class="fas fa-eye"></i> Visi dan Misi</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/corporate-culture.php"><i class="fas fa-handshake"></i> Corporate Culture</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/penghargaan.php"><i class="fas fa-trophy"></i> Penghargaan</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/alamat-kantor.php"><i class="fas fa-map-marker-alt"></i> Alamat Kantor</a></li>
                            </ul>
                        </li>
                        <li class="dropdown <?php echo strpos($_SERVER['REQUEST_URI'], 'cinta-masjid') !== false || strpos($_SERVER['REQUEST_URI'], 'qurban') !== false || strpos($_SERVER['REQUEST_URI'], 'ziswaf') !== false || strpos($_SERVER['REQUEST_URI'], 'beta') !== false ? 'active' : ''; ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Baitul Maal <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo SITE_URL; ?>/cinta-masjid.php"><i class="fas fa-mosque"></i> Cinta Masjid</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/qurban.php"><i class="fas fa-cut"></i> Qurban on Tamzis</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/ziswaf.php"><i class="fas fa-hand-holding-heart"></i> Zakat, Infaq, Sedekah dan Wakaf</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/beta.php"><i class="fas fa-graduation-cap"></i> BETA (Beasiswa Ustadz Ustadzah)</a></li>
                            </ul>
                        </li>
                        <li class="dropdown <?php echo strpos($_SERVER['REQUEST_URI'], 'simpanan') !== false || strpos($_SERVER['REQUEST_URI'], 'ijabah') !== false ? 'active' : ''; ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Simpanan <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo SITE_URL; ?>/simpanan-mutiara.php"><i class="fas fa-gem"></i> Simpanan Mutiara</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/simpanan-pendidikan.php"><i class="fas fa-book"></i> Simpanan Pendidikan</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/ijabah.php"><i class="fas fa-piggy-bank"></i> Simpanan Berjangka</a></li>
                            </ul>
                        </li>
                        <li class="dropdown <?php echo strpos($_SERVER['REQUEST_URI'], 'pembiayaan') !== false || strpos($_SERVER['REQUEST_URI'], 'rumah-tumbuh') !== false ? 'active' : ''; ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pembiayaan <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo SITE_URL; ?>/pembiayaan-ikhtiar.php"><i class="fas fa-chart-line"></i> Ikhtiar Utama Syariah</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/porsi-haji.php"><i class="fas fa-kaaba"></i> Porsi Haji dan Umroh</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/rumah-tumbuh-bahagia.php"><i class="fas fa-home"></i> Rumah Tumbuh Bahagia</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Simulasi <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://eform.tamzis.id/simulasi-pkr" target="_blank"><i class="fas fa-calculator"></i> PKR</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://karir.tamzis.id" target="_blank"><i class="fas fa-briefcase"></i> Info Karir</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

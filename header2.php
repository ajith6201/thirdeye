<?php
include_once 'meta.php';
$url = $_SERVER['REQUEST_URI'];
$newurl = explode('/', $url);
$page = $newurl[sizeof($newurl)-1];
switch ($page) {
    case 'index':
        $title = $metaArray['index']['title'];
        $desc = $metaArray['index']['desc'];
        $keyword = $metaArray['index']['keyword'];
        break;

    case '':
        $title = $metaArray['index']['title'];
        $desc = $metaArray['index']['desc'];
        $keyword = $metaArray['index']['keyword'];
        break;

    case 'contact-us':
        $title = $metaArray['contact-us']['title'];
        $desc = $metaArray['contact-us']['desc'];
        $keyword = $metaArray['contact-us']['keyword'];
        break;

    case 'about-us':
        $title = $metaArray['about-us']['title'];
        $desc = $metaArray['about-us']['desc'];
        $keyword = $metaArray['about-us']['keyword'];
        break;

    case 'web-services':
        $title = $metaArray['web-services']['title'];
        $desc = $metaArray['web-services']['desc'];
        $keyword = $metaArray['web-services']['keyword'];
        break;

    case 'website-design':
        $title = $metaArray['website-design']['title'];
        $desc = $metaArray['website-design']['desc'];
        $keyword = $metaArray['website-design']['keyword'];
        break;

    case 'website-development':
        $title = $metaArray['website-development']['title'];
        $desc = $metaArray['website-development']['desc'];
        $keyword = $metaArray['website-development']['keyword'];
        break;

    case 'ecommerce-website-development':
        $title = $metaArray['ecommerce-website-development']['title'];
        $desc = $metaArray['ecommerce-website-development']['desc'];
        $keyword = $metaArray['ecommerce-website-development']['keyword'];
        break;

    case 'cms-website-development':
        $title = $metaArray['cms-website-development']['title'];
        $desc = $metaArray['cms-website-development']['desc'];
        $keyword = $metaArray['cms-website-development']['keyword'];
        break;

    case 'landing-page-development':
        $title = $metaArray['landing-page-development']['title'];
        $desc = $metaArray['landing-page-development']['desc'];
        $keyword = $metaArray['landing-page-development']['keyword'];
        $meta1 = $metaArray['landing-page-development']['meta1'];
        $meta2 = $metaArray['landing-page-development']['meta2'];
        break;

    case 'mobile-app-development':
        $title = $metaArray['mobile-app-development']['title'];
        $desc = $metaArray['mobile-app-development']['desc'];
        $keyword = $metaArray['mobile-app-development']['keyword'];
        break;

    case 'android-app-development':
        $title = $metaArray['android-app-development']['title'];
        $desc = $metaArray['android-app-development']['desc'];
        $keyword = $metaArray['android-app-development']['keyword'];
        break;

    case 'ios-app-development':
        $title = $metaArray['ios-app-development']['title'];
        $desc = $metaArray['ios-app-development']['desc'];
        $keyword = $metaArray['ios-app-development']['keyword'];
        break;

    case 'digital-marketing-services':
        $title = $metaArray['digital-marketing-services']['title'];
        $desc = $metaArray['digital-marketing-services']['desc'];
        $keyword = $metaArray['digital-marketing-services']['keyword'];
        break;

    case 'contact-us':
        $title = $metaArray['index']['title'];
        $desc = $metaArray['index']['desc'];
        $keyword = $metaArray['index']['keyword'];
        break;

    case 'privacy-policy':
        $title = $metaArray['index']['title'];
        $desc = $metaArray['index']['desc'];
        $keyword = $metaArray['index']['keyword'];
        break;

    default:
        # code...
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MQHV28K');</script>
<!-- End Google Tag Manager -->
    <meta name="google-site-verification" content="bpdik9whR86phDbHEh6iZKePXnAdnWPxl_Rf_clGP3g" />
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $desc; ?>">
    <meta name="keywords" content="<?php echo $keyword; ?>">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="css/header.css" rel="stylesheet">
    <link rel="icon" href="images/fav-logo.png" type="image/x-icon" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <link type="text/css" href="css/c8jl8.css" media="all"/ rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <link href="css/dmsmr.css" rel="stylesheet" media="all"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/dcclc.css" rel="stylesheet">
    <link href="css/c8kid.css" rel="stylesheet">
    <link href="css/c8jl8-seo2.css" rel="stylesheet">
    <link href="css/cb9sq.css" rel="stylesheet" media="all" />
    <link href="css/caghk.css" rel="stylesheet">
    <link href="css/cagqi.css" rel="stylesheet"> <!-- why choose us -->
    <link href="css/c8kl4-2.css" rel="stylesheet">
    <link href="css/cageh.css" rel="stylesheet"> <!-- techmolozy section -->
    <link href="css/a1ilk.css" rel="stylesheet">
    <link href="css/a7akd.css" rel="stylesheet">
    <script src='js/jquery4a5f.js?ver=1.12.4-wp'></script>
    <script src='js/jquery-migrate.min330a.js?ver=1.4.1'></script>
    <script src='js/dju0hwr5152.js?ver=1.0'></script>
    <script>
        try{Typekit.load({ async: true });}catch(e){}
    </script>
    <link rel="icon" href="images/thirdeye-black-logo4.png" sizes="32x32" />
    <link rel="icon" href="images/thirdeye-black-logo4.png" sizes="192x192">
    <link rel="" href="images/thirdeye-black-logo4.png" />
    <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <style>
  @font-face {
            font-family: Raleway-Medium;
            src: url(font/Raleway-Medium.ttf);
            font-display: swap;
        }
</style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQHV28K"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="">
    <div class="nav-part nav-bar">
        <div class="nav-bar-wt">
            <div class="nav-container">
                <a class="logo" href="https://thirdeyeinfo.com">
                    <img src="images/thirdeye-white-logo4.png" alt="Thirdeye logo" class="logo-white">
                    <img src="images/thirdeye-black-logo4.png" alt="Thirdeye logo" class="logo-black">
                </a>
                <button id="toggle-navigation" class="nav-bar__toggle-navigation reset-button">
                    <div class="toggle-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div>
        </div>
        <nav id="navigation" class="navigation" style="margin-right:0px;">
            <div class="navigation-blocks"><span></span></div>
            <ul id="navigation-list" class="navigation__list list-unstyled">
                <li class="menu-listing"><a href="https://www.thirdeyeinfo.com">HOME</a></li>
                <li class="menu-listing"><a href="about-us">ABOUT US</a></li>
                <!-- <li class="menu-listing"><a href="ourproducts.php">PRODUCTS</a></li>
                <li class="menu-listing"><a href="#">INFO-SECTION</a></li>
                <li class="menu-listing"><a href="#">GET IN TOUCH</a></li> -->
                <li class="menu-listing sub-menu">
                    <a href="javascript:void(0);">SERVICES</a>
                    <i class="fa fa-caret-down caret-down" aria-hidden="true"></i>
                    <div class="our-services">
                        <div class="inner-menu">
                            <div class="col-md-6">
                                <div class="wt-100">
                                    <div class="ServicesTitle">
                                        <h4><a href="web-services" style="font-weight:800; color:#FB7946;">WEB DESIGN AND DEVELOPMENT</a></h4>
                                    </div>
                                    <ul>
                                        <li class="nav-list"><a href="website-design">Web Designing</a></li>
                                        <li class="nav-list"><a href="website-development">Web Development</a></li>
                                        <li class="nav-list"><a href="ecommerce-website-development">E-Commerce Website Development</a></li>
                                        <li class="nav-list"><a href="cms-website-development">CMS Website Development</a></li>
                                        <li class="nav-list"><a href="landing-page-development">Landing Page Development</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wt-100 mr-btm-85">
                                    <div class="ServicesTitle">
                                        <h4><a href="mobile-app-development" style="font-weight:800; color:#FB7946;">MOBILE APPS DEVELOPMENT SERVICES</a></h4>
                                    </div>
                                    <ul>
                                        <li class="nav-list"><a href="android-app-development">Android App Development</a></li>
                                        <li class="nav-list"><a href="ios-app-development">IOS Mobile Application development</a></li>
                                        <!-- <li class="nav-list"><a href="hybrid-mobile-app-development.php">Hybrid mobile app development</a></li> -->
                                        <div class="ServicesTitle" style="margin-top: 15px;">
                                            <h4><a href="digital-marketing-services" style="font-weight:800; color:#FB7946;">DIGITAL MARKETING SERVICES</a></h4>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <!-- <li class="menu-listing"><a href="https://www.techuz.com/portfolio/">Work</a></li>
                    <li class="menu-listing"><a href="https://www.techuz.com/careers/">Careers</a></li>
                    <li class="menu-listing"><a href="https://www.techuz.com/blog/">Resources</a></li> -->
                <li class="menu-listing"><a href="contact-us">CONTACT US</a></li>
                <li class="inquiry-now menu-listing"><a href="contact-us" class="get-quote"><span>Get a Quote</span></a></li>
            </ul>
        </nav>
    </div>
</header>
 <a id="back2Top" title="Back to top" href="#">&#10148;</a> 
<body>

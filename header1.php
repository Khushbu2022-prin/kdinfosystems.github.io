<?php include ("title.php") ;?>
<!doctype html>
<html class="no-js" lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title><?php echo $title ?></title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/nouislider.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
   <link rel="stylesheet" href="assets/css/modernizr.css">
   <link rel="stylesheet" href="assets/css/spacing.css">
   <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

   <!-- pre loader area start -->
   <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute">
            <!-- loading content here -->
            <div class="tp-preloader-content">
               <div class="tp-preloader-logo">
                  <div class="tp-preloader-circle">
                     <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle> 
                        <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle> 
                     </svg>
                  </div>
                  <img src="assets/img/logo/preloader/preloader-icon.svg" alt="">
               </div>
               <p class="tp-preloader-subtitle">Loading</p>
            </div>
         </div>
      </div>  
   </div>
   <!-- pre loader area end -->

   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
               stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->

   <!-- header-area-start -->
   <header>
      <div class="tptransparent__header-4">
         <div class="header-top d-none d-sm-block">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6 col-sm-8">
                     <div class="header-offer d-flex align-items-center">
                        <img src="assets/img/shape/header-rocket.png" alt="">
                        <p>End of Year Sale:<span>Save up to 35%</span> on Tasks</p>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-4">
                     <div class="header-social d-flex align-items-center">
                        <div class="header-social-item">
                           <a href="#"><i class="fa-brands fa-facebook"></i></a>
                           <a href="#"><i class="fa-brands fa-twitter"></i></a>
                           <a href="#"><i class="fa-brands fa-instagram"></i></a>
                           <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="main-header">
            <div class="custom-container">
               <div id="header-sticky"  class="header-bg-4">
                  <div class="row align-items-center">
                     <div class="col-xl-3 col-lg-6 col-sm-5 col-6">
                        <div class="tplogo__area">
                           <a href="index.php">
                              <img src="assets/img/logo/logo-pink.svg" alt="logo">
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-7 col-lg-6  d-none d-xl-block">
                        <div class="tpmenu__area main-mega-menu">
                           <nav class="tp-main-menu-content">
                              <ul>
                                 <li class="has-dropdown has-mega-menu">
                                    <a href="index.php">Home</a>
                                    <div class="tp-submenu submenu has-homemenu tp-mega-menu">
                                       <div class="row gx-6 row-cols-1 row-cols-md-2 row-cols-xl-5">
                                          <div class="col homemenu active">
                                             <div class="homemenu-thumb">
                                                <img src="assets/img/menu/home-1.jpg" alt="">
                                             </div>
                                             <div class="homemenu-btn">
                                                <a class="menu-btn mb-5" href="index.php">Multi Page</a>
                                                <a class="menu-btn" href="index-one-page.php">One Page</a>
                                             </div>
                                             <div class="demo-name">
                                                <span>SEO Marketing</span>
                                             </div>
                                          </div>
                                          <div class="col homemenu">
                                             <div class="homemenu-thumb">
                                                <img src="assets/img/menu/home-2.jpg" alt="">
                                             </div>
                                             <div class="homemenu-btn">
                                                <a class="menu-btn mb-5" href="index-2.php">Multi Page</a>
                                                <a class="menu-btn" href="index-2-one-page.php">One Page</a>
                                             </div>
                                             <div class="demo-name">
                                                <span>SEO Analysis</span>
                                             </div>
                                          </div>
                                          <div class="col homemenu">
                                             <div class="homemenu-thumb">
                                                <img src="assets/img/menu/home-3.jpg" alt="">
                                             </div>
                                             <div class="homemenu-btn">
                                                <a class="menu-btn mb-5" href="index-3.php">Multi Page</a>
                                                <a class="menu-btn" href="index-3-one-page.php">One Page</a>
                                             </div>
                                             <div class="demo-name">
                                                <span>Business SEO</span>
                                             </div>
                                          </div>
                                          <div class="col homemenu">
                                             <div class="homemenu-thumb">
                                                <img src="assets/img/menu/home-4.jpg" alt="">
                                             </div>
                                             <div class="homemenu-btn">
                                                <a class="menu-btn mb-5" href="index-4.php">Multi Page</a>
                                                <a class="menu-btn" href="index-4-one-page.php">One Page</a>
                                             </div>
                                             <div class="demo-name">
                                                <span>SEO Agency</span>
                                             </div>
                                          </div>
                                          <div class="col homemenu">
                                             <div class="homemenu-thumb">
                                                <img src="assets/img/menu/home-5.jpg" alt="">
                                             </div>
                                             <div class="homemenu-btn">
                                                <a class="menu-btn mb-5" href="index-5.php">Multi Page</a>
                                                <a class="menu-btn" href="index-5-one-page.php">One Page</a>
                                             </div>
                                             <div class="demo-name">
                                                <span>SEO Campaign</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li><a href="about.php">About</a></li>
                                 <li class="header-services has-dropdown has-mega-menu">
                                    <a href="services.php">Services</a>
                                    <div class="tp-mega-menu tp-submenu submenu">
                                       <div class="row">
                                          <div class="col-xl-6">
                                             <div class="tp-menu-banner">
                                                <h5 class="tp-menu-banner-title">Services Overview</h5>
                                                <ul>
                                                   <li>
                                                      <a href="keyword-search.php">
                                                         <span> <img src="assets/img/header-icon/keyword.png" alt=""> </span>
                                                         Keyword Research
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="seo-audit.php">
                                                         <span> <img src="assets/img/header-icon/audit.png" alt=""> </span>
                                                         SEO Audit Services
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="building-social-services.php">
                                                         <span> <img src="assets/img/header-icon/building.png" alt=""> </span>
                                                         Link Building Services
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="social-media-markiting.php">
                                                         <span> <img src="assets/img/header-icon/media.png" alt=""> </span>
                                                         Social Media Marketing
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="marketing-analysis.php">
                                                         <span> <img src="assets/img/header-icon/analysis.png" alt=""> </span>
                                                         SEO analysis.
                                                      </a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="col-xl-6">
                                             <div class="tp-menu-banner-wrap">
                                                <div class="tp-menu-banner-content">
                                                   <span>SEO Agency</span>
                                                   <h5 class="tp-menu-banner-title-2">The #1 SEO <br> agency for fast growing <br> companies.</h5>
                                                   <div class="tp-menu-banner-btn">
                                                      <a href="services.php">
                                                         Learn more 
                                                         <span>
                                                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M1 1.5L8 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                               <path d="M8 1.5V8.5H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                         </span>
                                                      </a>
                                                   </div>
                                                </div>
                                                <div class="tp-menu-banner-thumb">
                                                   <img src="assets/img/header-icon/header-banner/header-banner-1.png" alt="">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div> 
                                 </li>
                                 <li class="has-dropdown has-megamenu">
                                    <a href="about.php">Pages</a>
                                    <ul class="tp-submenu submenu mega-menu">
                                       <li>
                                          <ul>
                                             <li><a href="about.php">About Us</a></li>
                                             <li><a href="services.php">Services</a></li>
                                             <li><a href="team.php">Team Member</a></li>
                                             <li><a href="team-details.php">Team Details</a></li>
                                             <li><a href="sign-in.php">Sign In</a></li>
                                             <li><a href="sign-out.php">Sign Up</a></li>
                                          </ul>
                                       </li>
                                       <li>
                                          <ul>
                                             <li><a href="pricing.php">Pricing</a></li>
                                             <li><a href="portfolio.php">Case Studies 2 Columns</a></li>
                                             <li><a href="portfolio-2.php">Case Studies 3 Columns</a></li>
                                             <li><a href="portfolio-details.php">Case Studies Details</a></li>
                                             <li><a href="blog-grid.php">Blog Grid</a></li>
                                             <li><a href="blog-masonry.php">Blog Masonry</a></li>
                                          </ul>
                                       </li>
                                       <li>
                                          <ul>
                                             <li><a href="blog-list.php">Blog List</a></li>
                                             <li><a href="blog-details.php">Blog Details</a></li>
                                             <li><a href="blog-details-2.php">Blog Details Full Width</a></li>
                                             <li><a href="faq.php">FAQ</a></li>
                                             <li><a href="contact.php">Contact</a></li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="blog.php">Blog</a>
                                    <ul class="tp-submenu submenu">
                                       <li><a href="blog.php">Blog</a></li>
                                       <li><a href="blog-grid.php">Blog Grid</a></li>
                                       <li><a href="blog-masonry.php">Blog Masonry</a></li>
                                       <li><a href="blog-list.php">Blog List</a></li>
                                       <li><a href="blog-details.php">Blog Details</a></li>
                                       <li><a href="blog-details-2.php">Blog Details Full Width</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="contact.php">Contact</a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <div class="col-xl-2 col-lg-6 col-sm-7 col-6">
                        <div class="header-btn header-btn-4 text-end">
                           <a class="blue-btn d-none d-xl-block" href="contact.php">Contact Us</a>
                           <div class="offcanvas-btn d-xl-none ml-20">
                              <button class="offcanvas-open-btn"><i class="fa-solid fa-bars"></i></button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header-area-end -->

   <!-- offcanvas area start -->
   <div class="offcanvas__area">
      <div class="offcanvas__wrapper">
         <div class="offcanvas__close">
            <button class="offcanvas__close-btn offcanvas-close-btn">
               <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                     stroke-linejoin="round" />
                  <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                     stroke-linejoin="round" />
               </svg>
            </button>
         </div>
         <div class="offcanvas__content">
            <div class="offcanvas__top mb-50 d-flex justify-content-between align-items-center">
               <div class="offcanvas__logo logo">
                  <a href="home-main.php">
                     <img src="assets/img/logo/logo-pink.svg" alt="logo">
                  </a>
               </div>
            </div>
            <div class="tp-main-menu-mobile mb-35"></div>
            <div class="offcanvas__btn">
               <a href="contact.php" class="tp-btn w-100">Getting Started</a>
            </div>
            <div class="offcanvas__contact mb-40">
               <p class="offcanvas__contact-call"><a href="tel:+964-742-44-763">+964 742 44 763</a></p>
               <p class="offcanvas__contact-mail"><a href="https://html.weblearnbd.net/cdn-cgi/l/email-protection#94fdfaf2fbd4fcf5e6e6edbaf7fbf9"><span class="__cf_email__" data-cfemail="60090e060f2013050f0d194e030f0d">[email&#160;protected]</span></a></p>
            </div>
            <div class="offcanvas__social">
               <a href="#"><i class="fab fa-facebook-f"></i></a>
               <a href="#"><i class="fab fa-twitter"></i></a>
               <a href="#"><i class="fab fa-youtube"></i></a>
               <a href="#"><i class="fab fa-linkedin"></i></a>
               <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- offcanvas area end -->
<?php include ("title.php") ;?>
<!doctype html>
<html class="no-js" lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title><?php echo $title ?></title>
   <meta name="description" content="<?php echo $description ?>">
   <meta name="keywords" content="<?php echo $keywords ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">
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
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&amp;family=Urbanist:wght@300;400;500;600;700;800&amp;display=swap">
</head>
<style>
   .top-header-deatils{
      display: flex;
      gap: 15px;
   }
</style>

<body>

 
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
                  <img src="assets/img/logo/preloader/preloader.png" alt="" width="100"> 
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
                  <div class="top-header-deatils">
                     <div class="header-offer d-flex align-items-center">
                        <img src="assets/img/shape/mail.png" alt="">
                       <p><a href="mailto:support@kdinfosystems.com">support@kdinfosystems.com</a></p>
                      </div>
                      <div class="header-offer d-flex align-items-center">
                        <img src="assets/img/shape/phone-call.png" alt="">
                       <p><a href="tel:+918169014375">+918169014375</a></p>
                      </div>
                  </div>
                  </div>
                  <div class="col-lg-6 col-sm-4">
                     <div class="header-social d-flex align-items-center">
                        <div class="header-social-item">
                           <a href="#"><i class="fa-brands fa-facebook"></i></a>
                           <a href="#"><i class="fa-brands fa-twitter"></i></a>
                           <a href="#"><i class="fa-brands fa-instagram"></i></a>
                           <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                        <div class="lang-menu">
                           <div class="selected-lang" id="selected-lang">
                              English
                           </div>
                           <ul id="lang-options" style="display: none;">
                              <li>
                                 <a href="#" class="de">German</a>
                              </li>
                              <li>
                                 <a href="#" class="en">English</a>
                              </li>
                              <li>
                                 <a href="#" class="fr">French</a>
                              </li>
                              <li>
                                 <a href="#" class="ae">Arabic</a>
                              </li>
                           </ul>
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
                                 <li>
                                    <a href="index.php">Home</a>
                                    
                                 </li>
                                 <li><a href="about-us.php">About Us</a></li>
                                 <li class="header-services has-dropdown has-mega-menu">
                                    <a href="#">Services</a>
                                    <div class="tp-mega-menu tp-submenu submenu">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="tp-menu-banner">
                                               
                                                <ul>
                                                   <li>
                                                      <a href="landing-page.php">
                                                         <span> <img src="assets/img/home/Landing Page.png" alt=""> </span>
                                                         Landing Page
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="static-website.php">
                                                         <span> <img src="assets/img/home/Static Website.png" alt=""> </span>
                                                         Static Website
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="wordpress-website.php">
                                                         <span> <img src="assets/img/home/wordpress.png" alt=""> </span>
                                                         Wordpress Website
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="Ecommerce.php">
                                                         <span> <img src="assets/img/home/ecommerce.png" alt=""> </span>
                                                         Ecommerce
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="email-template-signature.php">
                                                         <span> <img src="assets/img/home/email template.png" alt=""> </span>
                                                         Email Template/Signature
                                                      </a>
                                                   </li>
                                                   
                                                   <li>
                                                      <a href="api-integration.php">
                                                         <span> <img src="assets/img/home/api integration.png" alt=""> </span>
                                                         API Integration
                                                      </a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                        
                                       </div>
                                    </div> 
                                 </li>
                                 <li>
                                    <a href="#">Pricing</a>
                                  
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="#">Partner Programs</a>
                                    <ul class="tp-submenu submenu">
                                       <li><a href="become-an-affiliate.php">Become an Affiliate </a></li>
                                       
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="#">Blogs</a>
                                  
                                 </li>
                                
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <div class="col-xl-2 col-lg-6 col-sm-7 col-6">
                        <div class="header-btn header-btn-4 text-end">
                           <a class="blue-btn d-none d-xl-block" href="contact-us.php">Contact Us</a>
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
                  <a href="index.php">
                     <img src="assets/img/logo/logo-pink.svg" alt="logo">
                  </a>
               </div>
            </div>
            <div class="tp-main-menu-mobile mb-35"></div>
            <div class="offcanvas__btn">
               <a href="contact-us.php" class="tp-btn w-100">Contact Us</a>
            </div>
            <div class="offcanvas__contact mb-40">
               <p class="offcanvas__contact-call"><a href="tel:+918169014375">+918169014375</a></p>
               <p class="offcanvas__contact-mail"><a href="mailto:"><span  >sales@kdinfosystems.com</span></a></p>
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



<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.rrdevs.net/brulloft/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2024 07:12:09 GMT -->
<head>
    @include('partials.frontend.head')
</head>

<body>
   <!-- preloader start -->
   <div id="loading">
      <div class="preloader-close">x</div>
      <div id="loading-center">
         <div id="loading-center-absolute">
            <div class="object" id="object_four"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_one"></div>
         </div>
      </div>
   </div>
   <!-- preloader start -->

   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
               stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->

   <!-- search popup start -->
   <div class="search__popup">
      <div class="container">
         <div class="row gx-30">
            <div class="col-xxl-12">
               <div class="search__wrapper">
                  <div class="search__top d-flex justify-content-between align-items-center">
                     <div class="search__logo">
                        <a href="index-2.html">
                           <img src="assets/img/logo/logo-white.png" alt="img">
                        </a>
                     </div>
                     <div class="search__close">
                        <button type="button" class="search__close-btn search-close-btn">
                           <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                              <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                              <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                           </svg>
                        </button>
                     </div>
                  </div>
                  <div class="search__form">
                     <form action="#">
                        <div class="search__input">
                           <input class="search-input-field" type="text" placeholder="Type here to search...">
                           <span class="search-focus-border"></span>
                           <button type="submit">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                 <path
                                    d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                 <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- search popup end -->

   <!-- rr-offcanvus-area-start -->
   <div class="rroffcanvas-area">
      <div class="rroffcanvas">
         <div class="rroffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
         </div>
         <div class="rroffcanvas__logo">
            <a href="index-2.html">
               <img src="assets/img/logo/logo-white.png" alt="img">
            </a>
         </div>
         <div class="rr-main-menu-mobile d-xl-none"></div>
         <div class="rroffcanvas__contact-info">
            <div class="rroffcanvas__contact-title">
               <h5>Contact us</h5>
            </div>
            <ul>
               <li>
                  <i class="fa-light fa-location-dot"></i>
                  <a href="htrrs://www.google.com/maps/@23.8223586,90.3661283,15z" target="_blank">Melbone st,
                     Australia, Ny 12099</a>
               </li>
               <li>
                  <i class="fas fa-envelope"></i>
                  <a href="mailto:rubelmah55@gmail.com">rubelmah55@gmail.com</a>
               </li>
               <li>
                  <i class="fal fa-phone-alt"></i>
                  <a href="tel:48555223224">+48 555 223 224</a>
               </li>
            </ul>
         </div>
         <div class="rroffcanvas__social">
            <div class="social-icon">
               <a href="#"><i class="fab fa-twitter"></i></a>
               <a href="#"><i class="fab fa-instagram"></i></a>
               <a href="#"><i class="fab fa-facebook-f"></i></a>
               <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- rr-offcanvus-area-end -->

   
   <!-- main header area end -->
   <header class="rr-header-height z-index-3">
    @include('partials.frontend.navigation')
   </header>
   <!-- main header area end -->

   <main>

      <!-- breadcrumb area start -->
      <div class="breadcrumb__area breadcrumb__height fix p-relative" data-bg-color="#F6F8FF">
         <div class="breadcrumb__shap">
            <div class="shap">
               <img src="assets/img/error/shap.png" alt="">
            </div>
            <div class="shap-2">
               <img src="assets/img/error/shape-2.png" alt="">
            </div>
            <div class="shap-3">
               <img src="assets/img/error/shape-3.png" alt="">
            </div>
            <div class="shap-4">
               <img src="assets/img/error/shape-4.png" alt="">
            </div>
         </div>
         <div class="container">
            <div class="row gx-30">
               <div class="col-xl-12 col-md-12 text-center">
                  <div class="breadcrumb__content z-index">
                     <div class="breadcrumb__section-title-box">
                        <h3 class="breadcrumb__title">About Us</h3>
                     </div>
                     <div class="breadcrumb__list">
                        <span><a href="index-2.html">Home</a></span>
                        <span class="dvdr"><i class="fa-regular fa-chevron-right"></i></span>
                        <span>About Us</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->
      <!-- about-3 03 area start -->
      <section class="rr-about-3-area pb-120 pt-120 fix">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="rr-about-3-thumb">
                     <img src="assets/img/about/img-sm.jpg" alt="">
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="rr-about-title-wrapper mt-140 ml-40">
                     <span class="rr-section-subtitle wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">About
                        Brulloft</span>
                     <h3 class="rr-section-title pb-15 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s"> We
                        Will Make Your Dream
                        Wedding A Reality</h3>
                     <div class="rr-section-main mb-40 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <p>It is a long established fact that a reader will be distracted by the <br/> readable content
                           of a page when looking at its layout. The point of <br/> using Lorem Ipsum is that it has a
                           more-or-less normal distribution <br/> of letters, as opposed to using</p>
                        <p>Content here, content here', making it look like readable English. <br/> Many desktop
                           publishing packages and web page editors now use <br/> Lorem Ipsum as their default model
                           text.</p>
                     </div>
                     <div class=" wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                        <a href="about.html" class="rr-btn-2"><span>More
                              About Us <i class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about-3 03 area end -->
      <!-- fact area start -->
      <div class="rr-funfact-2-area p-relative fix">
         <div class="container">
            <div class="rr-funfact-2">
               <div class="row gx-30">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow rrfadeUp mb-30" data-wow-duration=".9s"
                     data-wow-delay=".3s">
                     <div class="rr-funfact-2-content text-center fix p-relative">
                        <div class="rr-funfact-2-number d-flex align-items-center justify-content-center">
                           <div class="rr-funfact-2-icon mr-15">
                              <img src="assets/img/counter/icon.png" alt="">
                           </div>
                           <div class="rr-funfact-2-info">
                              <div class="rr-funfact-2-counter d-flex align-items-center">
                                 <h5 class="rr-funfact-2-number purecounter" data-purecounter-duration="1"
                                    data-purecounter-end="1542">0</h5>
                                 <b>+</b>
                              </div>
                              <div class="rr-funfact-2-text">
                                 <span>Flower Arrangements</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow rrfadeUp mb-30" data-wow-duration=".9s"
                     data-wow-delay=".5s">
                     <div class="rr-funfact-2-content text-center fix p-relative">
                        <div class="rr-funfact-2-number d-flex align-items-center justify-content-center">
                           <div class="rr-funfact-2-icon mr-15">
                              <img src="assets/img/counter/icon-02.png" alt="">
                           </div>
                           <div class="rr-funfact-2-info">
                              <div class="rr-funfact-2-counter d-flex align-items-center">
                                 <h5 class="rr-funfact-2-number purecounter" data-purecounter-duration="1"
                                    data-purecounter-end="1260">0</h5>
                                 <b>+</b>
                              </div>
                              <div class="rr-funfact-2-text">
                                 <span>Ceremonies</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow rrfadeUp mb-30" data-wow-duration=".9s"
                     data-wow-delay=".7s">
                     <div class="rr-funfact-2-content text-center fix p-relative">
                        <div class="rr-funfact-2-number d-flex align-items-center justify-content-center">
                           <div class="rr-funfact-2-icon mr-15">
                              <img src="assets/img/counter/icon-03.png" alt="">
                           </div>
                           <div class="rr-funfact-2-info">
                              <div class="rr-funfact-2-counter d-flex align-items-center">
                                 <h5 class="rr-funfact-2-number purecounter" data-purecounter-duration="1"
                                    data-purecounter-end="150">0</h5>
                                 <b>+</b>
                              </div>
                              <div class="rr-funfact-2-text">
                                 <span>Wedding Cakes</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow rrfadeUp mb-30" data-wow-duration=".9s"
                     data-wow-delay=".9s">
                     <div class="rr-funfact-2-content text-center fix p-relative">
                        <div class="rr-funfact-2-number d-flex align-items-center justify-content-center">
                           <div class="rr-funfact-2-icon mr-15">
                              <img src="assets/img/counter/icon-04.png" alt="">
                           </div>
                           <div class="rr-funfact-2-info">
                              <div class="rr-funfact-2-counter d-flex align-items-center">
                                 <h5 class="rr-funfact-2-number purecounter" data-purecounter-duration="1"
                                    data-purecounter-end="1000">0</h5>
                                 <b>+</b>
                              </div>
                              <div class="rr-funfact-2-text">
                                 <span>Happy Couples</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- fact area end -->
      <!-- service-3 area start -->
      <section class="rr-service-3-area pt-120 fix">
         <div class="container p-relative">
            <div class="row">
               <div class="col-xl-12 col-lg-10 col-md-10 col-12">
                  <div class="rr-section-title-wrapper mb-40">
                     <span class="rr-section-subtitle wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">Our
                        Services</span>
                     <h3 class="rr-section-title wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".7s">We're
                        Providing The Best Digital <br/> Wedding Solution</h3>
                  </div>
               </div>
            </div>
            <div class="rr-services-arrow-box d-none d-md-block ">
               <button class="postbox-arrow-next">
                  <i class="fa-sharp fa-solid fa-angle-left"></i>
               </button>
               <button class="postbox-arrow-prev">
                  <i class="fa-sharp fa-solid fa-angle-right"></i>
               </button>
            </div>
            <div class="swiper-container rr-services-2-active">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="rr-service-3-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="rr-service-3-icon">
                           <img src="assets/img/service/icon.png" alt="">
                        </div>
                        <div class="rr-service-3-content">
                           <h4 class="rr-service-3-title"><a href="services-details.html">Wedding Reception</a></h4>
                           <p>Lorem Ipsum you need be sure there isn't anything else.</p>
                           <div class="rr-service-3-btn">
                              <a href="services-details.html">Read More <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="rr-service-3-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="rr-service-3-icon">
                           <img src="assets/img/service/icon02.png" alt="">
                        </div>
                        <div class="rr-service-3-content">
                           <h4 class="rr-service-3-title"><a href="services-details.html">Photography Event</a></h4>
                           <p>Lorem Ipsum you need be sure there isn't anything else.</p>
                           <div class="rr-service-3-btn">
                              <a href="services-details.html">Read More <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="rr-service-3-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div class="rr-service-3-icon">
                           <img src="assets/img/service/icon03.png" alt="">
                        </div>
                        <div class="rr-service-3-content">
                           <h4 class="rr-service-3-title"><a href="services-details.html">Bridal Dressup</a></h4>
                           <p>Lorem Ipsum you need be sure there isn't anything else.</p>
                           <div class="rr-service-3-btn">
                              <a href="services-details.html">Read More <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="rr-service-3-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                        <div class="rr-service-3-icon">
                           <img src="assets/img/service/icon04.png" alt="">
                        </div>
                        <div class="rr-service-3-content">
                           <h4 class="rr-service-3-title"><a href="services-details.html">Wedding Decoration</a></h4>
                           <p>Lorem Ipsum you need be sure there isn't anything else.</p>
                           <div class="rr-service-3-btn">
                              <a href="services-details.html">Read More <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- service-3 area end -->
      <!-- project-slider area start -->
      <section class="rr-project-slider-area rr-project-slider-bg p-relative fix pt-120">
         <div class="container-fluid">
            <div class="row gx-30">
               <div class="col-lg-12">
                  <div class="rr-section-title-wrapper mb-40 text-center p-relative z-index-3">
                     <span class="rr-section-subtitle wow rrfadeRight" data-wow-duration=".9s" data-wow-delay=".5s">Our
                        Projects</span>
                     <h3 class="rr-section-title wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".7s">Our
                        Amazing Work</h3>
                  </div>
               </div>
            </div>
            <div class="swiper-container rr-project-active">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="rr-project-slider-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="rr-project-slider-thumb">
                           <img src="assets/img/project/image.jpg" alt="">
                        </div>
                        <div class="rr-project-slider-content text-center">
                           <h3 class="rr-project-slider-title"><a href="project-details.html">Wedding Ring</a></h3>
                           <span>Adipiscing mauris sed metus dictum</span>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="rr-project-slider-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".4s">
                        <div class="rr-project-slider-thumb">
                           <img src="assets/img/project/image1.jpg" alt="">
                        </div>
                        <div class="rr-project-slider-content text-center">
                           <h3 class="rr-project-slider-title"><a href="project-details.html">Wedding Bliss</a></h3>
                           <span>Adipiscing mauris sed metus dictum</span>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="rr-project-slider-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="rr-project-slider-thumb">
                           <img src="assets/img/project/image2.jpg" alt="">
                        </div>
                        <div class="rr-project-slider-content text-center">
                           <h3 class="rr-project-slider-title"><a href="project-details.html">Wedding Dressup</a></h3>
                           <span>Adipiscing mauris sed metus dictum</span>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="rr-project-slider-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                        <div class="rr-project-slider-thumb">
                           <img src="assets/img/project/image3.jpg" alt="">
                        </div>
                        <div class="rr-project-slider-content text-center">
                           <h3 class="rr-project-slider-title"><a href="project-details.html">Decoration Plan</a></h3>
                           <span>Adipiscing mauris sed metus dictum</span>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="rr-project-slider-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div class="rr-project-slider-thumb">
                           <img src="assets/img/project/image4.jpg" alt="">
                        </div>
                        <div class="rr-project-slider-content text-center">
                           <h3 class="rr-project-slider-title"><a href="project-details.html">Made With Love</a></h3>
                           <span>Adipiscing mauris sed metus dictum</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- project-slider area end -->
      <!-- rr-testimonial-single-single area start -->
      <div class="rr-testimonial-single-area gray-bg fix">
         <div class="container p-relative">
            <div class="row gx-30">
               <div class="col-lg-12">
                  <div class="rr-section-title-wrapper mb-40 text-center">
                     <span class="rr-section-subtitle wow rrfadeRight" data-wow-duration=".9s" data-wow-delay=".5s">Our
                        Testimonial</span>
                     <h3 class="rr-section-title wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".7s">Feedback from Clients"</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-8 offset-xl-2 col-lg-12 col-md-12 col-12 p-relative">
                  <div class="rr-testimonial-single-wrap">
                     <div class="rr-testimonial-single-info p-relative">
                        <div class="rr-testimonial-single-quate-icon  wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                           <span><img src="assets/img/testimonial/quate.png" alt=""></span>
                        </div>
                        <div class="rr-testimonial-single-quate-icon-right  wow rrfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                           <span><img src="assets/img/testimonial/quate-2.png" alt=""></span>
                        </div>
                        <div class="rr-testimonial-item-active">
                           <div class="rr-testimonial-single-item text-center">
                              <p class=" wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">"As a satisfied customer of , I want to share my positive experience with others. <br/>
                                 Their software as a service platform has greatly improved the efficiency and <br/>
                                 productivity of our business operations. </p>
                              <div class="designation wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                                 <h3>Evan Lwis</h3>
                              </div>
                           </div>
                           <div class="rr-testimonial-single-item text-center">
                              <p class=" wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">"As a satisfied customer of , I want to share my positive experience with others. <br/>
                                 Their software as a service platform has greatly improved the efficiency and <br/>
                                 productivity of our business operations. </p>
                              <div class="designation wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                                 <h3>Evan Lwis</h3>
                              </div>
                           </div>
                           <div class="rr-testimonial-single-item text-center">
                              <p class=" wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">"As a satisfied customer of , I want to share my positive experience with others. <br/>
                                 Their software as a service platform has greatly improved the efficiency and <br/>
                                 productivity of our business operations. </p>
                              <div class="designation wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                                 <h3>Evan Lwis</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- rr-testimonial-single-single area end -->
     <!-- brand area end -->
     <section class="rr-brand-area pb-120 fix">
      <div class="container">
         <div class="row gx-30">
            <div class="col-xl-4 col-lg-4 col-md-12 col-12">
               <div class="rr-brand-content mt-45">
                  <h4 class="rr-brand-title wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">Our Trusted Branding Partners</h4>
               </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
               <div class="swiper-container rr-brand-active">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="rr-brand-item text-end">
                           <img src="assets/img/brand/brand-1.png" alt="">
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="rr-brand-item text-end">
                           <img src="assets/img/brand/brand.png" alt="">
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="rr-brand-item text-end">
                           <img src="assets/img/brand/brand2.png" alt="">
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="rr-brand-item text-end">
                           <img src="assets/img/brand/brand4.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- brand area end -->

   </main>


   <footer>
    @include('partials.frontend.footer')
   </footer>


  @include('partials.frontend.script')

</body>


<!-- Mirrored from html.rrdevs.net/brulloft/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2024 07:12:10 GMT -->
</html>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.rrdevs.net/brulloft/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2024 07:12:10 GMT -->
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
                        <h3 class="breadcrumb__title">Event</h3>
                     </div>
                     <div class="breadcrumb__list">
                        <span><a href="{{ route('frontend.index') }}">Home</a></span>
                        <span class="dvdr"><i class="fa-regular fa-chevron-right"></i></span>
                        <span>Events</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->
      <!-- services.blade.php -->
      <div class="row">
         @foreach ($events as $event)
             <div class="col-lg-4 col-md-6 col-sm-12 wow rrfadeUp mb-4" data-wow-duration=".9s">
                 <div class="rr-event-item text-center mb-30">
                     <div class="rr-event-thumb">
                         <img src="{{ asset($event->image ? 'assets/img/event/' . $event->image : 'assets/img/event/default.jpg') }}" 
                              alt="{{ $event->title }}">
                     </div>
                     <div class="rr-event-content">
                         <h4 class="rr-event-title">
                             <a href="{{ route('frontend.eventDetails', $event->id) }}">{{ $event->event }}</a>
                         </h4>
                         <p>{{ \Illuminate\Support\Str::limit($event->description, 100) }}</p>
                         <div class="rr-event-btn">
                             <a href="{{ route('frontend.eventDetails', $event->id) }}">Read More <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         @endforeach
     </div>
     
     

      <!-- about area start -->
      <section class="rr-about-area pt-120 pb-120 fix">
         <div class="container">
            <div class="row gx-30">
               <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 p-relative wow rrfadeUp" data-wow-duration=".9s"
                  data-wow-delay=".5s">
                  <div class="rr-about-thumb rr-about-img d-flex align-items-center justify-content-center"
                     data-background="assets/img/about/img.png">
                     <img src="assets/img/about/shape.png" alt="">
                  </div>
               </div>
               <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                  <div class="rr-about-main-info text-center">
                     <div class="rr-about-title-wrapper text-center mb-40">
                        <span class="rr-section-subtitle wow rrfadeUp" data-wow-duration=".9s"
                           data-wow-delay=".3s">About Brulloft</span>
                           <h3 class="rr-section-title pb-15 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">Unrivaled
                              Scenery <br />Unforgettable </h3>
                        <p class=" wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">Our wedding planning and
                           events coordination services are designed <br/> for Any Sized
                           budget, meaning anyone. Our wedding planning and <br/> events coordination services are
                           designed.</p>
                     </div>
                     <div class="rr-about-btn  wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                        <a class="rr-btn" href="services-details.html"><span>read more <i
                                 class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 p-relative wow rrfadeUp" data-wow-duration=".9s"
                  data-wow-delay=".9s">
                  <div class="rr-about-thumb rr-about-img d-flex align-items-center justify-content-center"
                     data-background="assets/img/about/img-2.png">
                     <img src="assets/img/about/shape.png" alt="">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about area end -->
      <!-- testimonial area start -->
      <section class="rr-testimonial-area p-relative pt-110 pb-120 fix">
         <div class="container p-relative">
            <div class="row gx-30">
               <div class="rr-section-title-wrapper mb-60 text-center p-relative z-index-2">
                  <span class="rr-section-subtitle wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">Our
                     Testimonial</span>
                  <h3 class="rr-section-title wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">Our Client's
                     Feedback</h3>
               </div>
            </div>
            <div class="rr-testimonial-shap d-none d-lg-block">
               <span>
                  <svg width="928" height="469" viewBox="0 0 928 469" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M148.215 360.02C162.629 355.132 143.138 370.188 94.8203 395.021L65.5273 411.11C69.3701 406.725 66.2455 398.612 148.215 360.033V360.02Z"
                        fill="#F5F5F5" />
                     <path
                        d="M361.961 246.061C346.338 256.72 332.642 262.163 314.575 271.323L317.473 266.51C340.34 253.394 354.804 248.48 361.961 246.049V246.061Z"
                        fill="#F5F5F5" />
                     <path
                        d="M815.908 6.81613L826.945 0C815.908 6.81613 811.272 10.6841 812.141 11.1502C788.329 23.8502 762.891 35.5548 773.084 28.2473C791.29 19.0121 792.978 19.9696 815.921 6.80353L815.908 6.81613Z"
                        fill="#F5F5F5" />
                     <path
                        d="M341.576 305.857C413.731 268.324 518.064 209.889 585.848 170.025L706.359 107.634C649.536 140.732 684.839 127.969 689.098 130.363C714.548 118.659 726.845 106.047 754.815 95.7911C737.453 105.505 707.316 121.115 696.279 127.932C729.856 114.224 823.165 62.605 801.558 82.9778L744.786 116.038C752.975 127.05 857.044 87.8663 804.934 130.099C866.909 99.8481 849.976 116.34 889.928 99.6969L854.235 118.722C916.159 88.4962 842.832 131.799 851.816 130.275L818.755 150.698C760.195 182.851 787.308 159.077 700.374 207.76C652.535 239.32 787.384 172.091 726.769 209.536C713.679 221.644 754.815 199.243 775.629 191.406C812.166 172.86 810.415 171.928 852.383 150.018C880.907 146.465 690.925 247.762 712.142 246.704C742.304 231.093 821.301 197.353 861.971 168.211L822.888 185.321L862.323 161.962C864.881 163.398 863.659 169.169 904.782 146.78C771.194 221.266 1041.55 93.4351 831.922 196.811C863.293 175.418 855.999 177.912 799.605 204.723C791.642 219.691 740.83 256.103 743.035 263.775L804.947 233.563C745.592 265.212 707.87 289.515 693.885 301.17C707.581 295.727 703.662 300.149 732.968 284.06C769.455 265.539 748.54 260.374 856.754 210.607C836.042 231.433 786.023 268.362 702.541 318.922C686.389 322.865 701.231 311.703 619.261 350.281C532.629 379.7 587.637 332.668 483.568 371.838C524.717 349.437 538.651 337.808 581.539 316.339C609.937 299.796 576.398 313.479 634.959 281.326C569.973 303.387 598.22 273.88 599.782 261.873C495.525 320.257 528.106 293.094 483.518 313.618C528.459 286.857 505.906 293.749 502.542 291.821C484.261 301.107 476.248 303.047 446.93 319.149C461.394 314.235 438.501 327.376 429.152 335.15C350.723 375.568 429.543 328.888 431.685 323.546L475.353 302.593C474.887 295.853 604.192 218.986 526.934 253.658L454.439 297.44C417.41 309.258 515.797 247.485 421.177 291.872C396.13 310.354 457.765 286.353 356.367 339.937C302.493 368.197 302.871 361.935 324.05 347.849C419.867 284.652 196.648 393.408 341.576 305.882V305.857Z"
                        fill="#F5F5F5" />
                     <path
                        d="M172.508 412.319C181.92 417.56 320.158 339.181 311.326 353.683C256.62 381.451 213.355 409.169 210.356 414.045C243.089 399.846 222.779 414.411 225.412 415.796C215.144 423.142 149.427 457.714 145.962 455.824C250.698 391.127 73.3152 473.589 172.496 412.319H172.508Z"
                        fill="#F5F5F5" />
                     <path
                        d="M468.071 246.805C478.705 246.263 351.869 311.552 386.252 298.348C318.847 331.962 383.72 296.899 379.411 294.543L417.712 276.917L468.084 246.792L468.071 246.805Z"
                        fill="#F5F5F5" />
                     <path
                        d="M315.696 369.054C324.654 367.542 295.853 390.347 224.63 428.333C219.074 431.76 182.586 450.281 196.206 444.888C217.335 430.828 221.556 420.194 315.696 369.054Z"
                        fill="#F5F5F5" />
                     <path
                        d="M594.314 206.979C607.883 201.611 609.559 202.581 612.167 203.98C598.572 209.36 566.734 224.013 594.314 206.979Z"
                        fill="#F5F5F5" />
                     <path
                        d="M450.621 301.774C503.65 273.036 465.034 296.886 465.903 297.352L443.88 310.959C430.361 316.301 422.172 318.33 450.621 301.774Z"
                        fill="#F5F5F5" />
                     <path
                        d="M303.638 407.633C284.173 422.676 233.65 439.823 226.834 449.059L217.989 450.52L300.224 405.743L303.651 407.645L303.638 407.633Z"
                        fill="#F5F5F5" />
                     <path
                        d="M232.921 452.335C252.021 443.553 259.215 441.121 243.516 451.818L212.535 466.937C199.81 472.796 234.609 453.305 232.921 452.335Z"
                        fill="#F5F5F5" />
                     <path
                        d="M417.837 348.152C437.756 339.862 395.764 361.784 379.246 371.99C354.64 384.173 409.698 350.155 417.837 348.152Z"
                        fill="#F5F5F5" />
                     <path
                        d="M926.993 100.907C859.563 134.534 897.247 110.243 875.602 117.588C897.247 110.243 934.603 92.1881 926.993 100.907Z"
                        fill="#F5F5F5" />
                     <path
                        d="M75.3924 364.833C97.4157 351.226 77.5216 359.504 58.3962 368.298L35.4531 381.464L75.3798 364.833H75.3924Z"
                        fill="#F5F5F5" />
                     <path
                        d="M53.5963 404.42C132.908 364.455 93.8253 381.577 149.854 347.975C162.944 335.868 98.361 364.707 99.6209 358.911L55.0578 379.41C30.9556 398.322 11.0868 419.639 53.5963 404.42Z"
                        fill="#F5F5F5" />
                     <path
                        d="M444.296 201.221C476.512 180.319 418.329 206.21 415.771 204.774C408.111 213.517 407.758 219.767 404.86 224.567C423.117 215.307 433.208 208.049 444.296 201.208V201.221Z"
                        fill="#F5F5F5" />
                     <path
                        d="M11.7676 348.895C17.7396 352.234 -39.4479 391.581 62.4161 344.725C77.2957 333.524 101.007 320.887 114.098 308.779C218.935 257.073 103.54 322.336 107.874 324.68C128.133 310.153 174.435 290.586 183.418 289.062C159.316 307.973 174.196 309.825 181.919 314.096C220.976 296.999 166.372 337.77 265.968 283.254C276.69 282.674 199.898 324.075 179.538 338.665C303.072 284.451 -28.1717 468.99 120.019 402.555C59.7451 433.75 71.2103 433.7 67.4684 438.034C66.2463 443.804 65.4651 456.341 176.199 394.97C250.408 352.146 124.807 411.651 197.202 367.932C313.819 296.898 247.8 350.735 349.135 297.176C330.135 305.907 418.77 258.181 385.143 271.914C434.897 254.238 495.096 210.027 558.734 180.76C615.077 140.934 615.921 141.413 742.266 69.3832C718.869 75.7962 631.103 123.988 581.853 148.392C528.383 170.378 642.921 104.661 613.969 114.488C772.655 34.5466 730.561 43.4668 724.602 40.1155C728.772 29.507 585.016 111.275 594.692 97.2651C667.981 53.9997 698.244 51.3791 776.245 4.19531L742.719 17.878C680.756 48.1159 601.42 88.093 556.857 108.592C555.143 107.647 552.56 106.223 576.322 93.5484C603.536 82.7761 662.034 50.6357 694.225 29.7464C668.812 41.4384 662.4 44.3866 637.806 56.5699C472.039 151.945 624.716 55.625 524.464 103.489C379.322 165.023 719.474 -7.95025 640.086 18.9993C495.499 100.289 559.427 51.7445 501.244 77.6483C503.298 72.3566 543.653 49.4388 588.594 22.6908C572.039 30.3133 562.4 32.178 533.737 46.8812C338.337 152.815 157.414 258.446 0 354.502C3.89313 352.788 7.59728 351.113 11.7676 348.895Z"
                        fill="#F5F5F5" />
                  </svg>
               </span>
            </div>
            <div class="rr-testimonial-wrapper mb-50">
               <div class="rr-testimonial-active swiper-container wow rrfadeUp" data-wow-duration=".9s"
                  data-wow-delay=".7s">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="rr-testimonial-item d-flex align-items-start">
                           <div class="rr-testimonial-thumb mr-20">
                              <img src="assets/img/testimonial/avada.png" alt="">
                           </div>
                           <div class="rr-testimonial-content">
                              <div class="rr-testimonial-star">
                                 <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                          fill="#FFB016" />
                                    </svg>
                                 </span>
                                 <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                          fill="#FFB016" />
                                    </svg>
                                 </span>
                                 <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                          fill="#FFB016" />
                                    </svg>
                                 </span>
                                 <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                          fill="#FFB016" />
                                    </svg>
                                 </span>
                                 <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                          fill="#FFB016" />
                                    </svg>
                                 </span>
                              </div>
                              <p>Lorem Ipsum available, but the majority have <br/> suffered alteration in some form by
                                 injected humour<br/> or randomised words which don't look even slightly <br/>believable
                                 if you are going.</p>
                              <h4 class="rr-testimonial-title">Eleanor Fant</h4>
                              <span>Product designer</span>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="rr-testimonial-item d-flex align-items-start">
                           <div class="rr-testimonial-thumb mr-20">
                              <img src="assets/img/testimonial/avada-1.png" alt="">
                           </div>
                           <div class="rr-testimonial-content">
                              <div class="rr-testimonial-star">
                                 <div class="rr-testimonial-star">
                                    <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                             fill="#FFB016" />
                                       </svg>
                                    </span>
                                    <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                             fill="#FFB016" />
                                       </svg>
                                    </span>
                                    <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                             fill="#FFB016" />
                                       </svg>
                                    </span>
                                    <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                             fill="#FFB016" />
                                       </svg>
                                    </span>
                                    <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                             fill="#FFB016" />
                                       </svg>
                                    </span>
                                 </div>
                              </div>
                              <p>Lorem Ipsum available, but the majority have <br/> suffered alteration in some form by
                                 injected humour<br/> or randomised words which don't look even slightly <br/>believable
                                 if you are going.</p>
                              <h4 class="rr-testimonial-title">Glean Philips</h4>
                              <span>Product Manager</span>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="rr-testimonial-item d-flex align-items-start">
                           <div class="rr-testimonial-thumb mr-20">
                              <img src="assets/img/testimonial/avada.png" alt="">
                           </div>
                           <div class="rr-testimonial-content">
                              <div class="rr-testimonial-star">
                                 <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                          fill="#FFB016" />
                                    </svg>
                                 </span>
                                 <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                          fill="#FFB016" />
                                    </svg>
                                 </span>
                                 <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                          fill="#FFB016" />
                                    </svg>
                                 </span>
                                 <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                          fill="#FFB016" />
                                    </svg>
                                 </span>
                                 <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                          fill="#FFB016" />
                                    </svg>
                                 </span>
                              </div>
                              <p>Lorem Ipsum available, but the majority have <br/> suffered alteration in some form by
                                 injected humour<br/> or randomised words which don't look even slightly <br/>believable
                                 if you are going.</p>
                              <h4 class="rr-testimonial-title">Facial Care</h4>
                              <span>Manager</span>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="rr-testimonial-item d-flex align-items-start">
                           <div class="rr-testimonial-thumb mr-20">
                              <img src="assets/img/testimonial/avada-1.png" alt="">
                           </div>
                           <div class="rr-testimonial-content">
                              <div class="rr-testimonial-star">
                                 <div class="rr-testimonial-star">
                                    <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                             fill="#FFB016" />
                                       </svg>
                                    </span>
                                    <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                             fill="#FFB016" />
                                       </svg>
                                    </span>
                                    <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                             fill="#FFB016" />
                                       </svg>
                                    </span>
                                    <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                             fill="#FFB016" />
                                       </svg>
                                    </span>
                                    <span><svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                             fill="#FFB016" />
                                       </svg>
                                    </span>
                                 </div>
                              </div>
                              <p>Lorem Ipsum available, but the majority have <br/> suffered alteration in some form by
                                 injected humour<br/> or randomised words which don't look even slightly <br/>believable
                                 if you are going.</p>
                              <h4 class="rr-testimonial-title">Glean Philips</h4>
                              <span>Product Manager</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="rr-testimonial-swiper-dot text-center"></div>
            <div class="rr-testimonial-arrow-box">
               <button class="testimonial-arrow-next">
                  <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M12 22L2 12L12 2" stroke="#001D08" stroke-opacity="0.3" stroke-width="3"
                        stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
               </button>
               <button class="testimonial-arrow-prev">
                  <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M2 22L12 12L2 2" stroke="#001D08" stroke-opacity="0.3" stroke-width="3"
                        stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
               </button>
            </div>
         </div>
      </section>
      <!-- testimonial area end -->
      <!-- blog area start -->
      <section class="rr-blog-area pt-110 pb-80  fix">
         <div class="container p-relative">
            <div class="row gx-30">
               <div class="col-lg-12">
                  <div class="rr-section-title-wrapper mb-40">
                     <span class="rr-section-subtitle wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".3s">Our
                        Blog</span>
                     <h3 class="rr-section-title wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">Read Our
                        Latest News & Blog</h3>
                  </div>
               </div>
            </div>
            <div class="rr-blog-arrow-box">
               <button class="postbox-arrow-next">
                  <i class="fa-sharp fa-solid fa-angle-left"></i>
               </button>
               <button class="postbox-arrow-prev">
                  <i class="fa-sharp fa-solid fa-angle-right"></i>
               </button>
            </div>
            <div class="swiper-container rr-blog-active">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="rr-blog-item-wrapper p-relative mb-40 wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".3s">
                        <div class="rr-blog-item-thumb fix">
                           <a href="blog-details.html"><img src="assets/img/blog/blog.jpg" alt=""></a>
                        </div>
                        <div class="rr-blog-item-content p-relative">
                           <div class="rr-blog-item-info d-flex">
                              <span><img src="assets/img/blog/user.svg" alt=""> <a href="#"> By admin</a></span>
                              <span><img src="assets/img/blog/comments.svg" alt=""><a href="#"> 2 Comments</a></span>
                           </div>
                           <h4 class="rr-blog-item-title"><a href="blog-details.html">Where You Can Find Best Services
                                 For
                                 Your Wedding</a></h4>
                           <div class="rr-blog-item-btn">
                              <a href="blog-details.html">Read More <span><i
                                       class="fa-regular fa-arrow-right"></i></span></a>
                           </div>
                           <div class="rr-blog-item-date">
                              <h4>22</h4>
                              <p>sep</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="rr-blog-item-wrapper p-relative mb-40 wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".5s">
                        <div class="rr-blog-item-thumb fix">
                           <a href="blog-details.html"><img src="assets/img/blog/blog-2.jpg" alt=""></a>

                        </div>
                        <div class="rr-blog-item-content p-relative">
                           <div class="rr-blog-item-info d-flex">
                              <span><img src="assets/img/blog/user.svg" alt=""> <a href="#"> By admin</a></span>
                              <span><img src="assets/img/blog/comments.svg" alt=""><a href="#"> 2 Comments</a></span>
                           </div>
                           <h4 class="rr-blog-item-title"><a href="blog-details.html">You Must Need a Great
                                 Photographer.</a></h4>
                           <div class="rr-blog-item-btn">
                              <a href="blog-details.html">Read More <span><i
                                       class="fa-regular fa-arrow-right"></i></span></a>
                           </div>
                           <div class="rr-blog-item-date">
                              <h4>22</h4>
                              <p>sep</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="rr-blog-item-wrapper p-relative mb-40 wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".7s">
                        <div class="rr-blog-item-thumb fix ">
                           <a href="blog-details.html"><img src="assets/img/blog/blog-3.jpg" alt=""></a>
                        </div>
                        <div class="rr-blog-item-content p-relative">
                           <div class="rr-blog-item-info d-flex">
                              <span><img src="assets/img/blog/user.svg" alt=""> <a href="#"> By admin</a></span>
                              <span><img src="assets/img/blog/comments.svg" alt=""><a href="#"> 2 Comments</a></span>
                           </div>
                           <h4 class="rr-blog-item-title"><a href="blog-details.html">Make sure your wedding gown is the
                                 best one.</a></h4>
                           <div class="rr-blog-item-btn">
                              <a href="blog-details.html">Read More <span><i
                                       class="fa-regular fa-arrow-right"></i></span></a>
                           </div>
                           <div class="rr-blog-item-date">
                              <h4>22</h4>
                              <p>sep</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- blog area end -->

      <!-- brand area end -->
      <section class="rr-brand-area pb-120 fix">
         <div class="container">
            <div class="row gx-30">
               <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                  <div class="rr-brand-content mt-45">
                     <h4 class="rr-brand-title wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">Our Trusted
                        Branding Partners</h4>
                  </div>
               </div>
               <div class="col-xl-8 col-lg-8 col-md-12 col-12 wow rrfadeUp" data-wow-duration=".9s"
                  data-wow-delay=".9s">
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


<!-- Mirrored from html.rrdevs.net/brulloft/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2024 07:12:10 GMT -->
</html>
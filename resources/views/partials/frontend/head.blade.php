<meta charset="utf-8">
   <title>Brulloft – Wedding planner HTML5 Template</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Place favicon.ico in the root directory -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.png') }}">

<!-- CSS here -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/custom-animation.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome-pro.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/swiper-bundle.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/spacing.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">

<!-- header top area start -->
<div class="rr-header-top d-none d-xl-block p-relative">
   <div class="container">
      <div class="rr-header-before">
         <div class="row align-items-center">
            <div class="col-xxl-7 col-xl-7 col-lg-7">
               <div class="rr-header-top-info text-end">
                  <ul class="d-flex align-items-center">
                     <li>
                        <b><span><i class="fa-regular fa-clock"></i></span> Monday - Friday, 8:00am- 5:00 pm</b>
                     </li>
                     <li class="ml-30">
                        <a href="tel:{{ $contactDetails->phone }}"><span><img src="assets/img/header/call.svg" alt=""></span>
                           {{ $contactDetails->phone }}</a>
                     </li>
                     <li class="ml-30">
                        <a href="{{ $contactDetails->google_map_location }}"><span><i
                                 class="fa-regular fa-location-dot"></i></span> {{ $contactDetails->address }}</a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-xxl-5 col-xl-5 col-lg-">
               <div class="rr-header-2-top-info d-flex align-items-center justify-content-end text-end">
                  <div class="rr-header-main-social d-flex align-items-center">
                     <div class="rr-header-social ml-20">
                        <a href="{{ $contactDetails->facebook }}">
                           <i class="fab fa-facebook-f"></i>
                       </a>
                       <a href="{{ $contactDetails->twitter }}">
                           <i class="fab fa-twitter"></i>
                       </a>
                       <a href="{{ $contactDetails->instagram }}">
                           <i class="fab fa-instagram"></i>
                       </a>
                       <a href="{{ $contactDetails->youtube }}">
                           <i class="fab fa-youtube"></i>
                       </a>
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div> 
<!-- header top area end -->

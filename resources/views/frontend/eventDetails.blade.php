<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.rrdevs.net/brulloft/services-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2024 07:12:10 GMT -->
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
                        <h3 class="breadcrumb__title">Event Details</h3>
                     </div>
                     <div class="breadcrumb__list">
                        <span><a href="{{ route('frontend.index') }}">Home</a></span>
                        <span class="dvdr"><i class="fa-regular fa-chevron-right"></i></span>
                        <span>Event Details</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->
      <!-- service details area start -->
      <section class="rr-service-details-area pt-120 pb-100">
         <div class="container">
             <div class="row gx-30">
                 <!-- Main Event Details (Left Column) -->
                 <div class="col-xl-8">
                     <div class="rr-service-details">
                         <!-- Event Content -->
                         <div class="rr-service-details-content mb-20">
                             <h4 class="rr-service-details-title">{{ $event->event }}</h4>
                             <p><strong>Venue:</strong> {{ $event->venue }}</p>
                             <p>
                                 <strong>Date:</strong>
                                 {{ \Carbon\Carbon::parse($event->event_date_from)->format('F j, Y') }}
                                 @if($event->event_date_to)
                                     - {{ \Carbon\Carbon::parse($event->event_date_to)->format('F j, Y') }}
                                 @else
                                     - Ongoing
                                 @endif
                             </p>
                             <p>{{ $event->description }}</p>
                         </div>
                     </div>
                 </div>
     
                 <!-- Right Column for Images and Sidebar -->
                 <div class="col-xl-4">
                     <div class="service-details-wrapper mb-40">
                         <!-- Event Cover Image -->
                         <div class="rr-service-details-thumb mb-30">
                             @if($event->cover_image_id)
                                 <img src="{{ asset('storage/' . $event->cover_image_id) }}" alt="{{ $event->event }}" class="img-fluid">
                             @endif
                         </div>
     
                         <!-- Additional Event Images -->
                         <div class="rr-service-details-img d-flex align-items-center mb-30">
                             @if(!empty($event->images) && count($event->images) > 0)
                                 @foreach($event->images as $image)
                                     <div class="rr-service-details-img-1 mr-15">
                                         <img src="{{ asset('storage/' . $image->image_path) }}" alt="Additional Image" class="img-fluid">
                                     </div>
                                 @endforeach
                             @else
                                 <p>No additional images available.</p>
                             @endif
                         </div>
     
                         <!-- Sidebar with Top Events -->
                         <div class="service-details-service mb-30">
                           <div class="service-details-wrap">
                               <ul>
                                   <li class="active">
                                       <a href="{{ route('frontend.eventDetails', $event->id) }}">Event Details <i class="fa-solid fa-chevron-right"></i></a>
                                   </li>
                                   @if(is_iterable($topEvents) && count($topEvents) > 0)
                                       @foreach($topEvents as $topEvent)
                                           <li>
                                               <a href="{{ route('frontend.eventDetails', $topEvent->id) }}">{{ $topEvent->event }} <i class="fa-solid fa-chevron-right"></i></a>
                                           </li>
                                       @endforeach
                                   @else
                                       <li>No top events available.</li>
                                   @endif
                               </ul>
                           </div>
                       </div>
                         <!-- Top Events List -->
                        <div class="service-details-info">
                           <h3 class="service-details-title">Top Events</h3>
                           <ul>
                              @if(is_iterable($topEvents) && count($topEvents) > 0)
                                 @foreach($topEvents as $topEvent)
                                       <li><a href="{{ route('frontend.eventDetails', $topEvent->id) }}">{{ $topEvent->event }}</a></li>
                                 @endforeach
                              @else
                                 <li>No top events available.</li>
                              @endif
                           </ul>
                        </div>

                     </div>
                 </div>
             </div>
         </div>
     </section>
     
     
      <!-- service details area end -->

   </main>


   <footer>
    @include('partials.frontend.footer')
   </footer>



   @include('partials.frontend.script')

</body>


<!-- Mirrored from html.rrdevs.net/brulloft/services-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2024 07:12:11 GMT -->
</html>
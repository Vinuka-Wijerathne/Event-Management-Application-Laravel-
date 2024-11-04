/***************************************************
==================== JS INDEX ======================
****************************************************
01. PreLoader Js
02. Mobile Menu Js
03. Common Js
04. Menu Controls JS
05. Offcanvas Js
06. Search Js
07. cartmini Js
08. filter
09. Body overlay Js
10. Sticky Header Js
11. Theme Settings Js
12. Nice Select Js
13. Smooth Scroll Js
14. Slider Activation Area Start
15. Masonary Js
16. Wow Js
17. Counter Js
18. InHover Active Js
19. Line Animation Js
20. Video Play Js
21. Password Toggle Js
****************************************************/

(function ($) {
	"use strict";

	var windowOn = $(window);
	////////////////////////////////////////////////////
	// 01. PreLoader Js
	windowOn.on('load', function () {
		$("#loading").fadeOut(500);
	});


	// 08. Nice Select Js
	$('select').niceSelect();


	///////////////////////////////////////////////////
	// 07. Sticky Header Js
	windowOn.on('scroll', function () {
		var scroll = windowOn.scrollTop();
		if (scroll < 400) {
			$("#header-sticky").removeClass("header-sticky");
		} else {
			$("#header-sticky").addClass("header-sticky");
		}
	});


	////////////////////////////////////////////////////
	// 09. Sidebar Js
	$(".rr-menu-bar").on("click", function () {
		$(".rroffcanvas").addClass("opened");
		$(".body-overlay").addClass("apply");
	});
	$(".close-btn").on("click", function () {
		$(".rroffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
	});
	$(".body-overlay").on("click", function () {
		$(".rroffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
	});

	////////////////////////////////////////////////////
	// 03. Search Js
	$(".search-open-btn").on("click", function () {
		$(".search__popup").addClass("search-opened");
	});

	$(".search-close-btn").on("click", function () {
		$(".search__popup").removeClass("search-opened");
	});

	$('.col-custom').on("click", function () {
		$('#features-item-thumb').removeClass().addClass($(this).attr('rel'));
		$(this).addClass('active').siblings().removeClass('active');
	});

	// $('.rr-hero-2__feature-box .rr-hero-2__feature-item').on('hover', function () {
	// 	$(this).addClass('active').siblings().find('.rr-hero-2__feature-item').removeClass('active');
	// });

	$('.rr-hero-2__feature-item').on('mouseenter', function () {
		$(this).addClass('active').parent().siblings().find('.rr-hero-2__feature-item').removeClass('active');
	});

	$('.rr-custom-accordion .accordion-items').on("click", function () {
		$(this).addClass('rr-faq-active').siblings().removeClass('rr-faq-active');
	});


	// for header
	if ($("#rr-header-top__value-toogle").length > 0) {
		window.addEventListener('click', function (e) {

			if (document.getElementById('rr-header-top__value-toogle').contains(e.target)) {
				$(".rr-header-top__value-submenu").toggleClass("open");
			}
			else {
				$(".rr-header-top__value-submenu").removeClass("open");
			}
		});
	}


	// for header
	if ($("#rr-header-top__lang-toogle").length > 0) {
		window.addEventListener('click', function (e) {

			if (document.getElementById('rr-header-top__lang-toogle').contains(e.target)) {
				$(".rr-header-top__lang-submenu").toggleClass("open");
			}
			else {
				$(".rr-header-top__lang-submenu").removeClass("open");
			}
		});
	}


	///////////////////////////////////////////////////
	// 02. SubMenu Dropdown Toggle
	var header_icon =
		`<span class="header-icon">
		<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="htrr://www.w3.org/2000/svg">
		<path d="M6.04088 0L0.535156 4.125V11H4.26484V8.59381C4.26484 7.64165 5.05698 6.87506 6.04088 6.87506C7.02477 6.87506 7.81692 7.64165 7.81692 8.59381V11H11.5466V4.125L6.04088 0Z" fill="#FFB302"/></svg>                                
	</span>`;
	$(header_icon).insertBefore('.menu-icon nav ul .menu-icon-2');


	////////////////////////////////////////////////////
	// 03. Common JsmySwiper 
	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});

	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"));
	});

	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"));
	});

	$("[data-text-color]").each(function () {
		$(this).css("color", $(this).attr("data-text-color"));
	});

	$(".has-img").each(function () {
		var imgSrc = $(this).attr("data-menu-img");
		var img = `<img class="mega-menu-img" src="${imgSrc}" alt="img">`;
		$(this).append(img);

	});

	////////////////////////////////////////////////////
	// 12. Nice Select Js
	$('.rr-header-search-category select').niceSelect();

	////////////////////////////////////////////////////
	// 13. Smooth Scroll Js
	function smoothSctoll() {
		$('.smooth a').on('click', function (event) {
			var target = $(this.getAttribute('href'));
			if (target.length) {
				event.preventDefault();
				$('html, body').stop().animate({
					scrollTop: target.offset().top - 120
				}, 1500);
			}
		});
	}
	smoothSctoll();

	function back_to_top() {
		var btn = $('#back_to_top');
		var btn_wrapper = $('.back-to-top-wrapper');

		windowOn.scroll(function () {
			if (windowOn.scrollTop() > 300) {
				btn_wrapper.addClass('back-to-top-btn-show');
			} else {
				btn_wrapper.removeClass('back-to-top-btn-show');
			}
		});

		btn.on('click', function (e) {
			e.preventDefault();
			$('html, body').animate({ scrollTop: 0 }, '300');
		});
	}
	back_to_top();

	////////////////////////////////////////////////////
	// 04. Click To Down
	function scrollNav() {
		$('.rr-banner-scroll-mouse a').click(function () {
			$(".rr-banner-scroll-mouse a.active").removeClass("active");
			$(this).addClass("active");

			$('html, body').stop().animate({
				scrollTop: $($(this).attr('href')).offset().top - 0
			}, 300);
			return false;
		});
	}
	scrollNav();



	// 13. Swiper Js
	var rrteatimonialswiper = new Swiper(".rr-testimonial-active", {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
		autoplay: {
		delay: 3000,
		},
		breakpoints: {
			'1600': {
				slidesPerView: 2,
			},
			'1400': {
				slidesPerView: 2,
			},
			'1200': {
				slidesPerView: 2,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},

			a11y: false,
		},
		pagination: {
			el: ".rr-testimonial-swiper-dot",
			clickable: true,
		},
		navigation: {
			nextEl: '.testimonial-arrow-next',
			prevEl: '.testimonial-arrow-prev',
		},
	});


	const sliderswiper = new Swiper(".main-slider-active", { 
		slidesPerView: 1, 
		autoplay: {
			delay: 3000,
		},
		loop: true,

		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		// Connect with Navigation Swiper
	});

	// 13. Swiper Js
	const productswiper = new Swiper('.rr-blog-active', {
		// Optional parameters
		speed: 1000,
		loop: true,
		slidesPerView: 3,
		// autoplay: true,
		spaceBetween: 30,
		breakpoints: {
			'1600': {
				slidesPerView: 3,
			},
			'1400': {
				slidesPerView: 3,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
			a11y: false,
		},
		navigation: {
			nextEl: '.postbox-arrow-next',
			prevEl: '.postbox-arrow-prev',
		},
	});

// Project Carousel
var swiperProject = new Swiper(".rr-services-2-active", {
	slidesPerView: 4,
	spaceBetween: 25,
	slidesPerGroup: 1,
	loop: true,
	autoplay: true,
	grabCursor: true,
	speed: 600,
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	navigation: {
		nextEl: ".postbox-arrow-next",
		prevEl: ".postbox-arrow-prev",
	},
	breakpoints: {
		320: {
			slidesPerView: 1,
			slidesPerGroup: 1,
			spaceBetween: 25,
		},
		767: {
			slidesPerView: 2,
			slidesPerGroup: 1,
			spaceBetween: 30,
		},
		1024: {
			slidesPerView: 4,
			slidesPerGroup: 1,
		},
	},
});
	////////////////////////////////////////////////////
	// 13. Swiper Js
	const postboxswiper = new Swiper('.postbox__thumb-slider-active', {
		// Optional parameters
		speed: 1000,
		loop: true,
		slidesPerView: 1,
		autoplay: true,
		spaceBetween: 0,
		centeredSlides: true,
		breakpoints: {
			'1600': {
				slidesPerView: 1,
			},
			'1400': {
				slidesPerView: 1,
			},
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},

			a11y: false,
		},
		// Navigation arrows
		navigation: {
			nextEl: '.postbox-arrow-next',
			prevEl: '.postbox-arrow-prev',
		},
	});
	// 13. Swiper Js
	const galleryswiper = new Swiper('.rr-gallery-active', {
		// Optional parameters
		speed: 1000,
		loop: true,
		slidesPerView: 1,
		autoplay: true,
		spaceBetween: 0,
		breakpoints: {
			'1600': {
				slidesPerView: 1,
			},
			'1400': {
				slidesPerView: 1,
			},
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},

			a11y: false,
		},
		pagination: {
			el: ".gallery-slider-dots",
			clickable: true,
		},


	});


	// 13. Swiper Js
	const instagramswiper = new Swiper('.rr-instagram-active', {
		// Optional parameters
		speed: 1000,
		loop: true,
		slidesPerView: 4,
		autoplay: true,
		breakpoints: {
			'1600': {
				slidesPerView: 4,
			},
			'1400': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},

			a11y: false,
		},

	});

	// 13. Swiper Js
	const projectswiper = new Swiper('.rr-project-active', {
		// Optional parameters
		speed: 1000,
		loop: true,
		slidesPerView: 5,
		autoplay: true,
		spaceBetween: 30,
		breakpoints: {
			'1600': {
				slidesPerView: 5,
			},
			'1400': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},

			a11y: false,
		},

	});

	// 13. Swiper Js
	const brandswiper = new Swiper('.rr-brand-active', {
		// Optional parameters
		speed: 1000,
		loop: true,
		slidesPerView: 4,
		autoplay: true,
		spaceBetween: 30,
		breakpoints: {
			'1600': {
				slidesPerView: 4,
			},
			'1400': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 3,
			},
			'0': {
				slidesPerView: 1,
			},

			a11y: false,
		},

	});



	//testimonia-item-active
	$('.rr-testimonial-item-active').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: false,
		dots: true,
		centerMode: false,
		centerPadding: '30px',
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					dots: true,
					centerPadding: '30px',
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					centerPadding: '10px',
				}
			},
			{
				breakpoint: 320,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					centerPadding: '60px',
				}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
	});

	////////////////////////////////////////////////////
	// 21. Counter Js
	new PureCounter();


	// Jquery Appear raidal
	if (typeof ($.fn.knob) != 'undefined') {
		$('.knob').each(function () {
			var $this = $(this),
				knobVal = $this.attr('data-rel');

			$this.knob({
				'draw': function () {
					$(this.i).val(this.cv + '%')
				}
			});

			$this.appear(function () {
				$({
					value: 0
				}).animate({
					value: knobVal
				}, {
					duration: 2000,
					easing: 'swing',
					step: function () {
						$this.val(Math.ceil(this.value)).trigger('change');
					}
				});
			}, {
				accX: 0,
				accY: -150
			});
		});
	}
	////////////////////////////////////////////////////
	// 15. Masonary Js
	// $('.grid').imagesLoaded(function () {
	// 	// init Isotope
	// 	var $grid = $('.grid').isotope({
	// 		itemSelector: '.grid-item',
	// 		percenrrosition: true,
	// 		masonry: {
	// 			// use outer width of grid-sizer for columnWidth
	// 			columnWidth: '.grid-item',
	// 		}
	// 	});


	// 	// filter items on button click
	// 	$('.masonary-menu').on('click', 'button', function () {
	// 		var filterValue = $(this).attr('data-filter');
	// 		$grid.isotope({ filter: filterValue });
	// 	});

	// 	//for menu active class
	// 	$('.masonary-menu button').on('click', function (event) {
	// 		$(this).siblings('.active').removeClass('active');
	// 		$(this).addClass('active');
	// 		event.preventDefault();
	// 	});

	// });

	/* magnificPopup img view */
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	/* magnificPopup video view */
	$(".popup-video").magnificPopup({
		type: "iframe",
	});


	if ($('.scene').length > 0) {
		$('.scene').parallax({
			scalarX: 5.0,
			scalarY: 5.0,
		});
	};

	////////////////////////////////////////////////////
	// 16. Wow Js
	new WOW().init();
	////////////////////////////////////////////////////
	// 17. Counter Js
	new PureCounter();
	new PureCounter({
		filesizing: true,
		selector: ".filesizecount",
		pulse: 2,
	});

	////////////////////////////////////////////////////
	// 18. InHover Active Js
	$('.hover__active').on('mouseenter', function () {
		$(this).addClass('active').parent().siblings().find('.hover__active').removeClass('active');
	});

	$('.activebsba').on("click", function () {
		$('#services-item-thumb').removeClass().addClass($(this).attr('rel'));
		$(this).addClass('active').siblings().removeClass('active');
	});



	////////////////////////////////////////////////////
	// 19. Line Animation Js
	if ($('#marker').length > 0) {
		function rr_tab_line() {
			var marker = document.querySelector('#marker');
			var item = document.querySelectorAll('.menu-style-3  > nav > ul > li');
			var itemActive = document.querySelector('.menu-style-3  > nav > ul > li.active');

			function indicator(e) {
				marker.style.left = e.offsetLeft + "px";
				marker.style.width = e.offsetWidth + "px";
			}


			item.forEach(link => {
				link.addEventListener('mouseenter', (e) => {
					indicator(e.target);
				});

			});


			var activeNav = $('.menu-style-3 > nav > ul > li.active');
			var activewidth = $(activeNav).width();
			var activePadLeft = parseFloat($(activeNav).css('padding-left'));
			var activePadRight = parseFloat($(activeNav).css('padding-right'));
			var totalWidth = activewidth + activePadLeft + activePadRight;

			var precedingAnchorWidth = anchorWidthCounter();


			$(marker).css('display', 'block');

			$(marker).css('width', totalWidth);

			function anchorWidthCounter() {
				var anchorWidths = 0;
				var a;
				var aWidth;
				var aPadLeft;
				var aPadRight;
				var aTotalWidth;
				$('.menu-style-3 > nav > ul > li').each(function (index, elem) {
					var activeTest = $(elem).hasClass('active');
					marker.style.left = elem.offsetLeft + "px";
					if (activeTest) {
						// Break out of the each function.
						return false;
					}

					a = $(elem).find('li');
					aWidth = a.width();
					aPadLeft = parseFloat(a.css('padding-left'));
					aPadRight = parseFloat(a.css('padding-right'));
					aTotalWidth = aWidth + aPadLeft + aPadRight;

					anchorWidths = anchorWidths + aTotalWidth;

				});

				return anchorWidths;
			}
		}
		rr_tab_line();
	}


	if ($('#productTabMarker').length > 0) {
		function rr_tab_line_2() {
			var marker = document.querySelector('#productTabMarker');
			var item = document.querySelectorAll('.rr-product-tab button');
			var itemActive = document.querySelector('.rr-product-tab .nav-link.active');

			// rtl settings
			var rr_rtl = localStorage.getItem('rr_dir');
			let rtl_setting = rr_rtl == 'rtl' ? 'right' : 'left';

			function indicator(e) {
				marker.style.left = e.offsetLeft + "px";
				marker.style.width = e.offsetWidth + "px";
			}


			item.forEach(link => {
				link.addEventListener('click', (e) => {
					indicator(e.target);
				});
			});

			var activeNav = $('.nav-link.active');
			var activewidth = $(activeNav).width();
			var activePadLeft = parseFloat($(activeNav).css('padding-left'));
			var activePadRight = parseFloat($(activeNav).css('padding-right'));
			var totalWidth = activewidth + activePadLeft + activePadRight;

			var precedingAnchorWidth = anchorWidthCounter();


			$(marker).css('display', 'block');

			$(marker).css('width', totalWidth);

			function anchorWidthCounter() {
				var anchorWidths = 0;
				var a;
				var aWidth;
				var aPadLeft;
				var aPadRight;
				var aTotalWidth;
				$('.rr-product-tab button').each(function (index, elem) {
					var activeTest = $(elem).hasClass('active');
					marker.style.left = elem.offsetLeft + "px";
					if (activeTest) {
						// Break out of the each function.
						return false;
					}

					a = $(elem).find('button');
					aWidth = a.width();
					aPadLeft = parseFloat(a.css('padding-left'));
					aPadRight = parseFloat(a.css('padding-right'));
					aTotalWidth = aWidth + aPadLeft + aPadRight;

					anchorWidths = anchorWidths + aTotalWidth;

				});

				return anchorWidths;
			}
		}
		rr_tab_line_2();
	}

	////////////////////////////////////////////////////
	// 20. Video Play Js
	var play = false;
	$('.rr-video-toggle-btn').on('click', function () {

		if (play === false) {
			$('.rr-slider-video').addClass('full-width');
			$(this).addClass('hide');
			play = true;

			$('.rr-slider-video').find('video').each(function () {
				$(this).get(0).play();
			});
		} else {
			$('.rr-slider-video').removeClass('full-width');
			$(this).removeClass('hide');
			play = false;
			$('.rr-slider-video').find('video').each(function () {
				$(this).get(0).pause();
			});
		}

	});

	////////////////////////////////////////////////////
	// 21. Password Toggle Js
	if ($('#password-show-toggle').length > 0) {
		var btn = document.getElementById('password-show-toggle');

		btn.addEventListener('click', function (e) {

			var inputType = document.getElementById('rr_password');
			var openEye = document.getElementById('open-eye');
			var closeEye = document.getElementById('close-eye');

			if (inputType.type === "password") {
				inputType.type = "text";
				openEye.style.display = 'block';
				closeEye.style.display = 'none';
			} else {
				inputType.type = "password";
				openEye.style.display = 'none';
				closeEye.style.display = 'block';
			}
		});
	}

	if ($('.rr-header-height').length > 0) {
		var headerHeight = document.querySelector(".rr-header-height");
		var setHeaderHeight = headerHeight.offsetHeight;

		$(".rr-header-height").each(function () {
			$(this).css({
				'height': setHeaderHeight + 'px'
			});
		});
	}
	// Jquery Appear raidal
	if (typeof ($.fn.knob) != 'undefined') {
		$('.knob').each(function () {
			var $this = $(this),
				knobVal = $this.attr('data-rel');

			$this.knob({
				'draw': function () {
					$(this.i).val(this.cv + '%')
				}
			});

			$this.appear(function () {
				$({
					value: 0
				}).animate({
					value: knobVal
				}, {
					duration: 2000,
					easing: 'swing',
					step: function () {
						$this.val(Math.ceil(this.value)).trigger('change');
					}
				});
			}, {
				accX: 0,
				accY: -150,
			});
		});
	}

	if ($('.rr-main-menu-content').length && $('.rr-main-menu-mobile').length) {
		let navContent = document.querySelector(".rr-main-menu-content").outerHTML;
		let mobileNavContainer = document.querySelector(".rr-main-menu-mobile");
		mobileNavContainer.innerHTML = navContent;


		let arrow = $(".rr-main-menu-mobile .has-dropdown > a");

		arrow.each(function () {
			let self = $(this);
			let arrowBtn = document.createElement("BUTTON");
			arrowBtn.classList.add("dropdown-toggle-btn");
			arrowBtn.innerHTML = "<i class='fal fa-angle-right'></i>";

			self.append(function () {
				return arrowBtn;
			});

			self.find("button").on("click", function (e) {
				e.preventDefault();
				let self = $(this);
				self.toggleClass("dropdown-opened");
				self.parent().toggleClass("expanded");
				self.parent().parent().addClass("dropdown-opened").siblings().removeClass("dropdown-opened");
				self.parent().parent().children(".rr-submenu").slideToggle();
			});

		});
	}


	$('.rr-feature-item').on('mouseenter', function () {
		$(this).addClass('active').parent().siblings().find('.rr-feature-item').removeClass('active');
	});

	// jarallax
	if ($('.jarallax').length > 0) {
		$('.jarallax').jarallax({
			speed: 0.2,
			imgWidth: 1366,
			imgHeight: 768,
		});

	};

	///////////////////////////////////////////////////
	// 07. Sticky Header Js
	windowOn.on('scroll', function () {
		var scroll = windowOn.scrollTop();
		if (scroll < 400) {
			$("#header-sticky").removeClass("header-sticky");
		} else {
			$("#header-sticky").addClass("header-sticky");
		}
	});

	if ($('.rr-header-height').length > 0) {
		var headerHeight = document.querySelector(".rr-header-height");
		var setHeaderHeight = headerHeight.offsetHeight;

		$(".rr-header-height").each(function () {
			$(this).css({
				'height': setHeaderHeight + 'px'
			});
		});
	}

	$('.rr-cart-minus').on('click', function () {
		var $input = $(this).parent().find('input');
		var count = Number($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});

	$('.rr-cart-plus').on('click', function () {
		var $input = $(this).parent().find('input');
		$input.val(Number($input.val()) + 1);
		$input.change();
		return false;
	});

	$('.rr-shop-minus').on('click', function () {
		var $input = $(this).parent().find('input');
		var count = Number($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});

	$('.rr-shop-plus').on('click', function () {
		var $input = $(this).parent().find('input');
		$input.val(Number($input.val()) + 1);
		$input.change();
		return false;
	});
	///////////////////////////////////////////////////
	// 07. Sticky Header Js
	windowOn.on('scroll', function () {
		var scroll = windowOn.scrollTop();
		if (scroll < 400) {
			$("#header-sticky").removeClass("header-sticky");
		} else {
			$("#header-sticky").addClass("header-sticky");
		}
	});

	if ($('.rr-header-height').length > 0) {
		var headerHeight = document.querySelector(".rr-header-height");
		var setHeaderHeight = headerHeight.offsetHeight;

		$(".rr-header-height").each(function () {
			$(this).css({
				'height': setHeaderHeight + 'px'
			});
		});
	}
	$('#contact-us__form').submit(function (event) {
		event.preventDefault();
		var form = $(this);
		$('.loading-form').show();

		setTimeout(function () {
			$.ajax({
				type: form.attr('method'),
				url: form.attr('action'),
				data: form.serialize()
			}).done(function (data) {
				$('.loading-form').hide();
				$('#contact-us__form').append('<p class="success-message mt-3 mb-0">Your message has been sent successfully.</p>');
			}).fail(function (data) {
				$('.loading-form').hide();
				$('#contact-us__form').append('<p class="error-message mt-3 mb-0">Something went wrong. Please try again later.</p>');

			});
		}, 1000);
	});
})(jQuery);

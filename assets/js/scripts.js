
$(document).ready(function() {

	"use strict";

	FirstLoad();
	HeroSection();
	AjaxLoad();
	HideShowHeader();
	MasonryPortfolio();
	//VirtualScr();
	PageProgress();
	FooterAppear();
	Sliders();
	Lightbox();
	AppearIteam();
	BackToTop();
	ContactForm();
	FilterCounts();

}); // END doc.ready



$(window).on( 'resize', function () {

});

$(window).on("load", function() {
	LazyLoad();
});


/*--------------------------------------------------
Function Firs tLoad
---------------------------------------------------*/

	function FirstLoad() {

		$("html,body").animate({scrollTop: 0}, 1);

		$('.item-image').each(function() {
			var image = $(this).data('src');

			$(this).css({
				'background-image': 'url(' + image + ')'
			});
		});

		$('#menu-burger, #nav-container, #black-fade').on('click', function() {
			$('#menu-burger').toggleClass('open');
		});

		$('.project-next').on('click', function() {
			$('#main').addClass('hidden');
			$('header').addClass('menu-open');
		});

		$('a.ajax-link').on('click', function() {
			$(".page-overlay").addClass("from-bottom");
			$('#main').addClass('hidden');

		});

		$('.nav-title').on('mouseenter', function() {
			$(".nav-project-title").addClass('hover');
		}).on('mouseleave', function() {
			$(".nav-project-title").removeClass('hover');
		});

		$('#open-filters, .close-page-action, #open-search').on('click', function() {
			$('.page-action-overlay').toggleClass('active');
		});

		$("header, #main, #main-content, footer, #image-border-left, #image-border-right").css('background', function () {
			return $("#page-content").data('bgcolor')
		});

		$(".flexnav li a.active, .flexnav li a, h1, h2, h3, h4, h5, h6, .hero-title, .socials-text li a, #open-filters, #open-share, #backtoworks, [data-tooltip], .light-content a.link, .post-title, .blog-numbers").css('color', function () {
			return $("#page-content").data('textcolor')
		});

		$(".item-cat, .item-case, #filters li span").css('color', function () {
			return $("#page-content").data('portfoliocolor')
		});

		$(".arrow-top").css('border-color', function () {
			return $("#page-content").data('textcolor')
		});

		$(".arrow-top-line").css('background-color', function () {
			return $("#page-content").data('textcolor')
		});

		if( jQuery('.tooltip-hover').length > 0 ){

			var tooltips = document.querySelectorAll('.item-overlay');

			window.onmousemove = function (e) {
				var x = (e.clientX + 20) + 'px',
					y = (e.clientY + 20) + 'px';
				for (var i = 0; i < tooltips.length; i++) {
					tooltips[i].style.top = y;
					tooltips[i].style.left = x;
				}
			};

		}


	}// End First Load

/*--------------------------------------------------
Function Hero Section
---------------------------------------------------*/

	function HeroSection() {


		var HeroCaption = document.getElementById('hero-caption');
		var windowScrolled;


		window.addEventListener('scroll', function windowScroll() {
			windowScrolled = window.pageYOffset || document.documentElement.scrollTop;
			if ($('#hero-styles').hasClass("scale-onscroll")) {
				HeroCaption.style.transform = 'scale('+(100 - windowScrolled/100)/100+')';
			}
			if ($('#hero-styles').hasClass("parallax-onscroll")) {
				HeroCaption.style.transform = 'translate3d(0, ' + windowScrolled / -2.5 + 'px, 0)';
			}
			if ($('#hero-styles').hasClass("opacity-onscroll")) {
				HeroCaption.style.opacity =  (1 - (windowScrolled/20) / 20);
			}

			if( $('#hero-image').length > 0 ){
				var HeroImageborderleft = document.getElementById('image-border-left');
				var HeroImageborderright = document.getElementById('image-border-right');
				HeroImageborderleft.style.transform = 'translate3d(' + windowScrolled / - 3 + 'px, 0, 0)';
				HeroImageborderright.style.transform = 'translate3d(' + windowScrolled / + 3 + 'px, 0, 0)';
						if($(this).scrollTop() >= $('#hero-image').offset().top) {
						$("#hero-image").addClass("bgrelative");
					} else {
						$("#hero-image").removeClass("bgrelative");
					}
			}
		});
		if ($('#hero-styles').hasClass("normal-onscroll")) {
			$('#hero').addClass('normal');
			$('#hero-height').addClass('hidden');
		}

		$('.hero-title').each(function(){
			var words = $(this).text().split(" ");
			var total = words.length;
			$(this).empty();
			for (index = 0; index < total; index ++){
				$(this).append($("<span /> ").text(words[index]));
			}
		})

		$('.hero-subtitle').each(function(){
			var words = $(this).text().split(" ");
			var total = words.length;
			$(this).empty();
			for (index = 0; index < total; index ++){
				$(this).append($("<span /> ").text(words[index]));
			}
		})

	}//End Hero Section



/*--------------------------------------------------
Function Lazy Load
---------------------------------------------------*/

	function LazyLoad() {

		setTimeout(function(){
			$('body').removeClass('hidden');
		} , 100 );

		if( $('#portfolio').length > 0 ){

			$('body').waitForImages({
				finished: function() {
					HeroColor();
					setTimeout( function(){
						$(".page-overlay").addClass("from-bottom-end");
						setTimeout( function(){
							$(".page-overlay").removeClass("from-bottom");
							$(".page-overlay").removeClass("from-bottom-end");
						} , 800 );
					} , 100 );
				},
				waitForAll: true
			});

		} else if( $('#hero-image').length > 0 ){

			$('#hero-image').waitForImages({
				finished: function() {
					HeroColor();
					setTimeout( function(){
						$(".page-overlay").addClass("from-bottom-end");
						setTimeout( function(){
							$(".page-overlay").removeClass("from-bottom");
							$(".page-overlay").removeClass("from-bottom-end");
						} , 800 );
					} , 100 );
				},
				waitForAll: true
			});

		} else {

			setTimeout( function(){
				HeroColor();
				$(".page-overlay").addClass("from-bottom-end");
				setTimeout( function(){
					$(".page-overlay").removeClass("from-bottom");
					$(".page-overlay").removeClass("from-bottom-end");
				} , 800 );
			} , 100 );
		}

	}// End Lazy Load



/*--------------------------------------------------
Function Ajax Load
---------------------------------------------------*/

	function AjaxLoad() {

		jQuery(document).ready(function(){
		  var isAnimating = false,
			newLocation = '';
			firstLoad = false;

		  //trigger smooth transition from the actual page to the new one
		  $('main').on('click', '[data-type="page-transition"]', function(event){
			event.preventDefault();
			//detect which page has been selected
			var newPage = $(this).attr('href');
			//if the page is not already being animated - trigger animation
			if( !isAnimating ) changePage(newPage, true);
			firstLoad = true;
		  });

		  //detect the 'popstate' event - e.g. user clicking the back button
		  $(window).on('popstate', function() {
			if( firstLoad ) {
			  /*
			  Safari emits a popstate event on page load - check if firstLoad is true before animating
			  if it's false - the page has just been loaded
			  */
			  var newPageArray = location.pathname.split('/'),
				//this is the url of the page to be loaded
				newPage = newPageArray[newPageArray.length - 1];

			  if( !isAnimating  &&  newLocation != newPage ) changePage(newPage, false);
			}
			firstLoad = true;
			});

			function changePage(url, bool) {
			isAnimating = true;
			// trigger page animation
			$('body').addClass('page-is-changing');
			$('.cd-cover-layer').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				loadNewContent(url, bool);
			  newLocation = url;
			  $('.cd-cover-layer').off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
			});
			//if browser doesn't support CSS transitions
			if( !transitionsSupported() ) {
			  loadNewContent(url, bool);
			  newLocation = url;
			}
			}

			function loadNewContent(url, bool) {
				url = ('' == url) ? 'index.php' : url;

			var section = $('<div class="cd-main-content "></div>');


			section.load(url+' .cd-main-content > *', function(event){
			  // load new content and replace <main> content with the new one

			  $('main').html(section);

				$('header').addClass('initial');
				$('html, body').scrollTop(0);

			  //if browser doesn't support CSS transitions - dont wait for the end of transitions
			  var delay = ( transitionsSupported() ) ? 30 : 0;
			  setTimeout(function(){
				//wait for the end of the transition on the loading bar before revealing the new content
				$('body').removeClass('page-is-changing');
				$('.cd-cover-layer').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				  isAnimating = false;
				  $('.cd-cover-layer').off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
				});

				FirstLoad();
				HeroSection();
				LazyLoad();
				MasonryPortfolio();
				HideShowHeader();
				PageProgress();
				FooterAppear();
				Sliders();
				Lightbox();
				AppearIteam();
				BackToTop();
				ContactForm();



				if( !transitionsSupported() ) isAnimating = false;
			  }, delay);
			  if(url!=window.location && bool){
				window.history.pushState({path: url},'',url);
			  }
				});
		  }

		  function transitionsSupported() {
			return $('html').hasClass('csstransitions');
		  }
		});


	}// End Ajax Load


/*--------------------------------------------------
Function Hide Show Header
---------------------------------------------------*/

	function HideShowHeader() {

			var didScroll;
			var lastScrollTop = 0;
			var delta = 50;
			var navbarHeight = 250;
			var navbarHideAfter = navbarHeight

			$(window).scroll(function(event){
				didScroll = true;
			});

			if( $('.scroll-hide').length > 0 ){

				setInterval(function() {
					if (didScroll) {
						hasScrolled();
						didScroll = false;
					}
				}, 100);

			}

			return false;

			function hasScrolled() {
				var st = $(this).scrollTop();

				if(Math.abs(lastScrollTop - st) <= delta)
					return;

				if (st > lastScrollTop && st > navbarHideAfter){
					if( $('.scroll-hide').length > 0 ){
					$('header').addClass('nav-hide');
					}
				} else {
					if( $('.scroll-hide').length > 0 ){
					if(st + $(window).height() < $(document).height()) {
						$('header').removeClass('nav-hide');
					}
					}
				}

				lastScrollTop = st;
			}


	}//End Hide Show Header




/*--------------------------------------------------
Function Header Color
---------------------------------------------------*/


	function HeroColor() {
		$('#hero').waitForImages({
			finished: function() {
		if( $('#hero-height').length > 0 ){


			if ($('#hero-bg-image').hasClass("light-content")) {
				$('#hero-styles').addClass('light-content').addClass('animate');
				setTimeout(function(){
					$('header').addClass('light-content');
				} , 650 );
			}
			setTimeout(function(){
				$('#hero-caption').addClass('animate');
				$('#hero-height').removeClass('hidden');
			} , 250 );

		}
		},
			waitForAll: true
		});



	}// End Header Color




/*--------------------------------------------------
Function Masonry Portfolio
---------------------------------------------------*/

	function MasonryPortfolio() {

		if( $('#portfolio-wrap').length > 0 ){


			var $container = $('#portfolio');

			$container.isotope({
				layoutMode: 'packery',
			  itemSelector: '.item',
			  gutter:0,
			  transitionDuration: "0.5s"
			});

			$('#filters a').on('click', function() {
				$('#filters a').removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				$container.isotope({ filter: selector });
				return false;
			});

			$(window).on( 'resize', function () {

				var winWidth = window.innerWidth;
				columnNumb = 1;
				var attr_col = $('#portfolio').attr('data-col');

				 if (winWidth >= 1466) {


					$('#portfolio-wrap').css( {width : $('#portfolio-wrap').parent().width() - 150 + 'px'});
					$('#portfolio-wrap.no-gutter').css( {width : $('#portfolio-wrap').parent().width() - 240 + 'px'});
					var portfolioWidth = $('#portfolio-wrap').width();

					if (typeof attr_col !== typeof undefined && attr_col !== false) {
						columnNumb = $('#portfolio').attr('data-col');
					} else columnNumb = 3;

					postHeight = window.innerHeight
					postWidth = Math.floor(portfolioWidth / columnNumb)
					$container.find('.item').each(function () {



						if ( $('#portfolio').attr('data-col') == '3' ) {
							if( $('.squares-items').length > 0 ){
								$('.item').css( {
									width : postWidth * 1.5 - 100 + 'px',
									height : postWidth * 1.5 - 20  + 'px',
									margin : 50 + 'px',
								});
								$('.no-gutter .item').css( {
									width : postWidth * 1.5 + 'px',
									height : postWidth * 1.6 + 'px',
									margin : 0 + 'px'
								});
								$('.item.wide').css( {
									width : postWidth * 1.5 - 100 + 'px',
									height : postWidth * 1.5 - 20 + 'px',
									margin : 50 + 'px'
								});
								$('.no-gutter .item.wide').css( {
									width : postWidth * 1.5  + 'px',
									height : postWidth * 1.6 + 'px',
									margin : 0 + 'px'
								});
							} else if( $('.large-items').length > 0 ){
								$('.item').css( {
									width : postWidth * 3 - 100 + 'px',
									height : postWidth * 1.5 + 'px',
									margin : 50 + 'px',
								});
								$('.no-gutter .item').css( {
									width : postWidth * 3 + 'px',
									height : postWidth * 1.5 + 'px',
									margin : 0 + 'px'
								});
								$('.item.wide').css( {
									width : postWidth * 3 - 100 + 'px',
									height : postWidth * 1.5 + 'px',
									margin : 50 + 'px'
								});
								$('.no-gutter .item.wide').css( {
									width : postWidth * 3  + 'px',
									height : postWidth * 1.5 + 'px',
									margin : 0 + 'px'
								});
							} else if( $('.classic-items').length > 0 ){
								$('.item').css( {
									width : postWidth * 1.5 - 100 + 'px',
									height : postWidth * 0.91 + 'px',
									margin : 50 + 'px',
								});
								$('.no-gutter .item').css( {
									width : postWidth * 1.5 + 'px',
									height : postWidth * 0.91 + 'px',
									margin : 0 + 'px'
								});
								$('.item.wide').css( {
									width : postWidth * 1.5 - 100 + 'px',
									height : postWidth * 0.91 + 'px',
									margin : 50 + 'px'
								});
								$('.no-gutter .item.wide').css( {
									width : postWidth * 1.5 + 'px',
									height : postWidth * 0.91 + 'px',
									margin : 0 + 'px'
								});
							} else {
								$('.item').css( {
									width : postWidth * 1 - 100 + 'px',
									height : postWidth * 1.3 - 100 + 'px',
									margin : 50 + 'px'
								});
								$('.no-gutter .item').css( {
									width : postWidth * 1 + 'px',
									height : postWidth * 1.4 + 'px',
									margin : 0 + 'px'
								});
								$('.item.wide').css( {
									width : postWidth * 2 - 100 + 'px',
									height : postWidth * 1.3 - 100 + 'px',
									margin : 50 + 'px'
								});
								$('.no-gutter .item.wide').css( {
									width : postWidth * 2  + 'px',
									height : postWidth * 1.4 + 'px',
									margin : 0 + 'px'
								});
							}
						}

					});


				} else if (winWidth > 1024) {

					$('#portfolio-wrap').css( {width : $('#portfolio-wrap').parent().width() - 80 + 'px'});
					$('#portfolio-wrap.no-gutter').css( {width : $('#portfolio-wrap').parent().width() - 150  + 'px'});
					var portfolioWidth = $('#portfolio-wrap').width();

					columnNumb = 3;
					postWidth = Math.floor(portfolioWidth / columnNumb)
					$container.find('.item').each(function () {
						if( $('.squares-items').length > 0 ){
								$('.item').css( {
									width : postWidth * 1.5 - 70 + 'px',
									height : postWidth * 1.5 - 20  + 'px',
									margin : 35 + 'px',
								});
								$('.no-gutter .item').css( {
									width : postWidth * 1.5 + 'px',
									height : postWidth * 1.6 + 'px',
									margin : 0 + 'px'
								});
								$('.item.wide').css( {
									width : postWidth * 1.5 - 70 + 'px',
									height : postWidth * 1.5 - 20 + 'px',
									margin : 35 + 'px'
								});
								$('.no-gutter .item.wide').css( {
									width : postWidth * 1.5  + 'px',
									height : postWidth * 1.6 + 'px',
									margin : 0 + 'px'
								});
							} else if( $('.large-items').length > 0 ){
								$('.item').css( {
									width : postWidth * 3 - 70 + 'px',
									height : postWidth * 1.5 + 'px',
									margin : 35 + 'px',
								});
								$('.no-gutter .item').css( {
									width : postWidth * 3 + 'px',
									height : postWidth * 1.5 + 'px',
									margin : 0 + 'px'
								});
								$('.item.wide').css( {
									width : postWidth * 3 - 70 + 'px',
									height : postWidth * 1.5 + 'px',
									margin : 35 + 'px'
								});
								$('.no-gutter .item.wide').css( {
									width : postWidth * 3  + 'px',
									height : postWidth * 1.5 + 'px',
									margin : 0 + 'px'
								});
							} else if( $('.classic-items').length > 0 ){
								$('.item').css( {
									width : postWidth * 1.5 - 70 + 'px',
									height : postWidth * 0.9 + 'px',
									margin : 35 + 'px',
								});
								$('.no-gutter .item').css( {
									width : postWidth * 1.5 + 'px',
									height : postWidth * 0.9 + 'px',
									margin : 0 + 'px'
								});
								$('.item.wide').css( {
									width : postWidth * 1.5 - 70 + 'px',
									height : postWidth * 0.9 + 'px',
									margin : 35 + 'px'
								});
								$('.no-gutter .item.wide').css( {
									width : postWidth * 1.5 + 'px',
									height : postWidth * 0.9 + 'px',
									margin : 0 + 'px'
								});
							} else {
								$('.item').css( {
									width : postWidth * 1 - 70 + 'px',
									height : postWidth * 1.3 - 70 + 'px',
									margin : 35 + 'px'
								});
								$('.no-gutter .item').css( {
									width : postWidth * 1 + 'px',
									height : postWidth * 1.4 + 'px',
									margin : 0 + 'px'
								});
								$('.item.wide').css( {
									width : postWidth * 2 - 70 + 'px',
									height : postWidth * 1.3 - 70 + 'px',
									margin : 35 + 'px'
								});
								$('.no-gutter .item.wide').css( {
									width : postWidth * 2  + 'px',
									height : postWidth * 1.4 + 'px',
									margin : 0 + 'px'
								});
							}
					});


				}else if (winWidth > 767) {

					$('#portfolio-wrap').css( {width : $('#portfolio-wrap').parent().width() - 50 + 'px'});
					$('#portfolio-wrap.no-gutter').css( {width : $('#portfolio-wrap').parent().width() - 100  + 'px'});
					var portfolioWidth = $('#portfolio-wrap').width();

					columnNumb = 3;
					postWidth = Math.floor(portfolioWidth / columnNumb)
					$container.find('.item').each(function () {
						if( $('.squares-items').length > 0 ){
								$('.item').css( {
									width : postWidth * 1.5 - 50 + 'px',
									height : postWidth * 1.5 - 50  + 'px',
									margin : 25 + 'px',
								});
								$('.no-gutter .item').css( {
									width : postWidth * 1.5 + 'px',
									height : postWidth * 1.6 + 'px',
									margin : 0 + 'px'
								});
								$('.item.wide').css( {
									width : postWidth * 1.5 - 50 + 'px',
									height : postWidth * 1.5 - 50 + 'px',
									margin : 25 + 'px'
								});
								$('.no-gutter .item.wide').css( {
									width : postWidth * 1.5  + 'px',
									height : postWidth * 1.6 + 'px',
									margin : 0 + 'px'
								});
							} else if( $('.large-items').length > 0 ){
								$('.item').css( {
									width : postWidth * 3 - 50 + 'px',
									height : postWidth * 1.5 + 'px',
									margin : 25 + 'px',
								});
								$('.no-gutter .item').css( {
									width : postWidth * 3 + 'px',
									height : postWidth * 1.5 + 'px',
									margin : 0 + 'px'
								});
								$('.item.wide').css( {
									width : postWidth * 3 - 50 + 'px',
									height : postWidth * 1.5 + 'px',
									margin : 25 + 'px'
								});
								$('.no-gutter .item.wide').css( {
									width : postWidth * 3  + 'px',
									height : postWidth * 1.5 + 'px',
									margin : 0 + 'px'
								});
							} else if( $('.classic-items').length > 0 ){
								$('.item').css( {
									width : postWidth * 1.5 - 50 + 'px',
									height : postWidth * 0.9 + 'px',
									margin : 25 + 'px',
								});
								$('.no-gutter .item').css( {
									width : postWidth * 1.5 + 'px',
									height : postWidth * 0.9 + 'px',
									margin : 0 + 'px'
								});
								$('.item.wide').css( {
									width : postWidth * 1.5 - 50 + 'px',
									height : postWidth * 0.9 + 'px',
									margin : 25 + 'px'
								});
								$('.no-gutter .item.wide').css( {
									width : postWidth * 1.5 + 'px',
									height : postWidth * 0.9 + 'px',
									margin : 0 + 'px'
								});
							} else {
								$('.item').css( {
									width : postWidth * 1.5 - 50 + 'px',
									height : postWidth * 1.5 - 50  + 'px',
									margin : 25 + 'px',
								});
								$('.no-gutter .item').css( {
									width : postWidth * 1.5 + 'px',
									height : postWidth * 1.6 + 'px',
									margin : 0 + 'px'
								});
								$('.item.wide').css( {
									width : postWidth * 1.5 - 50 + 'px',
									height : postWidth * 1.5 - 50 + 'px',
									margin : 25 + 'px'
								});
								$('.no-gutter .item.wide').css( {
									width : postWidth * 1.5  + 'px',
									height : postWidth * 1.6 + 'px',
									margin : 0 + 'px'
								});
							}
					});


				}	else if (winWidth > 479) {

					$('#portfolio-wrap').css( {width : $('#portfolio-wrap').parent().width() - 40 + 'px'});
					$('#portfolio-wrap.no-gutter').css( {width : $('#portfolio-wrap').parent().width() -80 + 'px'});
					var portfolioWidth = $('#portfolio-wrap').width();

					columnNumb = 1;
					postWidth = Math.floor(portfolioWidth / columnNumb)
					$container.find('.item').each(function () {
						if( $('.hover-visible-text').length > 0 ){
							$('.item').css( {
								width : postWidth * 1 - 40 + 'px',
								height : postWidth * 0.8  + 'px',
								margin : 20 + 'px'
							});
							$('.no-gutter .item').css( {
								width : postWidth + 'px',
								height : postWidth * 0.8  + 'px',
								margin : 0 + 'px'
							});
							$('.item.wide').css( {
								width : postWidth * 1 - 40 + 'px',
								height : postWidth * 0.9 + 'px',
								margin : 20 + 'px'
							});
							$('.no-gutter .item.wide').css( {
								width : postWidth * 1  + 'px',
								height : postWidth * 0.9 + 'px',
								margin : 0 + 'px'
							});
						} else {
							$('.item').css( {
								width : postWidth * 1 - 40 + 'px',
								height : postWidth * 0.65 - 40 + 'px',
								margin : 20 + 'px'
							});
							$('.no-gutter .item').css( {
								width : postWidth + 'px',
								height : postWidth * 0.65 + 'px',
								margin : 0 + 'px'
							});
							$('.item.wide').css( {
								width : postWidth * 1 - 40 + 'px',
								height : postWidth * 0.65 - 40 + 'px',
								margin : 20 + 'px'
							});
							$('.no-gutter .item.wide').css( {
								width : postWidth + 'px',
								height : postWidth * 0.65 + 'px',
								margin : 0 + 'px'
							});
						}
					});


				}

				else if (winWidth <= 479) {

					$('#portfolio-wrap').css( {width : $('#portfolio-wrap').parent().width() - 30 + 'px'});
					$('#portfolio-wrap.no-gutter').css( {width : $('#portfolio-wrap').parent().width() - 60 + 'px'});
					var portfolioWidth = $('#portfolio-wrap').width();

					columnNumb = 1;
					postWidth = Math.floor(portfolioWidth / columnNumb)
					$container.find('.item').each(function () {
						if( $('.hover-visible-text').length > 0 ){
							$('.item').css( {
								width : postWidth * 1 - 30 + 'px',
								height : postWidth * 0.8  + 'px',
								margin : 15 + 'px'
							});
							$('.no-gutter .item').css( {
								width : postWidth + 'px',
								height : postWidth * 0.8  + 'px',
								margin : 0 + 'px'
							});
							$('.item.wide').css( {
								width : postWidth * 1 - 30 + 'px',
								height : postWidth * 0.9 + 'px',
								margin : 15 + 'px'
							});
							$('.no-gutter .item.wide').css( {
								width : postWidth * 1  + 'px',
								height : postWidth * 0.9 + 'px',
								margin : 0 + 'px'
							});
						} else {
							$('.item').css( {
								width : postWidth * 1 - 30 + 'px',
								height : postWidth * 0.65 - 30 + 'px',
								margin : 15 + 'px'
							});
							$('.no-gutter .item').css( {
								width : postWidth + 'px',
								height : postWidth * 0.65 + 'px',
								margin : 0 + 'px'
							});
							$('.item.wide').css( {
								width : postWidth * 1 - 30 + 'px',
								height : postWidth * 0.65 - 30 + 'px',
								margin : 15 + 'px'
							});
							$('.no-gutter .item.wide').css( {
								width : postWidth + 'px',
								height : postWidth * 0.65 + 'px',
								margin : 0 + 'px'
							});
						}
					});


				}
				return columnNumb;


			}).resize();

			$("#all").trigger('click');


			$(".item").addClass('in-view');
			setTimeout( function(){

				var $animation_elements = $('.item');
				var $window = $(window);

				function check_if_in_view() {
				  var window_height = $window.height();
				  var window_top_position = $window.scrollTop() + 50;
				  var window_bottom_position = (window_top_position + window_height - 50);

				  $.each($animation_elements, function() {
					var $element = $(this);
					var element_height = $element.outerHeight();
					var element_top_position = $element.offset().top;
					var element_bottom_position = (element_top_position + element_height);

				//check to see if this current container is within viewport
				if ((element_bottom_position >= window_top_position) &&
				  (element_top_position <= window_bottom_position)) {
				  $element.addClass('in-view');
				} else {
				  $element.removeClass('in-view');
				}
				});
				}

				$window.on('scroll resize', check_if_in_view);
			} , 1000 );
		}

	}//End MasonryPortfolio




/*--------------------------------------------------
Function Virtual Scroll
---------------------------------------------------*/

	function VirtualScr() {

		new SmoothScroll();

		function SmoothScroll(el) {
		var t = this, h = document.documentElement;
		el = el || window;
		t.rAF = false;
		t.target = 0;
		t.scroll = 0;
		t.animate = function() {
		t.scroll += (t.target - t.scroll) * 0.1;
		if (Math.abs(t.scroll.toFixed(5) - t.target) <= 0.47131) {
		cancelAnimationFrame(t.rAF);
		t.rAF = false;}
		if (el == window) scrollTo(0, t.scroll);
		else el.scrollTop = t.scroll;
		if (t.rAF) t.rAF = requestAnimationFrame(t.animate);};
		el.onmousewheel = function(e) {
		e.preventDefault();
		e.stopPropagation();
		var scrollEnd = (el == window) ? h.scrollHeight - h.clientHeight : el.scrollHeight - el.clientHeight;
		t.target += (e.wheelDelta > 0) ? -100 : 100;
		if (t.target < 0) t.target = 0;
		if (t.target > scrollEnd) t.target = scrollEnd;
		if (!t.rAF) t.rAF = requestAnimationFrame(t.animate);};
		el.onscroll = function() {
		if (t.rAF) return;
		t.target = (el == window) ? pageYOffset || h.scrollTop : el.scrollTop;
		t.scroll = t.target;};
		}


	}// End First Load




/*--------------------------------------------------
Function Page Progress
---------------------------------------------------*/

	function PageProgress() {

		var progressPath = document.querySelector('.progress-page path');
		var pathLength = progressPath.getTotalLength();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
		progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
		progressPath.style.strokeDashoffset = pathLength;
		progressPath.getBoundingClientRect();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
		var updateProgress = function () {
			var scroll = $(window).scrollTop();
			var height = $(document).height() - $(window).height();
			var progress = pathLength - (scroll * pathLength / height);
			progressPath.style.strokeDashoffset = progress;
		}
		updateProgress();
		$(window).scroll(updateProgress);

 }//End Page Progress



/*--------------------------------------------------
Function FooterAppear
---------------------------------------------------*/

	function FooterAppear() {

		if( $('#page-content').length > 0 ){
			$(window).scroll(function() {
				var scroll = $(window).scrollTop();

				if (scroll >= 300) {
					$(".progress-page, #page-action-holder").addClass('is-active');
				} else {
					$(".progress-page, #page-action-holder").removeClass('is-active');
				}
			});
		}

		var lastScroll = 0;

		$(window).scroll(function(){
			var scroll = $(window).scrollTop();
			if (scroll > lastScroll) {
				$(".progress-page, #page-action-holder").addClass("is-visible");
			} else if (scroll < lastScroll) {
				$(".progress-page, #page-action-holder").removeClass("is-visible");
			}
			lastScroll = scroll;
		});

  }//End FooterAppear





/*--------------------------------------------------
Function Sliders
---------------------------------------------------*/

	function Sliders() {

		$('.slider').owlCarousel({
			loop:true,
			margin:0,
			autoHeight:false,
			nav:true,
			navSpeed: 600,
			items:1,
		});

		$('.carousel').owlCarousel({
			loop:true,
			margin:20,
			autoHeight:false,
			navSpeed: 600,
			responsive:{
				0:{
					items:1
				},
				479:{
					items:2
				},
				1024:{
					items:3
				},
				1466:{
					items:3
				}
			}
		});

		if( $('.text-carousel').length > 0 ){
			$(".text-carousel").owlCarousel({
				loop:true,
				dots:true,
				dotsEach: 1,
				items:1,
				autoplay:true,
				smartSpeed: 750,
				autoplayHoverPause:true
			});
		}


	}//End Sliders



/*--------------------------------------------------
Function Lightbox
---------------------------------------------------*/

	function Lightbox() {

		$('.image-link').magnificPopup({
		  	type: 'image',
			mainClass: 'mfp-with-zoom',
			gallery: {
			  enabled:true
			},
			zoom: {
				enabled: true,
				duration: 300,
				easing: 'ease-in-out',
				opener: function(openerElement) {
					return openerElement.is('img') ? openerElement : openerElement.find('img');
				}
			}
		});

	}//End Lightbox




/*--------------------------------------------------
Function AppearIteam
---------------------------------------------------*/

	function AppearIteam() {

		$('.has-animation').each(function() {
			$(this).appear(function() {
				$(this).delay($(this).attr('data-delay')).queue(function(next){
					$(this).addClass('animate-in');
					next();
				});
			});
		});

	}//End AppearIteam



/*--------------------------------------------------
Function Sliders
---------------------------------------------------*/

	function BackToTop() {

		$('.scrolltotop').on('click', function() {
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});

		$(".flexnav").flexNav({ 'animationSpeed' : 0 });

	}//End BackToTop



/*--------------------------------------------------
Function Contact Formular
---------------------------------------------------*/

	function ContactForm() {

		if( jQuery('#contact-formular').length > 0 ){
			$('#contactform').submit(function(){
				var action = $(this).attr('action');
				$("#message").slideUp(750,function() {
					$('#message').hide();
					$('#submit').attr('disabled','disabled');
					$.post(action, {
						name: $('#name').val(),
						email: $('#email').val(),
						comments: $('#comments').val()
					},
					function(data){
						document.getElementById('message').innerHTML = data;
						$('#message').slideDown('slow');
						$('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
						$('#submit').removeAttr('disabled');
						if(data.match('success') != null) $('#contactform').slideUp('slow');
					}
				);
				});
				return false;
			});
		}

	}//End ContactForm

/*--------------------------------------------------
Function Filter Count
---------------------------------------------------*/

	function FilterCounts() {
		if( jQuery('#filters li').length > 0 ){

			var filter_names = [];
			var filter_elements = $('#filters li');

			// filter list from data attribute and strip '.'
			filter_elements.children('a').each(function(){
				var filters = $(this).data('filter').substring(1);
				filter_names.push(filters);
			});

			// loop over arrary to get element count
			for (var i = 0; i < filter_names.length; i++) {
				// get count for elements with class name from filter list array, display 2 digits
				var items = ('0' + document.getElementsByClassName(filter_names[i]).length).slice(-2);

				if (i === 0) {
					// conditional for 'all' to get total display 2 digits
					var total = ('0' + $('.item').length).slice(-2);
					filter_elements.children('span')[i].append(total);
				} else {
					filter_elements.children('span')[i].append(items);
				}
			}
		}
	}//End FilterCounts

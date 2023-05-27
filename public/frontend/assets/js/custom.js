(function($) {
    'use strict';

    // Mean Menu JS
    jQuery('.mean-menu').meanmenu({ 
        meanScreenWidth: "991"
    });

    // Navbar Area
    $(window).on('scroll', function() {
        if ($(this).scrollTop() >150){  
            $('.navbar-area').addClass("sticky-nav");
        }
        else{
            $('.navbar-area').removeClass("sticky-nav");
        }
    });

    // Sidebar Modal JS
	$(".burger-menu").on('click',  function() {
		$('.sidebar-modal').toggleClass('active');
	});
	$(".sidebar-modal-close-btn").on('click',  function() {
		$('.sidebar-modal').removeClass('active');
    });

    // Others Option For Responsive JS
	$(".side-nav-responsive .dot-menu").on("click", function(){
		$(".side-nav-responsive .container .container").toggleClass("active");
    });
    
    // Services Slider 
    $('.services-slider').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items: 1
            },
            768:{
                items: 2
            },
            1000:{
                items: 3
            }
        },
        navText: [
            "<i class='bx bx-chevron-left'></i>",
            "<i class='bx bx-chevron-right'></i>"
        ],
    })

    // Room Slider 
    $('.room-slider').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items: 1
            },
            768:{
                items: 2
            },
            1000:{
                items: 3
            }
        },
    })

    // Testimonials Slider 
    $('.testimonials-slider').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items: 1
            },
            768:{
                items: 2
            },
            1000:{
                items: 3
            }
        },
        navText: [
            "<i class='bx bx-chevron-left'></i>",
            "<i class='bx bx-chevron-right'></i>"
        ],
    })

    
    // Testimonials Slider Two
    $('.testimonials-slider-two').owlCarousel({
        loop: true,
        items: 1,
        margin: 30,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayHoverPause: true,
    })

    // Testimonials Slider Three
    $('.testimonials-slider-three').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items: 1
            },
            768:{
                items: 2
            },
            1000:{
                items: 3
            }
        },
    })

    // Testimonials Slider Area
    $('.testimonials-slider-area').owlCarousel({
        loop: true,
        items: 1,
        margin: 30,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayHoverPause: true,
    })

    // Team Slider 
    $('.team-slider').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items: 1
            },
            768:{
                items: 2
            },
            1000:{
                items: 3
            }
        },
        navText: [
            "<i class='bx bx-chevron-left'></i>",
            "<i class='bx bx-chevron-right'></i>"
        ],
    })
   
    // Team Slider Two
    $('.team-slider-two').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items: 1
            },
            768:{
                items: 2
            },
            1000:{
                items: 3
            }
        },
    })

    // Room Details Slider 
    $('.room-details-slider').owlCarousel({
        loop: true,
        margin: 30,
        items: 1,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        navText: [
            "<i class='bx bx-chevron-left'></i>",
            "<i class='bx bx-chevron-right'></i>"
        ],
    })

    // Popup Gallery 
    $('.gallery-view').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] 
        }
    });

    // Tabs Single Page
    $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
    $('.tab ul.tabs li a').on('click', function (g) {
         var tab = $(this).closest('.tab'), 
         index = $(this).closest('li').index();
         tab.find('ul.tabs > li').removeClass('current');
         $(this).closest('li').addClass('current');
         tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
         tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
         g.preventDefault();
    });

    // FAQ Accordion JS
	$('.accordion').find('.accordion-title').on('click', function(){
		// Adds Active Class
		$(this).toggleClass('active');
		// Expand or Collapse This Panel
		$(this).next().slideToggle('fast');
		// Hide The Other Panels
		$('.accordion-content').not($(this).next()).slideUp('fast');
		// Removes Active Class From Other Titles
		$('.accordion-title').not($(this)).removeClass('active');		
    });

    // Datetimepicker
    $('#datetimepicker').datepicker();

    // Datetimepicker
    $('#datetimepicker-check').datepicker();

    // WOW JS
    new WOW().init();

    // Nice Select JS
    $('select').niceSelect();

    // Back To Top Js
    $('body').append('<div id="toTop" class="top-btn"><i class="bx bx-chevrons-up"></i></div>');
    $(window).on('scroll',function () {
         if ($(this).scrollTop() != 0) {
             $('#toTop').fadeIn();
         } else {
             $('#toTop').fadeOut();
         }
    }); 
    $('#toTop').on('click',function(){
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });

    // Count Time JS
	function makeTimer() {
		var endTime = new Date("October 30, 2022 17:00:00 PDT");			
		var endTime = (Date.parse(endTime)) / 1000;
		var now = new Date();
		var now = (Date.parse(now) / 1000);
		var timeLeft = endTime - now;
		var days = Math.floor(timeLeft / 86400); 
		var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
		var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
		var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
		if (hours < "10") { hours = "0" + hours; }
		if (minutes < "10") { minutes = "0" + minutes; }
		if (seconds < "10") { seconds = "0" + seconds; }
		$("#days").html(days + "<span>Days</span>");
		$("#hours").html(hours + "<span>Hours</span>");
		$("#minutes").html(minutes + "<span>Minutes</span>");
		$("#seconds").html(seconds + "<span>Seconds</span>");
	}
    setInterval(function() { makeTimer(); }, 300);

    // Subscribe form
    $(".newsletter-form").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // Handle The Invalid Form...
            formErrorSub();
            submitMSGSub(false, "Please enter your email correctly");
        } else {
            // Everything Looks Good!
            event.preventDefault();
        }
    });
    function callbackFunction (resp) {
        if (resp.result === "success") {
            formSuccessSub();
        }
        else {
            formErrorSub();
        }
    }
    function formSuccessSub(){
        $(".newsletter-form")[0].reset();
        submitMSGSub(true, "Thank you for subscribing!");
        setTimeout(function() {
            $("#validator-newsletter").addClass('hide');
        }, 4000)
    }
    function formErrorSub(){
        $(".newsletter-form").addClass("animated shake");
        setTimeout(function() {
            $(".newsletter-form").removeClass("animated shake");
        }, 1000)
    }
    function submitMSGSub(valid, msg){
        if(valid){
            var msgClasses = "validation-success";
        } else {
            var msgClasses = "validation-danger";
        }
        $("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
    }
        
    // AJAX MailChimp
    $(".newsletter-form").ajaxChimp({
        url: "https://envyTheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
        callback: callbackFunction
    });

    // Preloader JS
    jQuery(window).on('load',function(){
        jQuery(".preloader").fadeOut(500);
    });

     // Switch Btn
     $('body').append("<div class='switch-box'><label id='switch' class='switch'><input type='checkbox' onchange='toggleTheme()' id='slider'><span class='slider round'></span></label></div>");

})(jQuery);

// function to set a given theme/color-scheme
function setTheme(themeName) {
    localStorage.setItem('theme', themeName);
    document.documentElement.className = themeName;
}

// function to toggle between light and dark theme
function toggleTheme() {
    if (localStorage.getItem('theme') === 'theme-dark') {
        setTheme('theme-light');
    } else {
        setTheme('theme-dark');
    }
}

// Immediately invoked function to set the theme on initial load
(function () {
    if (localStorage.getItem('theme') === 'theme-dark') {
        setTheme('theme-dark');
        document.getElementById('slider').checked = false;
    } else {
        setTheme('theme-light');
      document.getElementById('slider').checked = true;
    }
})();

/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 43);
/******/ })
/************************************************************************/
/******/ ({

/***/ 43:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(44);


/***/ }),

/***/ 44:
/***/ (function(module, exports) {

//menu on scroll
$(window).scroll(function () {
    if ($(this).scrollTop() >= 200) {
        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200); // Fade in the arrow
        $('#menu-item').fadeIn(200); // Fade in the arrow
        $('#menu-item-project').fadeIn(200);
        $('#text-head').fadeIn(200);
    } else {
        $('#return-to-top').fadeOut(200); // Else fade out the arrow
        $('#menu-item').fadeOut(200); // Else fade out the arrow
        $('#menu-item-project').fadeOut(200);
        $('#text-head').fadeOut(200);
    }
});
$('#return-to-top').click(function () {
    // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0 // Scroll to top of body
    }, 500);
});

//scroll to top
$(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});

//******modal image**********
$(document).ready(function () {

    $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }

    });

    $('.image-popup-fit-width').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        image: {
            verticalFit: false
        }
    });

    $('.image-popup-no-margins').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    });
});

// $(function () {
//     $(document).scroll(function () {
//         var $nav = $(".section-two");
//         var $sec = $(".link-two");        
//         $(".link-two").toggleClass('scrolled', $(this).scrollTop() >= $nav.height());
//         $(".link-two").toggleClass('scrolled', $(this).scrollTop() > $(".section-three").height());        
//       });
//   });

$(document).ready(function () {
    var scroll_pos = 0;

    $(document).scroll(function () {
        scroll_pos = $(window).scrollTop();
        console.log(scroll_pos);
        if (scroll_pos >= $("#section-two").position().top - 5 & scroll_pos < $("#section-three").position().top - 5) {
            $(".link-two").addClass('state-menu');
        } else {
            $(".link-two").removeClass('state-menu');
        }

        if (scroll_pos >= $("#section-three").position().top - 5 & scroll_pos < $("#section-four").position().top - 5) {
            $(".link-three").addClass('state-menu');
        } else {
            $(".link-three").removeClass('state-menu');
        }

        if (scroll_pos >= $("#section-four").position().top) {
            $(".link-four").addClass('state-menu');
        } else {
            $(".link-four").removeClass('state-menu');
        }
    });
});

/***/ })

/******/ });
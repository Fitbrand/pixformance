import styles from "./../css/main.css";

// NOTE: TO use Jquery, just call the modules you want
// var $ = require('jquery/src/core');
// require('jquery/src/core/init');
// require('jquery/src/manipulation');

// OR, use all of them
var $ = require("jquery/src/jquery");

// And write your code
// $('body').append('<p>Jquery is working</p>');
//
// You can also "require" any script from its location in the node modules folder. Webpack often knows what to look for, but you can add a script directly like this:
// var javascriptthingy = require('name/folder/file.js');

$(document).ready(function() {
  function isElementInViewport(elem) {
    var elem = $(elem);

    // Get the scroll position of the page.
    var scrollElem = navigator.userAgent.toLowerCase().indexOf("webkit") != -1 ? "body" : "html";
    var viewportTop = $(scrollElem).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    // Get the position of the element on the page.
    var elemTop = Math.round(elem.offset().top);
    var elemBottom = elemTop + elem.height();

    return elemTop < viewportBottom && elemBottom > viewportTop;
  }

  // Check if it's time to start the animation.

  function checkAnimation() {
    var elem = $(".stroke");
    // If the animation has already been started
    if (elem.hasClass("active")) return;
    if (isElementInViewport(elem)) {
      // Start the animation
      elem.addClass("active").animate({ width: "30%" }, 700, "linear");
    }
  }
  
  function checkNavigationAnimation() {
    var elem = $("#masthead");
    
    var scroll = $(window).scrollTop();

    if(scroll > 100) {
      elem.addClass("active");
      elem.removeClass("p1-tb");
    }else  {
      elem.removeClass('active')
      elem.addClass("p1-tb");
    }

  }

  // Capture scroll events
  jQuery(window).scroll(function() {
    checkNavigationAnimation();
  });
});

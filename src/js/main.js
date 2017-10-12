import styles from "./../css/main.css";

// NOTE: TO use Jquery, just call the modules you want
// var $ = require('jquery/src/core');
// require('jquery/src/core/init');
// require('jquery/src/manipulation');

// OR, use all of them
var $ = require("jquery/src/jquery");
require("lity");

// And write your code
// $('body').append('<p>Jquery is working</p>');
//
// You can also "require" any script from its location in the node modules folder. Webpack often knows what to look for, but you can add a script directly like this:
// var javascriptthingy = require('name/folder/file.js');

require("./navigation");

var getSystem = function() {
  var userAgent = navigator.userAgent || navigator.vendor || window.opera;

  // Windows Phone must come first because its UA also contains "Android"
  if (/windows phone/i.test(userAgent)) {
    return "Windows Phone";
  }

  if (/android/i.test(userAgent)) {
    return "Android";
  }

  // iOS detection from: http://stackoverflow.com/a/9039885/177710
  if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
    return "iOS";
  }

  return "unknown";
};

var smoothScroll = function() {
  // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $("html, body").animate(
            {
              scrollTop: target.offset().top
            },
            1000,
            function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) {
                // Checking if the target was focused
                return false;
              } else {
                $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              }
            }
          );
        }
      }
    });
};

$(document).ready(function() {
  smoothScroll();


  $("#search-toggle").click(function() {
    $(".menu-search-wrapper").toggleClass("active");
  });

  $("#close-search").click(function() {
    $(".menu-search-wrapper").toggleClass("active");
  });

  function isElementInViewport(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return elemBottom <= docViewBottom && elemTop >= docViewTop;
  }

  // Check if it's time to start the animation.

  function checkAnimation() {
    var elem = $(".stroke-scroll");
    // If the animation has already been started
    //if (elem.hasClass("active")) return;

    elem.each(function(i, obj) {
      if (isElementInViewport(obj)) {
        var element = $(obj);
        // Start the animation
        if (element.length !== 0) {
          var id = element.attr("id");
          $("#" + id).addClass("active");
        }
      }
    });
  }

  // function mobileNavigation() {
  //   if ($(window).width() < 800) {
  //     var elem = $("#masthead");
  //     elem.addClass("active");
  //     elem.removeClass("p1-tb");
  //   }
  // }

  // mobileNavigation();

  function checkNavigationAnimation() {
    var elem = $("#masthead");

    if ($("#masthead").hasClass("no-scroll")) {
    } else {
      var scroll = $(window).scrollTop();

      if (scroll > 100) {
        elem.addClass("active fixed");
        elem.removeClass("p1-tb");
      } else {
        elem.removeClass("active fixed");
        elem.addClass("p1-tb");
      }
    }
  }

  function setNavigationAnimationMobile() {
    var elem = $("#masthead");
    elem.addClass("active");
    elem.removeClass("p1-tb");
  }

  // Capture scroll events
  jQuery(window).scroll(function() {
    checkNavigationAnimation();
    checkAnimation();
  });

  window.addEventListener("touchstart", function() {
    setNavigationAnimationMobile();
  });

  var lazyloadvideo = (function() {
    var youtube = document.querySelectorAll(".youtube-lazy");
    var videoContent = $(".video-content-wrapper");

    for (var i = 0; i < youtube.length; i++) {
      var source = "https://img.youtube.com/vi/" + youtube[i].dataset.embed + "/sddefault.jpg";
      var location = youtube[i].dataset.location;

      var image = new Image();
      if (location === "home") {
        image.src = youtube[i].dataset.image;
      } else {
        image.src = source;
      }
      image.addEventListener(
        "load",
        (function() {
          youtube[i].appendChild(image);
        })(i)
      );

      youtube[i].addEventListener("click", function() {
        if (getSystem() === "iOS" || getSystem() === "Android" || getSystem() === "Windows Phone") {
        } else {
          videoContent.addClass("hide");
        }

        var iframe = document.createElement("iframe");

        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allowfullscreen", "");
        iframe.setAttribute(
          "src",
          "https://www.youtube.com/embed/" + this.dataset.embed + "?rel=0&showinfo=0&autoplay=1"
        );

        this.innerHTML = "";

        this.appendChild(iframe);
      });
    }
  })();

  var backgroundloadvideo = (function() {
    if (getSystem() === "iOS" || getSystem() === "Android" || getSystem() === "Windows Phone") {
      return;
    }
    var youtube = $(".youtube-background");
    if (youtube.length !== 0) {
      var id = youtube[0].dataset.embed;

      var iframe = document.createElement("iframe");

      iframe.setAttribute("frameborder", "0");
      iframe.setAttribute("allowfullscreen", "");
      iframe.setAttribute(
        "src",
        "https://www.youtube.com/embed/" + id + "?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=" + id
      );

      youtube.innerHTML = "";
      youtube.append(iframe);
    }
  })();
});

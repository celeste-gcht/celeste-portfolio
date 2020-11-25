/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar. Only on desktop. */
let prevScrollpos = window.pageYOffset;

if (window.matchMedia("(min-width:991px)").matches) {
  window.onscroll = () => {
    let currentScrollPos = window.pageYOffset;
    if (!document.getElementById("cel-filtre")) {
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("cel-header").style.top = "0";
      } else {
        document.getElementById("cel-header").style.top = "-70px";
      }
    } else {
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("cel-header").style.top = "0";
        document.getElementById("cel-filtre").style.top = "170px";
      } else {
        document.getElementById("cel-header").style.top = "-70px";
        document.getElementById("cel-filtre").style.top = "230px";
      }
    }

    prevScrollpos = currentScrollPos;
  };
}


// JQUERY

// Menu burger pour responsive

(function ($) {
  $(".burger").on("click", function () {
    $(".menu").toggleClass("ouvert");
  });

  $(".burger").on("click", function () {
    $(".dot:nth-child(1), .dot:nth-child(3)").fadeToggle();
  });

  $(".burger").prepend(
    "<div class='mob-logo'><a href='http://yolo.celesteguichot.fr'><img src='images/logo.png' alt='' /></a></div>"
  );

  $(".fleche-up").on("click", function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
  });

  //   $(window).scroll(function () {
  //     $(".filtre").addClass("filtre-scroll-down");
  //   });

  // en savoir plus : bouton qui fait apparaître plus d'éléments

  $(".cel-project-info").hide();
  $(".cel-button-more").click(function () {
    $(".cel-project-info").slideToggle("slow", function () {});
    //$(this).children(".dashicons").toggleClass("arrow-transform-up");
  });
})(jQuery);

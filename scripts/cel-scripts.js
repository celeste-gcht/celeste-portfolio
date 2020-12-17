/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar. Only on desktop. */

let prevScrollpos = window.pageYOffset;

if (window.matchMedia("(min-width:991px)").matches) {
  window.onscroll = () => {
    let currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("celHeader").style.top = "0";
      } else {
        document.getElementById("celHeader").style.top = "-70px";
      }
    prevScrollpos = currentScrollPos;
  };
}

// Filtre
filterSelection("tout")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "tout") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }
}

// Show filtered elements
function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("filterBtns");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
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

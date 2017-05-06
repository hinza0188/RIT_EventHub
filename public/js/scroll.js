

function loadParallaxEffect() {
  var parallax = document.querySelectorAll(".parallax"),
      speed = 0.5;

  window.onscroll = function(){
    [].slice.call(parallax).forEach(function(el,i){

      var windowYOffset = window.pageYOffset,
          elBackgrounPos = "50% " + (windowYOffset * speed) + "px";

      el.style.backgroundPosition = elBackgrounPos;

    });

  };
}


// // fade in effect
// $(window).on("load",function() {
//   $(window).scroll(function() {
//     var windowBottom = $(this).scrollTop() + $(this).innerHeight();
//     $(".module.content").each(function() {
//
//       /* Check the location of each desired element */
//       var objectBottom = $(this).offset().top + $(this).outerHeight();
//
//       /* If the element is completely within bounds of the window, fade it in */
//       if (objectBottom/2 < windowBottom) { //object comes into view (scrolling down)
//         if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
//       }
//     });
//   }).scroll(); //invoke scroll-handler on page-load
// });
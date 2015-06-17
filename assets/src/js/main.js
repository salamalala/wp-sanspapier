$(document).ready(function() {

  // unbind all event handlers from the menu button
  var menuToggle = $('#js-mobile-menu').unbind();

  //dont show the list, only show the menu
  $('#js-navigation-menu').removeClass("show");


  //when clicking on the menu button, don't do the default function (here clicking on the link
    // display with slidetoggle )
  menuToggle.on('click', function(e) {
    e.preventDefault();
    $('#js-navigation-menu').slideToggle(function(){
//if the nav items are hidden, remove all their style attributes
      if($('#js-navigation-menu').is(':hidden')) {
        $('#js-navigation-menu').removeAttr('style');
      }
    });
  });
});




// if (!Modernizr.svg) {
//     var imgs = document.getElementsByTagName('img');
//     var svgExtension = /.*\.svg$/;
//     var l = imgs.length;
//     for(var i = 0; i < l; i++) {
//         if(imgs[i].src.match(svgExtension)) {
//             imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
//             console.log(imgs[i].src);
//         }
//     }
// }


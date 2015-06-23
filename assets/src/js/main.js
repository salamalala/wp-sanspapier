$(document).ready(function() {

  // unbind all event handlers from the mobile menu button
  var menuToggle = $('#js-mobile-menu').unbind();

  //js-navigation-menu is ul of nav 
  //dont show the list, display block, only show the menu button
  $('#js-navigation-menu').removeClass("show");


  //when clicking on the menu button, don't do the default function (here clicking on the link
    // display with slidetoggle )
  menuToggle.on('click', function(e) {
    $(this).toggleClass('open');
    e.preventDefault();

    $('#js-navigation-menu').slideToggle(function(){
//if the nav items are hidden, remove all their style attributes
      if($('#js-navigation-menu').is(':hidden')) {
        $('#js-navigation-menu').removeAttr('style');
      }
    });
  });
});



$(document).ready(function() {

  // unbind all event handlers from the mobile menu button
  var menuToggle = $('#js-mobile-menu').unbind();

  //js-navigation-menu is ul of nav 
  //dont show the list, display block, only show the menu button
  $('#js-navigation-menu').removeClass("show");


  //when clicking on the menu button, don't do the default function (here clicking on the link
    // display with slidetoggle )
  menuToggle.on('click', function(e) {
    e.preventDefault();
    //add class open to span for hamburger menu
    $(this).toggleClass('open');
    $('#js-navigation-menu').slideToggle(function(){
//if the nav items are hidden, remove all their style attributes
      if($('#js-navigation-menu').is(':hidden')) {
        $('#js-navigation-menu').removeAttr('style');
      }
    });
  });



  //jquery tabs
  $('ul.tabs').each(function(){
     // For each set of tabs, we want to keep track of
     // which tab is active and it's associated content
     var $active, $content, $links = $(this).find('a');

     // If the location.hash matches one of the links, use that as the active tab.
     // If no match is found, use the first link as the initial active tab.
     $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
     $active.addClass('active');

     $content = $($active[0].hash);
     $content.addClass('active-content');

     // Hide the remaining content
     $links.not($active).each(function () {
       $(this.hash).removeClass('active-content');
     });

     // Bind the click event handler
     $(this).on('click', 'a', function(e){
       // Make the old tab inactive.
       $active.removeClass('active');
       $content.removeClass('active-content');

       // Update the variables with the new link and content
       $active = $(this);
       $content = $(this.hash);

       // Make the tab active.
       $active.addClass('active');
       $content.addClass('active-content');

       // Prevent the anchor's default click action
       e.preventDefault();
     });
   });


  $(".half-width-box").filter(function(index){
    return index % 2 === 1;
  }).addClass("second-half-width-box box-omega");


});













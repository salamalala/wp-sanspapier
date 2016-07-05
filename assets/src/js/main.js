//mobile Menu function
var mobileMenu = function(){
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
};


//jquery tabs
var tabFunction = function(e){
  $(e).each(function(){
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
};


//detect second half box
var secondBox = function(e) {

  $(e).filter(function(index){
    return index % 2 === 1;
  }).addClass("right-element-in-row");

};


//detect third half box
var thirdBox = function(e) {

  $(e).filter(function(index){
      return index % 3 == 2;
  }).addClass("right-element-in-row");

};


var emptyPTag = function(){
  $('p:empty').remove();
};


var initMap = function() {

  var customStyles = [
    {
     "elementType": "geometry.fill",
    },
    {
      "stylers": [
        { "visibility": "on" },
        { "gamma": 0.93 },
        { "lightness": 11 },
        { "saturation": 1 }
      ]
    }
  ];

  var bern = new google.maps.LatLng(46.940918, 7.431619);
  var biel = new google.maps.LatLng(47.141163, 7.251038);

  var mapBern = new google.maps.Map(document.getElementById('map-bern'), {
    center: bern,
    zoom: 16,
    styles: customStyles
  });

  var mapBiel = new google.maps.Map(document.getElementById('map-biel'), {
    center: biel,
    zoom: 16,
    styles: customStyles
  });

  var markerBern = new google.maps.Marker({
    position: mapBern.getCenter(),
    icon: new google.maps.MarkerImage('/wp-content/uploads/2015/10/pink_marker.svg',
      null, null, null, new google.maps.Size(64,64)),
    draggable: false,
    map: mapBern
  });

  var markerBiel = new google.maps.Marker({
    position: mapBiel.getCenter(),
    icon: new google.maps.MarkerImage('/wp-content/uploads/2015/10/pink_marker.svg',
      null, null, null, new google.maps.Size(64,64)),
    draggable: false,
    map: mapBiel
  });

};

var donatedAmount = function() {
  $('#form1 input').on('change', function() {
    var selectedAmount = $('input[name=online-spende]:checked').val();
    $('input[name=AMOUNT]').val(selectedAmount * 100);
  });
}

var dynamicOrderID = function() {
  var num = Math.floor(Math.random() * 999999);
  $('input[name=ORDERID]').val(num);
}

// same than $(document).ready(function()
$(function(){

  if ( $('#form1').length ) {
    donatedAmount();
    dynamicOrderID();
  }

  mobileMenu();
  emptyPTag();

  //check if there is a half width box which doesn't have the class not right element in row
  if (  ($('.flex-content .half-width-box').length ) && (!$('.half-width-box').hasClass('not-right-element-in-row')) ) {
    secondBox(".flex-content .half-width-box");
  }

  //check if there is a one third box which doesn't have the class not right element in row
  if (  ($('.flex-content .one-third-box').length ) && (!$('.one-third-box').hasClass('not-right-element-in-row')) ) {
    thirdBox(".flex-content .one-third-box");
  }

  if ( $('.gallery__item').length ) {
    thirdBox(".gallery__item");
  }

  if ( $('ul.tabs').length ) {
    tabFunction('ul.tabs');
  }

  if ( $('.map').length ) {
    initMap();
  }

});

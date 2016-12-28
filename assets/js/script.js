jQuery("document").ready(function($){

  var width_window = $(window).width();
    var height_window = $(window).height();
    
$('.fleche').click(function(){
        $('html, body').animate({scrollTop:720},'slow');
           });




          });

$(function() {
    //----- OPEN
    $('[data-popup-open]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
 
        e.preventDefault();
    });
 
    //----- CLOSE
    $('[data-popup-close]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
 
        e.preventDefault();
    });



});

jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery(this).toggleClass('active');
        jQuery('.menumobile ul').toggleClass('active');
 
        e.preventDefault();
    });
});


 $('#ten')
  .prop('number', 0)
  .animateNumber(
    {
      number: 120
    },
    5000
  );

   $('#one')
  .prop('number', 0)
  .animateNumber(
    {
      number: 75
    },
    5000
  );

   $('#two')
  .prop('number', 10)
  .animateNumber(
    {
      number: 60
    },
    5000
  );

   $('#zero')
  .prop('number', 10)
  .animateNumber(
    {
      number: 235
    },
    5000
  );



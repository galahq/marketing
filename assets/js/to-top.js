$(document).ready(function(){

  // Smooth Scrolling
  $('.to-top').click(function(event){
    event.preventDefault();
    var offset = $($(this).attr('href')).offset().top;
    $('html, body').animate({scrollTop:offset}, 700);
  });

  // Dynamic to-top link
  $('.to-top').hide();
  $(window).scroll(function(){
    if($(this).scrollTop() > 200) {
      $('.to-top').show();
    } else {
      $('.to-top').hide();
    }
  });

});

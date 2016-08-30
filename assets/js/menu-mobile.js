$(document).ready(function(){
  $('#responsive-nav').on('click',function(){
    $('nav.menu-mobile .first-level').slideToggle();
    $('body').toggleClass('mask');
  });
});

var cancelScrollEvent = function (e) {
  e.stopImmediatePropagation();
  e.preventDefault();
  e.returnValue = false;
  return false;
};

var onScrollHandler = function (e) {
  var elem = $(e.originalEvent.srcElement).closest('.no-scroll-lock')[0];
  if (elem === undefined) { return cancelScrollEvent(e); };
  var scrollTop = elem.scrollTop;
  var scrollHeight = elem.scrollHeight;
  var height = elem.clientHeight;
  var wheelDelta = e.originalEvent.deltaY;
  var isDeltaPositive = wheelDelta > 0;

  if (isDeltaPositive && wheelDelta > scrollHeight - height - scrollTop) {
    elem.scrollTop = scrollHeight;
    return cancelScrollEvent(e);
  }
  else if (!isDeltaPositive && -wheelDelta > scrollTop) {
    elem.scrollTop = 0;
    return cancelScrollEvent(e);
  }
};

var openMenu = function() {
  $("nav.c-menu-mobile").show().animate({ left: "0%"}, 200, "easeOutCubic");
  $(".u-content-mask").fadeIn();
  $('body').on("wheel touchmove", onScrollHandler);
};

var closeMenu = function() {
  $("nav.c-menu-mobile").animate({ left: "-100%"}, 200, "easeInCubic", function() { $(this).hide() });
  $(".u-content-mask").fadeOut();
  $("body").off("wheel touchmove");
};

$(document).ready(function(){
  $('#c-menu-mobile--open').click(openMenu);

  $(".c-menu-mobile--close, .u-content-mask").click(closeMenu);
  $(document).keydown( function(e) {
    if (e.which === 27) { closeMenu(); }
  });
});

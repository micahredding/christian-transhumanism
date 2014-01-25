// Generated by CoffeeScript 1.6.3
(function() {
  var $, nextSection, scrollNext, windowHeight, windowSetup;

  $ = jQuery;

  windowHeight = 0;

  nextSection = function() {
    var section, y, z, _i, _len, _ref;
    y = $(document).scrollTop() + (windowHeight / 2);
    _ref = $('section');
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      section = _ref[_i];
      z = $(section).offset().top;
      if (z > y) {
        return '#' + $(section).attr('id');
      }
    }
    return '#intro';
  };

  windowSetup = function() {
    windowHeight = $(window).height();
    return $('section').css('min-height', windowHeight);
  };

  scrollNext = function(e) {
    var next;
    e.preventDefault();
    next = nextSection();
    if (next !== '#intro') {
      return $(next).ScrollTo();
    }
  };

  $('#content-primary').append('<a href="#intro" id="next" class="next">&#8744;</a>');

  $('a#next').click(scrollNext);

  $(window).resize(windowSetup);

  windowSetup();

}).call(this);

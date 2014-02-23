$ = jQuery
windowHeight = 0

nextSection = () ->
  y = $(document).scrollTop() + (windowHeight / 2)
  for section in $('#explore section')
    z = $(section).offset().top
    if z > y
      return '#' + $(section).attr('id')
  return '#intro'

windowSetup = () ->
  windowHeight = $(window).height()
  $('#explore section').css('min-height', windowHeight)

scrollNext = (e) ->
  e.preventDefault()
  next = nextSection()
  if next != '#intro'
    $(next).ScrollTo()

$('#explore #content-primary').append('<a href="#intro" id="next" class="next">&#8744;</a>')
$('a#next').click( scrollNext )
$(window).resize( windowSetup )
windowSetup()



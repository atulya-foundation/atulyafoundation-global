var images = $(".reveal-image");
var current = images.length - 1;
var animation = null;

TweenMax.set(images, { transformOrigin: "100% 100%" });

$(".button").click(function() {
  var index = $(this).index();
  
  if (index == current || (animation && animation.isActive())) {
    return;
  }
  

  animation = new TimelineMax();
  animation.set(images.eq(index), { zIndex: 10 });
  animation.set(images.eq(current), { zIndex: 11 });
  animation.to(images.eq(current), 0.4, { rotation: -10, xPercent: -100, ease: Power1.easeInOut });
  animation.set(images.eq(current), { zIndex: 9 });
  animation.to(images.eq(current), 0.4, { rotation: 0, xPercent: 0 });

  current = index;
});
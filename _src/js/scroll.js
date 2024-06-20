export const scrollFunc = () => {
  //表示領域に来た時に表示させる
  const intersectionObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        jQuery(entry.target).addClass("is-in-view");
      }
    });
  });

  const inViewItems = jQuery(".js-in-view");
  inViewItems.each(function () {
    intersectionObserver.observe(this);
  });
}
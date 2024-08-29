// JS to smooth scroll div.
$(document).ready(function () {
  $(".arc-menu a").on("click", function (e) {
    e.preventDefault();

    scrollTo($(this));
  });
});

$(document).ready(function () {
  $(".arc-branding a").on("click", function (e) {
    e.preventDefault();

    scrollTo($(this));
  });
});

function scrollTo(div) {
  var target = div.attr("href");
  var offset = 54.5;

  $("html, body").animate(
    {
      scrollTop: $(target).offset().top - offset,
    },
    800
  );
}

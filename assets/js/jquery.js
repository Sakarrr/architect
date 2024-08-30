$(document).ready(function () {
  // JS to smooth scroll div.
  $(".arc-menu a").on("click", function (e) {
    e.preventDefault();

    scrollTo($(this));
  });

  $(".arc-branding a").on("click", function (e) {
    e.preventDefault();

    scrollTo($(this));
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

  // Change background color on passing certain height.
  $(window).on("scroll", function () {
    var scrollHeight = 55;
    var div = $(".arc-header");

    if ($(window).scrollTop() > scrollHeight) {
      div.css("background-color", "#fff");
      div.css("color", "#000");
    } else {
      div.css("background-color", "#00000036");
      div.css("color", "#fff");
    }
  });
});

// JS to smooth scroll div.
$(document).ready(function () {
  $(".arc-menu a").on("click", function (e) {
    e.preventDefault();

    var target = $(this).attr("href");
    var offset = 54.5;

    $("html, body").animate(
      {
        scrollTop: $(target).offset().top - offset,
      },
      800
    );
  });
});

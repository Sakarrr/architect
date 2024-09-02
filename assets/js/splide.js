new Splide(".splide", {
  type: "loop",
  perPage: 3,
  autoplay: "true",
  speed: 200,
  gap: "15px",
  breakpoints: {
    576: {
      perPage: 1,
    },
    768: {
      perPage: 2,
    },
  },
}).mount();

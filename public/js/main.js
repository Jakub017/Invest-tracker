  document.querySelectorAll('.splide').forEach(carousel => new Splide(carousel, {
      perPage: 3,
      gap: "20px",
      type: "loop",
      perMove: 1,
      autoplay: true,
      breakpoints: {
          768: {
              perPage: 1,
          },
          1024: {
              perPage: 2,
          },
          1280: {
              perPage: 2,
          }
      }
  }).mount());

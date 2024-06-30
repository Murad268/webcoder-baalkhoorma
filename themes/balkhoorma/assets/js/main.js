new Swiper(".products-slider", {
  initialSlide: 1,
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  spaceBetween: 100,
  loopedSlides: 3,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    enabled: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },

  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 1,
  },

  breakpoints: {
    968: {
      pagination: {
        enabled: false,
        dynamicBullets: true,
      },
    },
  },
});

new Swiper(".retailers-slider", {
  loop: true,
  slidesPerView: 5,
  autoplay: {
    delay: 2000,
  },

  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },

  breakpoints: {
    280: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
      pagination: {
        enabled: true,
      },
    },
    1200: {
      slidesPerView: 5,
      pagination: {
        enabled: false,
      },
    },
  },
  spaceBetween: 85,
});

new Swiper(".recipes-slider", {
  slidesPerView: 1,
  pagination: {
    el: ".swiper-pagination",
  },

  breakpoints: {
    480: {
      slidesPerView: 2,
      loop: true,
    },
    768: {
      slidesPerView: 3,
      loop: true,
    },
    1200: {
      slidesPerView: 4,
    },
  },
  spaceBetween: 30,
});

new Swiper(".certificates-slider", {
  loop: true,
  slidesPerView: 1,
  scrollbar: {
    el: ".swiper-scrollbar",
    dragSize: 250,
  },

  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },

  spaceBetween: 103,
  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },
  breakpoints: {
    480: {
      slidesPerView: 2,
      loop: true,
      pagination: {
        enabled: true,
      },
    },
    768: {
      slidesPerView: 3,
      loop: true,
      pagination: {
        enabled: false,
      },
    },
    1200: {
      slidesPerView: 4,
      pagination: {
        enabled: false,
      },
    },
  },
});

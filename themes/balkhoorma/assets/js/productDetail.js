const thumbSlider = new Swiper(".thumbs-slider", {
  spaceBetween: 15,
  slidesPerView: 3,
  watchSlidesProgress: true,

  breakpoints: {
    768: {
      spaceBetween: 30,
    },
  },
});

new Swiper(".main-slider", {
  spaceBetween: 10,

  thumbs: {
    swiper: thumbSlider,
  },
});

new Swiper(".related-products-slider", {
  loop: true,
  slidesPerView: "auto",
  scrollbar: {
    el: ".swiper-scrollbar",
    dragSize: "auto",
  },
  spaceBetween: 30,
  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },
  breakpoints: {
    480: {
      slidesPerView: 2,
      loop: true,
    },
    768: {
      slidesPerView: 3,
      loop: true,
      scrollbar: {
        dragSize: 250,
      },
    },
  },
});

// Tab menu

const tabmenu = document.querySelector(".tabmenu-container");
const tabmenuTabs = document.querySelectorAll(
  ".tabmenu > .container > .tabs > *"
);

tabmenu.addEventListener("click", (e) => {
  if (e.target.matches("li.subtitle.sm")) {
    const currentTab = document.querySelector("li.subtitle.sm.active");
    if (currentTab !== e.target) {
      currentTab.classList.remove("active");
    }
    e.target.classList.add("active");
    const page = e.target.dataset.related;
    tabmenuTabs.forEach((tab) => {
      tab.classList.remove("active");
      if (tab.matches(`[data-page="${page}"]`)) {
        tab.classList.add("active");
      }
    });
  }
});

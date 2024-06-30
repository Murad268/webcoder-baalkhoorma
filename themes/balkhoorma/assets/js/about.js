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
      slidesPerView: 5,
      pagination: {
        enabled: false,
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

// video

const videoOpenBtn = document.querySelector(".media-container.video");
const videoCloseBtn = document.querySelector(".video-modal > .close-btn");
const videoModal = document.querySelector(".video-modal");
const videoFrame = document.querySelector(
  ".video-modal > .video-container > iframe"
);

videoOpenBtn?.addEventListener("click", function () {
  const videoId = this.dataset.video.match(/v=(.*)/)?.[1];
  const customUrl = `https://www.youtube.com/embed/${videoId}`;

  videoFrame.src = customUrl;
  videoModal.showModal();
});

const videoModalCloseHandler = () => {
  videoModal.close();
  videoFrame.src = "";
};

videoCloseBtn?.addEventListener("click", videoModalCloseHandler);

document.addEventListener("click", (e) => {
  if (e.target === videoModal) {
    const { clientX, clientY } = e;
    const { top, right, bottom, left } = videoModal.getBoundingClientRect();

    if (
      clientX < left ||
      clientX > right ||
      clientY < top ||
      clientY > bottom
    ) {
      videoModalCloseHandler();
    }
  }
});

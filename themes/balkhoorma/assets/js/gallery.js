const loadMoreBtn = document.querySelector(".load-more");

let gallery = new SimpleLightbox(".img-gallery a");

loadMoreBtn.addEventListener("click", () => {
  setTimeout(() => {
    gallery.destroy();
    gallery = new SimpleLightbox(".img-gallery a");
  }, 500);
});

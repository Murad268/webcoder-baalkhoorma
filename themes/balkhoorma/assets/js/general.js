// heading section
const navMenuOpenBtn = document.querySelector(
    "header>.container>nav>.right-side>.hamburger-btn>.open-btn"
);
const navMenuCloseBtn = document.querySelector(
    "header>.container>nav>.right-side>.hamburger-btn>.close-btn"
);
const searchbarOpenBtn = document.querySelector(
    "header>.container>nav>.right-side>.search-btn"
);

const searchbarCloseBtn = document.querySelector(
    "header>.search-bar>.container>.close-btn"
);

const headerMenu = document.querySelector("header");
const navMenu = document.querySelector("header>.container>nav>.link-container");
const searchBar = document.querySelector("header>.search-bar");

const scrollToTopBtn = document.querySelector("footer .scroll-to-top");

navMenuOpenBtn?.addEventListener("click", () => {
    navMenu.classList.add("active");
    headerMenu.classList.add("active");
});

navMenuCloseBtn?.addEventListener("click", () => {
    navMenu.classList.remove("active");
    headerMenu.classList.remove("active");
});

scrollToTopBtn?.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});

navMenu?.addEventListener("click", (e) => {
    if (e.target.matches(".has-child")) {
        document.querySelector("li.has-child.active")?.classList.remove("active");

        e.target.classList.add("active");
    }
});

document.addEventListener("click", (e) => {
    if (
        !e.target.matches("li.has-child.active") &&
        !e.target.matches("li.has-child.active>ul")
    ) {
        document.querySelector("li.has-child.active")?.classList.remove("active");
    }
});

searchbarOpenBtn?.addEventListener("click", () => {
    searchBar.classList.add("active");
});

searchbarCloseBtn?.addEventListener("click", () => {
    searchBar.classList.remove("active");
});

// messagePopup

const messageModal = document.querySelector(".message-popup");

function modalOpenHandler() {
    messageModal.showModal();
}

function modalCloseHandler() {
    messageModal.close();
}

document.addEventListener("click", (e) => {
    if (e.target === messageModal) {
        const { clientX, clientY } = e;
        const { top, right, bottom, left } = messageModal.getBoundingClientRect();
        if (
            clientX < left ||
            clientX > right ||
            clientY < top ||
            clientY > bottom
        ) {
            messageModal.close();
        }
    }
});
const hamburger = document.querySelector(".ham");
    const nav = document.querySelector("#main-nav");

    function toggleMenu() {
        nav.classList.toggle("open");
    }

    hamburger.addEventListener("click", toggleMenu);
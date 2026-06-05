(function () {
    const header = document.getElementById("pulseHeader");
    const toggle = document.getElementById("pulseMobileToggle");
    const drawer = document.getElementById("pulseMobileDrawer");
    const close = document.getElementById("pulseMobileClose");
    const backTop = document.getElementById("pulseBackTop");

    function openDrawer() {
        drawer?.classList.add("active");
        document.body.classList.add("pulse-menu-open");
    }

    function closeDrawer() {
        drawer?.classList.remove("active");
        document.body.classList.remove("pulse-menu-open");
    }

    toggle?.addEventListener("click", openDrawer);
    close?.addEventListener("click", closeDrawer);

    drawer?.addEventListener("click", function (event) {
        if (event.target === drawer) closeDrawer();
    });

    window.addEventListener("scroll", function () {
        if (window.scrollY > 20) {
            header?.classList.add("is-scrolled");
        } else {
            header?.classList.remove("is-scrolled");
        }

        if (window.scrollY > 500) {
            backTop?.classList.add("active");
        } else {
            backTop?.classList.remove("active");
        }
    });

    backTop?.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
})();
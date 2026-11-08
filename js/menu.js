console.log("menu.js chargé");
const menuButton = document.querySelector(".menu-toggle");
const navigation = document.querySelector("#main-navigation");
const mobileScreen = window.matchMedia("(max-width: 768px)");

if (menuButton && navigation) {
    function setMenuOpen(isOpen) {
        menuButton.setAttribute("aria-expanded", String(isOpen));

        menuButton.setAttribute(
            "aria-label",
            isOpen ? "Fermer le menu" : "Ouvrir le menu"
        );

        navigation.classList.toggle("is-open", isOpen);
        document.body.classList.toggle("menu-open", isOpen);
        navigation.inert = mobileScreen.matches && !isOpen;
    }

    menuButton.addEventListener("click", () => {
        const isOpen = menuButton.getAttribute("aria-expanded") === "true";
        setMenuOpen(!isOpen);
    });

    navigation.addEventListener("click", (event) => {
        if (event.target.closest("a") && mobileScreen.matches) {
            setMenuOpen(false);
            menuButton.focus();
        }
    });

    document.addEventListener("keydown", (event) => {
        const isOpen = menuButton.getAttribute("aria-expanded") === "true";

        if (event.key === "Escape" && isOpen) {
            setMenuOpen(false);
            menuButton.focus();
        }
    });

    mobileScreen.addEventListener("change", () => {
        if (!mobileScreen.matches && document.activeElement === menuButton) {
            navigation.querySelector("a")?.focus();
        }

        if (mobileScreen.matches && navigation.contains(document.activeElement)) {
            menuButton.focus();
        }

        setMenuOpen(false);
    });

    setMenuOpen(false);
}
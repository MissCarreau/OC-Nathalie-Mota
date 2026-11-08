const contactModal = document.querySelector("#contact-modal");

if (contactModal) {
    let contactTrigger;

    document.addEventListener("click", (event) => {
        const trigger = event.target.closest('a[href="#contact"]');

        if (!trigger) return;

        event.preventDefault();

        if (contactModal.open) return;

        contactTrigger = trigger;
        contactModal.showModal();
        document.body.classList.add("contact-open");
    });

    contactModal.addEventListener("click", (event) => {
        if (event.target !== contactModal) return;

        const bounds = contactModal.getBoundingClientRect();

        const outside =
            event.clientX < bounds.left ||
            event.clientX > bounds.right ||
            event.clientY < bounds.top ||
            event.clientY > bounds.bottom;

        if (outside) {
            contactModal.close();
        }
    });

    contactModal.addEventListener("close", () => {
        document.body.classList.remove("contact-open");

        const returnTarget = contactTrigger?.closest("[inert]")
            ? document.querySelector(".menu-toggle")
            : contactTrigger;

        returnTarget?.focus();
    });
}
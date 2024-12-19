document.addEventListener("DOMContentLoaded", () => {
    const links = document.querySelectorAll("nav a");
    links.forEach(link => {
        link.addEventListener("click", () => {
            alert(`Navigating to ${link.textContent}`);
        });
    });
});

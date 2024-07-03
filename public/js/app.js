const currentPath = window.location.href;
const navLinks = document.querySelectorAll(".nav-link");

if (navLinks) {
    navLinks.forEach(link => {
        if (link.getAttribute("href") === currentPath) {
            link.classList.add("bg-gray-100");
            link.classList.add("text-blue-600");
        }
    });
}

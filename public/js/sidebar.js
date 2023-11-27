function dropdown(title) {
    document.querySelector(`#submenu-${title}`).classList.toggle("hidden");
    document.querySelector(`#arrow-${title}`).classList.toggle("rotate-1");
}
function openSidebar() {
    document.querySelector(".sidebar").classList.toggle("hidden");
}
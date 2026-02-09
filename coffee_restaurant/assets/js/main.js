// Sticky Header
window.addEventListener("scroll", () => {
  const header = document.querySelector(".site-header");
  if (!header) return;

  if (window.scrollY > 30) header.classList.add("scrolled");
  else header.classList.remove("scrolled");
});

// Mobile Drawer
function openDrawer(){
  document.querySelector(".mobile-drawer").classList.add("open");
}
function closeDrawer(){
  document.querySelector(".mobile-drawer").classList.remove("open");
}

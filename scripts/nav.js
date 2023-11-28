const toggleBtn = document.getElementById("menuIcon");
const menuContent = document.getElementById("MobileMenu");
const body = document.body;

toggleBtn.addEventListener("click", () => {
  menuContent.classList.toggle("open");

  // Toggle the body's overflow property to prevent scrolling
  if (menuContent.classList.contains("open")) {
    body.style.overflow = "hidden";
    toggleBtn.querySelector(".icon-burger").style.display = "none";
    toggleBtn.querySelector(".icon-close").style.display = "inline";
  } else {
    body.style.overflow = "auto";
    toggleBtn.querySelector(".icon-close").style.display = "none";
    toggleBtn.querySelector(".icon-burger").style.display = "inline";
  }
});

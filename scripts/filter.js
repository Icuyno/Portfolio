function filterItems(category) {
  const projItems = document.querySelectorAll(".projItem");
  const buttons = document.querySelectorAll(".projects-btn");

 const titleElementMobile = document.getElementById("featuredTitleMobile");
 const titleElementDesktop = document.getElementById("featuredTitleDesktop");

 // Check if mobile title element exists, update it if it does
 if (titleElementMobile) {
   titleElementMobile.textContent =
     category !== "All" ? category : "All Projects";
 }

 // Check if desktop title element exists, update it if it does
 if (titleElementDesktop) {
   titleElementDesktop.textContent =
     category !== "All" ? category : "All Projects";
 }

  projItems.forEach((item) => {
    const itemCategories = item.dataset.category.split(" | ");

    if (itemCategories.includes(category) || category === "All") {
      fadeIn(item);
    } else {
      fadeOut(item);
    }
  });

  // Apply display: flex to buttons with a custom fade effect (customize as needed)
  buttons.forEach((button) => {
    const buttonCategories = button.dataset.category.split(" | ");

    if (buttonCategories.includes(category) || category === "All") {
      fadeIn(button);
    } else {
      fadeOut(button);
    }
  });
}

document.addEventListener("DOMContentLoaded", function () {
  // Additional initialization code if needed

  const filterButtons = document.querySelectorAll(".filter-btn");

  filterButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const category = this.innerText.trim();
      filterItems(category);
    });
  });
});

function fadeIn(element) {
  let opacity = 0;
  element.style.opacity = "0";
  element.style.display = "flex"; // Set display to flex

  function animate() {
    opacity += 0.03; // Adjust the increment value for speed
    element.style.opacity = opacity;

    if (opacity < 1) {
      requestAnimationFrame(animate);
    }
  }

  animate();
}

function fadeOut(element) {
  let opacity = 1;

  function animate() {
    opacity -= 0.03; // Adjust the increment value for speed
    element.style.opacity = opacity;

    if (opacity > 0) {
      requestAnimationFrame(animate);
    } else {
      element.style.display = "none";
    }
  }

  animate();
}

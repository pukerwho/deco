// Open mobile menu
let menuToggle = document.querySelector(".menu-js");
let headerMenu = document.querySelector(".header-menu");
if (menuToggle) {
  menuToggle.addEventListener("click", () => {
    document.body.classList.toggle("overflow-hidden");
    headerMenu.classList.toggle("mobile");
  });
}

// Active item
let bodyClass = document.querySelector("body").className;
let menuItems = document.querySelectorAll(".menu-item");
if (menuItems) {
  for (menuItem of menuItems) {
    let menuItemsClassArchive = menuItem.dataset.classArchive;
    let menuItemsClassSingle = menuItem.dataset.classSingle;
    let menuItemsClassTax = menuItem.dataset.classTax;
    if (
      bodyClass.includes(menuItemsClassArchive) ||
      bodyClass.includes(menuItemsClassSingle) ||
      bodyClass.includes(menuItemsClassTax)
    ) {
      console.log("yes");
      menuItem.classList.add("bg-white", "dark:bg-zinc-600");
    }
  }
}

function toggleSidebar() {
  document.querySelector(".sidebar").classList.toggle("collapsed");
}

function logout() {}

document.addEventListener("DOMContentLoaded", function () {
  var menuItems = document.querySelectorAll(".menu-item");

  menuItems.forEach(function (menuItem) {
    menuItem.addEventListener("click", function () {
      menuItems.forEach(function (item) {
        item.classList.remove("active");
      });

      menuItem.classList.add("active");
    });
  });
});

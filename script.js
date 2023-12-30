function toggleSidebar() {
    document.querySelector('.sidebar').classList.toggle('collapsed');
  }
  
  function logout() {
    // Add your logout logic here
    alert("Logout clicked");
  }

  document.addEventListener('DOMContentLoaded', function () {
    // Get all menu items
    var menuItems = document.querySelectorAll('.menu-item');

    // Add a click event listener to each menu item
    menuItems.forEach(function (menuItem) {
        menuItem.addEventListener('click', function () {
            // Remove "active" class from all menu items
            menuItems.forEach(function (item) {
                item.classList.remove('active');
            });

            // Add "active" class to the clicked menu item
            menuItem.classList.add('active');
        });
    });
});

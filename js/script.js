// ===============================
// Dashboard - Sidebar Toggle
// ===============================

const sidebarToggle = document.getElementById("sidebarToggle");
const sidebar = document.querySelector(".sidebar");

if (sidebarToggle && sidebar) {

    sidebarToggle.addEventListener("click", function () {

        sidebar.classList.toggle("sidebar-open");

    });
}

// ===============================
// Sidebar Active Menu
// ===============================

const menuItems = document.querySelectorAll(".menu-item");

menuItems.forEach(function (menuItem) {

    menuItem.addEventListener("click", function () {

        menuItems.forEach(function (item) {
            item.classList.remove("active");
        });

        this.classList.add("active");

    });

});

// ===============================
// Dashboard - Notification Button
// ===============================



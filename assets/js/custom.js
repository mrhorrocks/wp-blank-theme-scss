// custom.js
console.log('custom.js has been loaded');

jQuery(document).ready(function ($) {
    $(".hamburger").on("click", function () {
        $(".nav-menu-links").toggleClass("open");
    });
});
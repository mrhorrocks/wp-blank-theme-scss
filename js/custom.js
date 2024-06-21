// custom.js
console.log('custom.js has been loaded');

jQuery(document).ready(function ($) {
    $(".hamburger").on("click", function () {
        $(".nav-menu-links").slideToggle("fast", function () {
            // e.stopPropagation();
            console.log('Hamburger Clicked');
        });
    });
});
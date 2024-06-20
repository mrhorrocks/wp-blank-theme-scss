// custom.js
console.log('custom.js has been loaded');

jQuery(document).ready(function ($) {
    $(".hamburger").on("click", function () {
        $(".hamburger-links").toggle("fast", function () {
            console.log('Hamburger Clicked');
        });
    });
});
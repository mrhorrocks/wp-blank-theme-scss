// custom.js
console.log('custom.js has been loaded');

jQuery(document).ready(function ($) {
    $(".hamburger").on("click", function () {
        $(".hamburger-links").toggle("slow", function () {
            console.log('Hamburger Clicked');
        });
    });
});
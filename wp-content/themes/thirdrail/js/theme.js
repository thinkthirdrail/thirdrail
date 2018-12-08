jQuery(document).ready(function($) {
    $(".menu-tab").on("click", function() {
        $(".burger").toggleClass("active");
        $(".main-menu").toggleClass("active");
        $(".svg svg").toggleClass("active");
        $("footer").toggleClass("active");
        $(".svg").toggleClass("active");
    });
});

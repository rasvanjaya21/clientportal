const mobileScreen = window.matchMedia("(max-width: 990px)");

$(document).ready(function () {
    $(".dashboard-nav-dropdown-toggle").click(function () {
        $(this).closest(".dashboard-nav-dropdown")
            .toggleClass("show")
            .find(".dashboard-nav-dropdown")
            .removeClass("show");
        $(this).parent()
            .siblings()
            .removeClass("show");
    });

    $(".menu-toggle").click(function () {
        if (mobileScreen.matches) {
            // Slide down/up animation for mobile menu toggle
            $(".dashboard-nav").toggleClass("mobile-show").slideToggle(300); // Adjust the duration as needed
        } else {
            $(".dashboard").toggleClass("dashboard-compact");

            // Slide animation for the dashboard content
            $(".dashboard-app").animate({
                marginLeft: $(".dashboard").hasClass("dashboard-compact") ? "0px" : "300px"
            }, 300); // Adjust the duration as needed
            $(".dashboard-nav").animate({
                marginLeft: $(".dashboard").hasClass("dashboard-compact") ? "-300px" : "0px"
            }, 300); 
        }
    });
});

$(document).ready(function () {
    const countriesSlider = $(".main__slider--countries");
    const sportsSlider = $(".main__slider--sports");
    const main = $(".main");

    $(".countries").click(function () {
        countriesSlider.css("visibility", "visible");
        sportsSlider.css("visibility", "hidden");
        main.removeClass("main--sports");
        $(this).addClass("active");
        $(".sports").removeClass("active");
    });

    $(".sports").click(function () {
        countriesSlider.css("visibility", "hidden");
        sportsSlider.css("visibility", "visible");
        main.addClass("main--sports");
        $(this).addClass("active");
        $(".countries").removeClass("active");
    });

    $(".main__slider").slick({
        centerMode: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        initialSlide: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 1,
                    fade: true
                }
            }
        ]
    });
});

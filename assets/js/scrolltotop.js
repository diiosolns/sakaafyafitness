
$(function () {
    var offset_t = 600, // At what pixels show Back to Top Button
        scrollDuration = 500; // Duration of scrolling to top

    $(window).scroll(function () {
        if ($(this).scrollTop() > offset_t) {
            $('.to-top').addClass('show-top');
        } else {
            $('.to-top').removeClass('show-top');
        }
    });

    // Smooth animation when scrolling
    $('.to-top').click(function (e) {

        e.preventDefault();

        $('html, body').animate({
            scrollTop: 0
        }, scrollDuration);

    });
});
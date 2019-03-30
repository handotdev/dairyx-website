//Scrollable Buttons

$("#nav-home").click(function() {
    $('html,body').animate({
        scrollTop: $("#home").offset().top},
        'slow');
});

$("#nav-features").click(function() {
    $('html,body').animate({
        scrollTop: $("#section-features").offset().top},
        'slow');
});

$("#nav-subscribe").click(function() {
    $('html,body').animate({
        scrollTop: $("#subscribe").offset().top},
        'slow');
});

$("#cover-more").click(function() {
    $('html,body').animate({
        scrollTop: $("#learn-more").offset().top},
        'slow');
});

$("#cover-subscribe").click(function() {
    $('html,body').animate({
        scrollTop: $("#subscribe").offset().top},
        'slow');
});

$(document).ready(function() {
$('.menu-toggle').on('click',function(){
    $('.nav').toggleClass ('showing');
    $('.nav ul').toggleClass('showing');
});
$('.post-wrapper').slick({
    slidersToShow: 3,
    slidersToScroll: 1,
    autoplay: true,
    autoplaySpeed:2000,
});

});
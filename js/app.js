$(document).ready(function(){
    $(".main").onepage_scroll({
        sectionContainer: "section",
        responsiveFallback: 500,
        loop: true
    });
});

$('.btnDown').on('click', function (e) {
    e.preventDefault();
    $(".main").moveTo(2);
});
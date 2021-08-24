$( document ).ready(function() {
    var hamburger = $('#hamburger-icon');
    setTimeout(function()
    {
        $('.new-logo').toggle('drop', { direction: "up" }, 500);
        $('#hamburger-icon').toggle('drop', { direction: "up" }, 500);
    }, 200);
    hamburger.click(function() {
        hamburger.toggleClass('active');
        $('.new-menu').toggle('drop', { direction: "right" }, 500);
        return false;
    });
});

function loading()
{
    $(".loading").fadeToggle();
}


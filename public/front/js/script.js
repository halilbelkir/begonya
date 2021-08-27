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

setTimeout(function ()
{
    (function () {
        var callback_loaded = function (element) {
            $('[data-ll-status="loaded"]').removeClass("late-load");
        };
        new LazyLoad({ elements_selector: ".late-load",callback_loaded: callback_loaded });
    })();
},300);


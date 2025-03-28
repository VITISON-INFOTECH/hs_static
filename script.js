$(document).ready(function () {
    $('.wrap').mouseover(function () {
        $('.imageoverlay', this).show();                
    }).mouseout(function () {
        $('.imageoverlay', this).hide();
    });
})
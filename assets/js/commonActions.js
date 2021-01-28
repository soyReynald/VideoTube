$(document).ready(function(){
    var main = $("#mainSectionContainer");
    var nav = $("#sideNavContainer");
    $(".NavShowHide").on('click', function(){
        if(main.hasClass("padLeft")){
            nav.hide();
        }else{
            nav.show();
        }
        main.toggleClass("padLeft");
    });
});
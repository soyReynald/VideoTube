$(document).ready(function(){
    var main = $(".main-container-content");
    var nav = $(".main-container-nav");
    $(".NavShowHide").on('click', function(){
        if(main.hasClass("--padLeft")){
            nav.hide();
        }else{
            nav.show();
        }
        main.toggleClass("--padLeft");
    });
});
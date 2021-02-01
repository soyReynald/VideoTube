$(document).ready(function(){
    var main = $(".main-container-content");
    var nav = $(".main-container-nav");
    var navBtn = $(".main-container-header__btn-menu");
    navBtn.on('click', function(){
        if(main.hasClass("--padLeft")){
            nav.hide();
        }else{
            nav.show();
        }
        main.toggleClass("--padLeft");
    });
});
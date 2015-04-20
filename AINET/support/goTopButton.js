/**
 * Created by Paulo on 20/04/2015.
 */
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()>200){
            $('.go-top').fadeIn(200);
        }else {
            $('.go-top').fadeOut(200);
        }
    });
});
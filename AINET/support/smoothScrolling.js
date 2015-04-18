/**
 * Created by Paulo on 18/04/2015.
 */

    /*script que vai permitir que o scroll dentro das âncoras do site seja feito de uma forma suave */
$(document).ready(function(){
    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
});

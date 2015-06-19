/**
 * Created by PhpStorm.
 * Group: PHP TAG FORCE
 * User: Paulo Penicheiro - 2130628
 * Date: 20/04/2015
 * Time: 12:47
 * script que apresenta um botão fixo no fundo de ecrã que permite voltar ao topo
 */
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.go-top').fadeIn(200);
        } else {
            $('.go-top').fadeOut(200);
        }
    });
});
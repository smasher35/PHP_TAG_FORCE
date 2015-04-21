/**
 * Created by PhpStorm.
 * Group: PHP TAG FORCE
 * User: Paulo Penicheiro - 2130628
 * Date: 21/04/2015
 * Time: 10:47
 */
//script que pertite uma navegação mais suave entre páginas
$(document).ready(function() {
    $("body").css("display", "none");
    $("body").fadeIn(2000);

    $("a.transition").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(1000, redirectPage);
    });

    function redirectPage() {
        window.location = linkLocation;
    }
});
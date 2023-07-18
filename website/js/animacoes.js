$(document).ready(function () {
    var metade_tela = ($(window).height() / 2);

    let menu_scroll = function() {
        if ($(window).scrollTop() > 0) {
            $('header').attr('scroll','true');
        }
        else{
            $('header').attr('scroll','false');
        }
    }
    $(window).scroll(menu_scroll);
    menu_scroll();



    //HOME
    if(pagina == 'home'){

    }



    // let alvo = $('#first_info');
    // let active_scroll = alvo.offset().top;
    // let animacao_scroll = function() {
    //     if ($(window).scrollTop() >= (active_scroll + alvo.height() - $(window).height())) {
    //     }
    // }
    // $(window).scroll(animacao_scroll);
    // animacao_scroll();
});
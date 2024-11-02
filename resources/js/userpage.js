$(document).ready(function () {
    let indice_atual = 0;
    let itens = $('.carousel-item');
    function mostrarSlide(indice) {
        itens.removeClass('active');
        itens.eq(indice).addClass('active');
    }

    function moverSlide(passo) {
        indice_atual = (indice_atual + passo + itens.length) % itens.length;
        mostrarSlide(indice_atual);
    }


    mostrarSlide(indice_atual);


    $('.prev').click(function () {
        moverSlide(-1);
    });

    $('.next').click(function () {
        moverSlide(1);
    });
});

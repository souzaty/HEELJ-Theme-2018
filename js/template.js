/*!
 * Template.js
 * Copyright 2018 Souzay, Inc.
 */


/*
Mudar BG menu Transparente >> Branco & Mudar fonte branca >>  para azul
*/
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".clearHeader").addClass("darkHeader");
    } else {
        $(".clearHeader").removeClass("darkHeader");
    }
});
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".prevColor").addClass("nextColor");
    } else {
        $(".prevColor").removeClass("nextColor");
    }
});
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".logo").addClass("logo-cor");
    } else {
        $(".logo").removeClass("logo-cor");
    }
});
/*!
Mudar BG menu Transparente >> Branco
Mudar fonte azul >> azul
*/
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".prevColor-azul").addClass("nextColor-azul");
    } else {
        $(".prevColor-azul").removeClass("nextColor-azul");
    }
});

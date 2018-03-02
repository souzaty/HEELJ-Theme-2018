/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under the MIT license
 */
/*!
Efeito Flip
*/
$('.card').hover(function(){
          $(this).toggleClass('flipped');
        });
/*!
Mudar BG menu Transparente >> Branco
Mudar fonte branca >>  para azul
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

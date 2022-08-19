// JavaScript Document

$('.banner').slick({
  accessToken: 'IGQVJWNjZAuTFlGQ1UxWm03dkZAVdG4tX1g0MVdQZA0tXWEZADQUx4aDdPNm1aZAjJiXzN0YklnNmM4SHVla3VuOHlPQ2Q1Rjg4b2tDYzZAJN3Y4NE5oMmRBZA3Jxdnl1a25UVHlWd0pRbTJ2Uzh0Nm9lNTR1YQZDZD',
   
  dots: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

new WOW().init();

document.querySelector(".abrir-menu").onclick = function(){
	
	console.log("ABRIR MENU");
	document.documentElement.classList.add("menu-ativo");
}

document.querySelector(".fechar-menu").onclick = function(){
	
	console.log("FECHAR MENU");
	document.documentElement.classList.remove("menu-ativo");
}




































































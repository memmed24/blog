$(document).ready(function(){
	var headuldown=$('.headuldown');
	var downlast=$('.downlast');
	var compdown=$('.compdown');
	var infodown = $('.infodown');
	var compin=$('.compin');
	var servdown=$('.servdown');
	var servin=$('.servin');
	var infoin = $('.infoin');
	var recdown=$('.recdown');
	var recin=$('.recin');
	downlast.hover(function(){
		headuldown.fadeToggle();
	})

	compin.hover(function(){
		compdown.fadeToggle();
	})

	infoin.hover(function(){
		infodown.fadeToggle();
	});

	servin.hover(function(){
		servdown.fadeToggle();
	})
	recin.hover(function(){
		recdown.slideToggle();
	})
})
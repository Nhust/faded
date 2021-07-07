var $ = jQuery;
var cw = new Array();

function input_example(){
	var i =0;
	jQuery('.menu-item-color-colorwheel').each(function(){
		cw[i] = Raphael.colorwheel(jQuery(this).find('.colorwheel')[0],150);
		cw[i].input(jQuery(this).find('.colorwheel-input')[0]);
		
		i++;
	});
}

jQuery(window).load(function(){
	input_example();
});
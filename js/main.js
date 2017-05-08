jQuery(document).ready(function ($) {
/*-------------------menu script------------------------------------------*/

	$('.sub-menu').parent('li').hover(function(){
		$(this).find('.sub-menu').css({'min-width':$(this).width()+'px'});
		$(this).find('.sub-menu').css({'margin-left':($(this).find('.sub-menu').width() - $(this).width()+1)/2*-1+'px'});
		$(this).find('.sub-menu').stop(false, true).show();
	}, function(){
		$(this).addClass('activ_hover');
		setTimeout(function(){
			$('.activ_hover').find('.sub-menu').stop(false, true).hide();
			$('.sub-menu').parent('li').removeClass('activ_hover');
		},500);

	});

	$('.sub-menu').hover(function(){
		$('.sub-menu').parent('li').removeClass('activ_hover');
		$('.sub-menu').not(this).stop(false, true).hide();
		$(this).stop(false, true).show();
	}, function(){
		$(this).stop(false, true).hide();
	});

/*------------------- end menu script------------------------------------------*/
	
});
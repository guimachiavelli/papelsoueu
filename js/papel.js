$(document).ready(function() {

	$('.show > a').click(function() {
		$(this).toggleClass('active').siblings('.hidden').toggle();
		return false;
	});

	$('.home .post .title').fitText(1.2, { minFontSize: '20px', maxFontSize: '140px' });
});
		

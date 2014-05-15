
$( document ).ready(function() {	
	$('.services-item.pad-common').click(function()
	{
		$('.services-item.pad-common').removeClass('expand');
		$(this).addClass('expand');
	});
});
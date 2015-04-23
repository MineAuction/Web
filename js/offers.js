/**
 * JS for templates/offer.tpl
 */
$(document).ready(function(){

	/* Set max value to input */
  $('.click_max').click(function(){
		var value = $(this).html();
		var td = $(this).closest('td').next('td').next('td').next('td');
		alert(td.html());
		td.find('.items_count').val(value);
  });
	
});
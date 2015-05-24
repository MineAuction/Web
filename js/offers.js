/**
 * JS for templates/offer.tpl
 */
$(document).ready(function(){

	/* Set max value to input */
  $('.click_max').click(function(){
		var value = $(this).html();
		var td = $(this).closest('td').next('td').next('td').next('td');
		//alert(td.html());
		td.find('.items_count').val(value);
  });
	
  /* BUY ITEM VIA AJAX */
  $('.offer_buy').click(function(){
		// get values
    var qty = $(this).closest('td').find(".items_count").val();
    var row_id = $(this).parent().parent().find(".row_id").val();
		var max = $(this).parent().parent().find(".items_qty").html();
		
		// helpers
		var have = max - qty;
		var pom = $(this).parent().parent();
	
		// send ajax request and get response
		$.ajax({
			url: "php/ajax/buy_offer.ajax.php",
			type: "get", 
			data:{row_id: row_id, qty: qty},
			success: function(data){
				var returnedData = jQuery.parseJSON(data);
				
				// virtual update max
				if(have <= 0){
					pom.css("display", "none");	
				}
				if(returnedData.result == "sell_ok"){
					pom.find(".items_qty").text(have);

					// reset inputs
					pom.find(".items_price").val("");
				}
			
				// dialog
				$("#dialog-message").dialog({
					modal: true,
					width: 500, 
					buttons: {
						Ok: function() {
							$( this ).dialog("close");
						}
					}
				});	
				$("#dialog-message").text(returnedData.response);
			}
		});
  });
	
});
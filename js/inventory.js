/**
 * JS for templates/inventory.tpl
 */
$(document).ready(function(){
  
	/* Set max value to input */
  $('.click_max').click(function(){
		var value = $(this).html();
		var td = $(this).closest('td').next('td').next('td');
		
		td.find('.items_count').val(value);
    td.find('.items_price').focus();
  });

  /* SELL ITEM VIA AJAX */
  $('.sell').click(function(){
		// get values
    var qty = $(this).closest('td').find(".items_count").val();
    var price = $(this).closest('td').find(".items_price").val();
    var id = $(this).parent().parent().find(".item_id").val();
		var sid = $(this).parent().parent().find(".item_subid").val();
		var max = $(this).parent().parent().find(".items_qty").html();
	
		// helpers
		var have = max - qty;
		var pom = $(this).parent().parent();
	
		//alert("sell_item.ajax.php?item_id="+id+"&item_subid="+sid+"&qty="+qty+"&price="+price+"");
	
		// send ajax request and get response
		$.ajax({
			url: "php/ajax/sell_item.ajax.php",
			type: "get", 
			data:{item_id: id, item_subid: sid, qty: qty, price: price},
			success: function(data){
				var returnedData = jQuery.parseJSON(data);
				
				// virtual update max
				if(have <= 0){
					pom.css("display", "none");	
				}
				if(returnedData.result == "true"){
					pom.find(".items_qty").text(have);
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
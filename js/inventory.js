$(document).ready(function(){
  /* Pøedvyplnìní max hodnotou */
  $('.click_max').click(function(){
    $(this).closest('td').next('td').find('.items_count').val($(this).html());
    $(this).closest('td').next('td').find('.items_price').focus();
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
	  success: function(response) {
	  	// virtual update max
		if(have <= 0){
			pom.css("display", "none");	
		}
		pom.find(".items_qty").text(max-qty);
		
		// dialogue
		$("#dialog-message").dialog({
			modal: true,
			width: 500, 
			buttons: {
				Ok: function() {
				  $( this ).dialog("close");
				}
			}
		});	
		$("#dialog-message").text(response);
	  }
	});
  });
});
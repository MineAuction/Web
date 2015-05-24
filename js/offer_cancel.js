/**
 * JS for templates/offers_your.tpl
 */
$(document).ready(function(){

  /* DELETE OFFER BY AJAX */
  $('.offer_cancel').click(function(){
		var pom = $(this).parent().parent();
		var row_id = pom.find(".row_id").val();
	
		// send ajax request and get response
		$.ajax({
			url: "php/ajax/cancel_offer.ajax.php",
			type: "get", 
			data:{row_id: row_id},
			success: function(data){
				var returnedData = jQuery.parseJSON(data);
				
				// virtual update max
				pom.css("display", "none");	
			
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
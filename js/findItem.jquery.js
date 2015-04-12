$(document).ready(function(){
	// samotny naseptavac  
	$("#buy_item").autocomplete({
		source: function(request, response) {
			$.ajax({
				url: "http://aukce.lostwar.cz/php/ajax/get_items_list.ajax.php?find=" + $("#buy_item").val() + "",
				dataType: "json",
				data: {
					q: request.term
				},
				success: function(data) {
					response(data);
				}                  
			});
		}, 
		select: function (event, ui) {
			$("#buy_item").val(ui.label);
		}, 
		open: function(event, ui) {
			// nastavi sirku naseptavace
			$(this).autocomplete("widget").css({
				"width": 320
			});
		},
		minLength: 2
	})
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
		return $( "<li>" )
		.append( "<a class='auto_inst'><img src='/ikony/" + item.img + "'>" + item.label + "</a>" )
		.appendTo( ul );
	};  
});
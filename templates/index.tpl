<!DOCTYPE html>
<html lang="en">
  <head>
    {% embed "html_head.tpl" %}{% endembed %} 
  </head>
<body>

  {% embed "header.tpl" %}{% endembed %} 
  {% embed "menu.tpl" %}{% endembed %}

	{% if error is not null %}
		<div class="row">
		  <div class="col-md-8 col-md-offset-2">              
		    <div class="alert alert-danger" role='alert'><strong>Chyba!</strong> {{ error|raw }}!</div>
		  </div>
		</div>     
	{% endif %} 

<div class="main">

  <div class="main-inner">

    <div class="container">
    {% block content %}{% endblock %}

    </div>

    <!-- /container --> 

  </div>

  <!-- /main-inner --> 

</div>

<!-- /main -->



<div class="footer">

  <div class="footer-inner">

    <div class="container">

      <div class="row">

        <div class="span12">{{ settings.authors }}</div>

        <!-- /span12 --> 

      </div>

      <!-- /row --> 

    </div>

    <!-- /container --> 

  </div>

  <!-- /footer-inner --> 

</div>

<!-- /footer --> 

<!-- Le javascript

================================================== --> 

<!-- Placed at the end of the document so the pages load faster --> 

<script src="/bootstrap/js/jquery-1.7.2.min.js"></script> 

<script src="/bootstrap/js/excanvas.min.js"></script> 

<script src="/bootstrap/js/chart.min.js" type="text/javascript"></script> 

<script src="/bootstrap/js/bootstrap.js"></script>

<script language="javascript" type="text/javascript" src="/bootstrap/js/full-calendar/fullcalendar.min.js"></script>


<script src="/js/jquery_ui/jquery-ui.js"></script>
	<link href="/js/jquery_ui/jquery-ui.css" rel="stylesheet">

<script>
function isInt(value) {
  return !isNaN(value) && 
         parseInt(Number(value)) == value && 
         !isNaN(parseInt(value, 10));
}

function toNum(value){
  var strlen = value.length;
  var num;
  
  num = (strlen == 0) ? 0 : value;
  num = (isNaN(num)) ? 0 : value;
  return num;
}

$(document).ready(function(){
  /* Předvyplnění max hovnotou */
  $('.click_max').click(function(){
    $(this).closest('td').next('td').find('.items_count').val($(this).html());
    $(this).closest('td').next('td').find('.items_price').focus();
  });
  
  /* Prodej itemu */
  $('.sell').click(function(){
    var qty = $(this).closest('td').find(".items_count").val();
    var price = $(this).closest('td').find(".items_price").val();
    var max = $(this).parent().parent().find(".items_qty").html();  // prvni parent - td ve kterem je button, druhy - do tr
    
    
    // použít jquery ui dialogy a confirm na potvrzení prodeje
    /*
    var message = "";
    if(!isInt(price)){
      message = "Cena není číslo!";
    }
    else{
      qty = toNum(qty);
      if(qty > toNum(max) || qty <= 0){
        message = "Nemůžeš prodat víc, než máš!";
      }
      else{
        message = "Prodáno ;)";
      }
    }
    
    $("#window_message").text(message);
    
    $("#dialog-message").dialog({
      modal: true,
      width: 500, 
      buttons: {
        Ok: function() {
          $( this ).dialog( "close" );
        }
      }
    });
    */
  });
});
</script>

<div id="dialog-message" title="Chyba při prodeji" style='display: none;'>
  <p>
    <span class="ui-icon ui-icon-closethick" style="float:left; margin:0 7px 50px 0;"></span>
    <span id='window_message'></span>
  </p>
</div>

<script src="/bootstrap/js/base.js"></script> 

</body>

</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    {% embed "html_head.tpl" %}{% endembed %} 
  </head>
<body>

  {% embed "header.tpl" %}{% endembed %} 
  {% embed "menu.tpl" %}{% endembed %} 

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

<!-- Placed at the end of the document so the pages load faster -->
<script src="/bootstrap/js/jquery-1.7.2.min.js"></script>
<script src="/bootstrap/js/excanvas.min.js"></script> 
<script src="/bootstrap/js/chart.min.js" type="text/javascript"></script>
<script src="/bootstrap/js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="/bootstrap/js/full-calendar/fullcalendar.min.js"></script>
<script src="/js/jquery_ui/jquery-ui.js"></script>
<link href="/js/jquery_ui/jquery-ui.css" rel="stylesheet">

{% block javascript %}{% endblock %}


<div id="dialog-message" title="Zpráva o prodeji" style='display: none;'>
  <p>
    <span class="ui-icon ui-icon-closethick" style="float:left; margin:0 7px 50px 0;"></span>
    <span id='window_message'></span>
  </p>
</div>

<script src="/bootstrap/js/base.js"></script> 
<script type="text/javascript" src="/js/shortTable/jquery.tablesorter.js"></script> 
<script>
  $(document).ready(function(){       
    $("#table_inventory").tablesorter({ sortList: [[0,0],[0,0]],  headers:{ 2: { sorter: false }, 3: { sorter: false } }} );
    $("#offertable").tablesorter({ sortList: [[0,0],[0,0]] ,  headers:{5: { sorter: false } }} );       
    $("#log").tablesorter({ sortList: [[0,1],[0,0]] } );
  }); 
 </script>   
</body>
</html>

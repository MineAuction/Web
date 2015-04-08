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
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /footer-inner -->
</div>
<!-- /footer --> 


<!-- JavaScript

================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/bootstrap/js/jquery-1.7.2.min.js"></script>
<script src="/bootstrap/js/excanvas.min.js"></script> 
<script src="/bootstrap/js/chart.min.js" type="text/javascript"></script>
<script src="/bootstrap/js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="/bootstrap/js/full-calendar/fullcalendar.min.js"></script>
<script src="/js/jquery_ui/jquery-ui.js"></script>
<link href="/js/jquery_ui/jquery-ui.css" rel="stylesheet">

{% block javascript %}{% endblock %}


<div id="dialog-message" title="Chyba při prodeji" style='display: none;'>
  <p>
    <span class="ui-icon ui-icon-closethick" style="float:left; margin:0 7px 50px 0;"></span>
    <span id='window_message'></span>
  </p>
</div>

<script src="/bootstrap/js/base.js"></script> 

</body>
</html>
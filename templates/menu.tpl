{% block menu %}

  <div class="subnavbar">
    <div class="subnavbar-inner"> 
      <div class="container">
        <ul class="mainnav">          
          {% for item in menu %}
						{% if item.submenu is iterable %}
							<li class="dropdown {{ item.active }}"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="{{ item.ico }}"></i><span>{{ item.name }}</span> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								{% for subitem in item.submenu %}
									<li><a href="?page={{ subitem.url }}">{{ subitem.name }}</a></li>
								{% endfor %}            
							</ul>
						{% else %}
							<li class="{{ item.active }}"><a href="?page={{ item.url }}"><i class="{{ item.ico }}"></i><span>{{ item.name }}</span> </a></li> 
						{% endif %}
          {% endfor %}
        </ul>
      </div> 
      <!-- /container -->  
    </div>           
    <!-- /subnavbar-inner --> 
  </div>

{% endblock %}

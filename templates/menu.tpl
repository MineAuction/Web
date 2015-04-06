{% block menu %}

  <div class="subnavbar">
    <div class="subnavbar-inner"> 
      <div class="container">
        <ul class="mainnav">          
          {% for item in menu %}
            <li class="{{ item.active }}"><a href="?page={{ item.url}}"><i class="{{ item.ico}}"></i><span>{{ item.name}}</span> </a></li>
          {% endfor %}
        </ul>
      </div> 
      <!-- /container -->  
    </div>           
    <!-- /subnavbar-inner --> 
  </div>

{% endblock %}

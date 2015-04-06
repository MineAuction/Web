{% block head %}

  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner"> 
      <div class="container">  

        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span><span class="icon-bar"></span>  
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="?page=inventory">
          <img src='/images/dia_small.png' alt='Diamond'>
          <span>{{ settings.pageTitle }}</span>   
        </a>   

        <div class="nav-collapse"> 
          <ul class="nav pull-right">                  
            {% if session.playerId %}
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> {{ session.playerName }}<b class="caret"></b></a>
                <ul class="dropdown-menu">  
                  <li><a href="">Profile</a></li>  
                  <li><a href="index.php?page=logout">Logout</a></li>  
                </ul>   
              </li>  					
            {% else %}
              <li class="">						
  						  <a href="signup.html" class="">Don't have an account?</a>
  						</li>
            {% endif %} 
          </ul>  
        </div>  				
        <!--/.nav-collapse --> 
      </div>
      <!-- /container -->   
    </div>  
    <!-- /navbar-inner -->   
  </div>
  <!-- /navbar --> 

{% endblock %}

{% block head %}

  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner"> 
      <div class="container">  

        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span><span class="icon-bar"></span>  
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="index.php">
          <img src='/images/dia_small.png' alt='Diamond'>
          <span>{{ settings.pageTitle }}</span>   
        </a>   

        <div class="nav-collapse"> 
          <ul class="nav pull-right">                  
            {% if session.playerID %}
              <li>
                 <a class="dropdown-toggle"><i class="icon-credit-card"></i> {{ player_money }} {{ settings.currency }}</a>              
              </li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> {{ session.playerName }}<b class="caret"></b></a>
                <ul class="dropdown-menu">  
                  <li><a href="?page=settings">Settings</a></li>  
                  <li><a href="?page=logout">Logout</a></li>  
                </ul>   
              </li> 
            {% elseif pageURL != "faq" %}
              <li class="">						
  						  <a href="index.php?page=faq" class=""><i class='icon-comment'></i> FAQ</a>
  						</li>
						{% else %}
							<li class="">						
								<a href="index.php?page=login" class=""><i class='icon-key'></i> Login</a>
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

<!DOCTYPE html>
<html lang="en">
  <head>
    {% embed "html_head.tpl" %}{% endembed %} 
    <link href="/bootstrap/css/pages/signin.css" rel="stylesheet" type="text/css">
  </head>
<body>
	{% embed "header.tpl" %}{% endembed %} 

	{% if error is not null %}
		<div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Upozornění:</strong> {{ error|raw }}
		</div>   
	{% endif %} 

<div class="account-container">	
	<div class="content clearfix">		
		<form action="#" method="post">		
			<h1>{{ lang.login_h1 }}</h1>			
			<div class="login-fields">				
				<p>{{ lang.login_h2 }}</p>
					
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="Minecraft username" class="login username-field" required />
				</div>
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field" required />
				</div> 
				
			</div>
			
			<div class="login-actions">								
				<button class="button btn btn-success btn-large">{{ lang.login_butt }}</button>				
			</div> <!-- .actions -->
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div>
        <div class="span6">&copy; 2015 by Sekiphp, Sognus, DvnBthlo</div>
				<div class="span6 to_right"><a href='http://github.com/Sekiphp/MineAuction'>MineAuction GitHub <span class='icon-github'></span></a></div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /footer-inner -->
</div>
<!-- /footer --> 



<script src="/bootstrap/js/jquery-1.7.2.min.js"></script>
<script src="/bootstrap/js/bootstrap.js"></script>
<script src="/bootstrap/js/signin.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    {% embed "html_head.tpl" %}{% endembed %} 
    <link href="/bootstrap/css/pages/signin.css" rel="stylesheet" type="text/css">
  </head>
<body>
	{% embed "header.tpl" %}{% endembed %} 


		{% if error is not null %}
			<div class="row">
		  		<div class="span12">              
		          <div class="alert alert-danger" role='alert'><strong>Chyba!</strong> {{ error|raw }}!</div>
		    	</div>
			</div>     
		{% endif %} 

<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="#" method="post">
		
			<h1>Member Login</h1>		
			
			<div class="login-fields">
				
				<p>Please provide your details</p>
				
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="Minecraft username" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Keep me signed in(future)</label>
				</span>
									
				<button class="button btn btn-success btn-large">Sign In</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->



<script src="/bootstrap/js/jquery-1.7.2.min.js"></script>
<script src="/bootstrap/js/bootstrap.js"></script>

<script src="/bootstrap/js/signin.js"></script>

</body>

</html>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<!-- Compiled and minified CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/materialize.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
      <!-- Compiled and minified JavaScript -->
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/materialize.js"></script>
      <!-- For load material icon -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="row"></div>
<div class="row">
        <div class="col s10 m5 l4 offset-l4 offset-m4 offset-s1">
	        <div class="card">
	        	<div class="card-content light-blue white-text ">
		              <span class="card-title">Login</span>
		            </div>
		            <?php echo form_open("user/login"); ?>
		          	<div class="card-content black-text">
		          		<div class="row">
					        <div class="input-field col s12">
					           <label for="email">Email</label>
    							<input type="text" id="email" name="email" value="" />
			            <div class="row">
					        <div class="input-field col s12">
					        <label for="pass">Password</label>
							<input type="password" id="pass" name="pass" value="" />
					        </div>
					    </div> 
		          		</div>
		          		<div class="row">
		          			<button class="btn waves-effect waves-light btn-small right" type="submit" class="" value="Sign in"/>Sign In
                            <i class="material-icons right">send</i>
                          </button>
		          		</div>
		          	<?php echo form_close(); ?>
		          		<div class="row">
		          			Don't have an account? <a href="<?php echo site_url('user/signup');?>">Sign Up</a>
		          		</div>
		        </div>  	
	        </div>
      </div> 
    </div> 
</div> 
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
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
		              <span class="card-title">Create new account</span>
		            </div>
		            <?php echo validation_errors('<p class="error">'); ?>
					<?php echo form_open("user/registration"); ?>
		          	<div class="card-content black-text">
		          		<div class="row">
					        <div class="input-field col s12">
					          <label for="user_name">User Name:</label>
							  <input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" />
					      </div>
		          		<div class="row">
					        <div class="input-field col s12">
					         <label for="email_address">Your Email:</label>
							<input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
			            <div class="row">
					        <div class="input-field col s12">
					          <label for="password">Password:</label>
							<input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
						<div class="row">
					        <div class="input-field col s12">
					          <label for="con_password">Confirm Password:</label>
							<input type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
					        </div>
					    </div> 
		          		</div>
		          		<div class="row">
		          			<button class="btn waves-effect waves-light btn-small right" type="submit" value="Submit">Sign Up
                            <i class="material-icons right">send</i>
                          </button>
		          		</div>
		          	<?php echo form_close(); ?>
		        </div>  	
	        </div>
      </div> 
    </div> 
</div> 
</body>
</html>
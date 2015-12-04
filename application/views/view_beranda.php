 <!DOCTYPE html>
  <html>
    <head>
      <title>Moment</title>
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
      <script type="text/javascript">
      $('.fixed-action-btn').openFAB();
      $('.fixed-action-btn').closeFAB();
      </script>
      <script type="text/javascript" >
        // Initialize collapse button
        $(document).ready(function(){
        // Hide sideNav
        $('.button-collapse').sideNav();
          });
      </script>
      <?php echo $map['js']; ?>
    </head>
    <body>

      <!-- Navigation bar -->
      <nav class="navbar-custom">
        <div class="nav-wrapper">
              <ul id="slide-out" class="side-nav custom-sidebar full">
                <li></li>
                <li></li>
                  <li><a href="#"><i class="fa fa-home left"></i>Home</a></li>
                  <li class="divider"></li>
                  <li class="no-padding">
                    <ul class="collapsible collapsible-accordion custom-sidebar">
                      <li>
                        <a class="collapsible-header">My Profile<i class="fa fa-user left"></i><i class="material-icons right">arrow_drop_down</i></a>
                        <div class="collapsible-body">
                          <ul>
                            <li><a href="#!">Profile Picture</a></li>
                            <li><a href="#!">Edit Detail Profile</a></li>
                            <li><a href="#!">Change Password</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-question-circle left"></i>Help</a></li>
                  <li><a href="<?php echo site_url('user/logout');?>"><i class="fa fa-sign-out left"></i>Logout</a></li>
                </ul>
            <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="large mdi-navigation-menu"></i></a>
            <a href="" class="brand-logo center">My Moment</a>
            <ul class="right hide-on-med-and-down">
              <li><i class="fa fa-user left"></i>Welcome, <?php echo $this->session->userdata('user_name');?></li>
              <li><a href=""><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
      </nav>
      <!-- Post Moment-->
      <div class="row">
          <div class="col l9 m6 s12">
         <?php echo $map['html']; ?>
         </div>
          <div class="col l3 m6 s12">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                    <?php echo validation_errors('<p class="error">'); ?>
                    <?php echo form_open("timeline/input"); ?>
                      <span class="card-title">Post Your Moment</span>
                     <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">mode_edit</i>
                          <textarea name="caption" id="caption" class="materialize-textarea" length="100" value="<?php echo set_value('caption'); ?>"></textarea>
                          <label for="caption">Write your status</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">location_on</i>
                          <input type="text" name="location" value="<?php echo set_value('location'); ?>" id="myPlaceTextBox" class="validate" length="50"/ placeholder="Enter your location">
                        </div>
                         <button class="btn waves-effect waves-light btn-small right" type="submit" name="action">Post
                            <i class="material-icons right">send</i>
                          </button>
                    </div>
                    <?php echo form_close(); ?>  
              </div>    
            </div>
          </div>
      </div>
      <!-- Floating Action Button -->
      <div class="row">
          <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large floating-button-custom" href="<?php echo site_url('timeline');?>">
            <i class="large material-icons">schedule</i>
            </a>
        </div>
      </div>
    </body>
  </html>
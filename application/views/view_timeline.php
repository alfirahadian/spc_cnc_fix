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
                            <li><a href="<?php echo site_url('user/logout');?>">Change Password</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-question-circle left"></i>Help</a></li>
                  <li><a href="<?php echo site_url('user/logout');?>"><i class="fa fa-sign-out left"></i>Logout</a></li>
                </ul>
            <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="large mdi-navigation-menu"></i></a>
            <a href="" class="brand-logo center">Timeline</a>
            <ul class="right hide-on-med-and-down">
              <li><i class="fa fa-user left"></i>Welcome, <?php echo $this->session->userdata('user_name');?></li>
              <li><a href=""><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
      </nav>
<?php 
    if (is_array($timeline)){
      foreach ($timeline as $key ) {
        $username = $key->username;
        $caption = $key->caption;
        $location = $key->location;
        $time = $key->time;
        $tanggal = date_create($time)
?>
      <!-- Timeline -->
      <div class="row">
        <div class="col s12 m7 l5 offset-l3">
          <div class="card z-depth-2">
            <div class="card-content">
              <span class="light-blue-text"><?php echo $username ?><span class="deep-orange-text"> <?php echo date_format($tanggal, "D, d-M-Y H:i:s") ?></span> <br>
              Location : <span class="light-blue-text"><?php echo $location?></span></br>
              <span class="grey-text flow-text"><?php echo $caption ?></span>
            </div>
          </div>
        </div>
<?php
    }
}
?>      
     
            
      <!-- Floating Action Button -->
      <div class="row">
          <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large floating-button-custom" href="<?php echo site_url('Beranda');?>">
            <i class="large material-icons">room</i>
            </a>
        </div>
      </div>
    </body>
  </html>
<html>
  <head> 
    <title> <?php echo $title; ?> | weGym </title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/materialize/materialize.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fontawesome/css/all.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/ionicons/css/ionicons.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/materialize/materialize-social.css" />
    <link href="<?php echo base_url(); ?>assets/materialize/iconfont/material-icons.css" rel="stylesheet" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css" />

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/js/jquery.min.js"> </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/materialize/materialize.min.js"> </script>  
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"> </script> 
  </head>

  <script>
    $(document).ready(function(){
      M.AutoInit();

      $('.chip').dropdown({
          inDuration: 300,
          outDuration: 225,
          condtrainWidth: false,
          hover: true,
          gutter: 0,
          belowOrigin: true,
          alignment: 'left',
          stopPropagation: false
        });

        // var current = '';

        // switch(current)
        // {
        //   case 'home':
        //     $('.sidenav li:nth-child(2)').addClass('active');

        //   case 'profile':
        //     $('.sidenav li:nth-child(3)').addClass('active');

        //   case 'password':
        //     $('.sidenav li:nth-child(4)').addClass('active');

        //   case 'schedule':
        //     $('.sidenav li:nth-child(5)').addClass('active');

        //   default:
        //     $('.sidenav li').addClass('');
        //     break;
        // }

        // $('.sidenav li a').click(function(e){
            // $(this).addClass('active');

            // $('sidenav li.active').removeClass('active');

          //  var $parent = $(this).parent();
          //  $parent.addClass('active');
          //  e.preventDefault();

            // $(this).addClass('active');
            // e.preventDefault();
        // });

        // $('.modal').modal({
        //   dismissible: false,
        //   });
    });
  </script>

  <body>
  <div class="navbar-fixed">
    <nav class="light-blue lighten1"> 
      <div class="nav-wrapper">
      <a href="<?php echo base_url(); ?>user/home" class="brand-logo"> <img src="../img/logo.png" alt="logo" style="padding-left: 10px; padding-top:10px; height:50px; width:120px;"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down"> 
          <li>
            <a href="#"> 
              <div class="chip" style="margin-top: 15px;" data-target="user-Dropdown">
                <img src="../img/avatar/avatar-12.png" alt="User">
                <?php echo $data->username; ?>
              </div>
            </a>
          </li>
        </ul>

        <ul id="user-Dropdown" class="dropdown-content">  
          <li> 
            <a href="<?php echo base_url(); ?>user/profile" class="red-text">
              <i class="material-icons">face</i>
              Profile
            </a>
          </li>

          <li> 
            <a href="<?php echo base_url(); ?>user/password" class="red-text">
              <i class="material-icons">settings</i>
              Change Password
            </a>
          </li>

          <li> 
            <a href="<?php echo base_url() ?>user/logout" class="red-text">
              <i class="material-icons">keyboard_tab</i>
              Logout
            </a>
          </li>        
        </ul>
      </div>
    </nav>
  </div>

    <ul class="sidenav sidenav-fixed inevisible-top" id="mobile-demo" style="background-image: url(../img/11.jpg)"> 
      <li> 
        <div class="user-view"> 
          <div class="background"> 
            <img src="../img/1.jpg">
          </div>
          <a href="#user"><img class="circle" src="../img/2.jpg"></a>
          <a href="#name"><span class="white-text name"><?php echo $data->username; ?></span></a>
          <a href="#email"><span class="white-text email"><?php echo $data->email; ?></span></a>
        </div>
      </li>
      
      <li class="<?php if($current == 'home'){echo 'active';} ?>"><a href="<?php echo base_url(); ?>user/home"><i class="fas fa-cloud"> </i>My Account</a></li>
      <li class="<?php if($current == 'profile'){echo 'active';} ?>"><a href="<?php echo base_url(); ?>user/profile"><i class="fas fa-user"> </i>My Profile</a></li>
      <li class="<?php if($current == 'password'){echo 'active';} ?>"><a href="<?php echo base_url(); ?>user/password"><i class="fas fa-bolt"></i>Change Password</a></li>
      <li class="<?php if($current == 'schedule'){echo 'active';} ?>"><a href="<?php echo base_url(); ?>user/schedule"><i class="fas fa-tasks"> </i>My Schedule</a></li>
      <!-- <li><a href="#">Second Link</a></li> -->
      <li class="no-padding"> 
        <ul class="collapsible collapsible-accordion"> 
          <li> 
            <a class="collapsible-header waves-effect"><i class="material-icons">reorder</i>My Orders</a>
            <div class="collapsible-body"> 
              <ul> 
                <li class="<?php if($current == 'book'){echo 'active';} ?>"><a href="<?php echo base_url() ?>user/book"><i class="material-icons">list</i>Book a session</a></li>
                <li class="<?php if($current == 'view'){echo 'active';} ?>"><a href="<?php echo base_url() ?>user/view"><i class="material-icons">visibility</i>View</a></li>
                <!-- <li><a href="<?php echo base_url() ?>user/view"><i class="material-icons">delete</i>Delete</a></li> -->
              </ul>
            </div>
          </li>
        </ul>
      </li>

      <li><div class="divider"> </div></li>
      <!-- <li><a class="subheader">Subheader</a></li> -->
      <li><a class="waves-effect" href="<?php echo base_url() ?>user/logout"><i class="fas fa-arrow-left"> </i>Log out</a></li>

      <div class="container"> 
        <a class="waves-effect waves-light btn-floating btn-small social twitter">
          <i class="fab fa-twitter"></i>
        </a>

        <a class="waves-effect waves-light btn-floating btn-small social facebook">
          <i class="fab fa-facebook"></i>
        </a>

        <a class="waves-effect waves-light btn-floating btn-small social instagram">
          <i class="fab fa-instagram"></i>
        </a>

        <a class="waves-effect waves-light btn-floating btn-small social github">
          <i class="fab fa-github"></i>
        </a>

        <a class="waves-effect waves-light btn-floating btn-small social whatsapp">
          <i class="fab fa-whatsapp"></i>
        </a>

        <a class="waves-effect waves-light btn-floating btn-small social linkedin">
          <i class="fab fa-linkedin"></i>
        </a>
      </div>
    </ul>

  </body>
  
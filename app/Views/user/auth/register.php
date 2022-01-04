<html>
    <head>
        <title> Register | Gym </title>
        <!-- Css files -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/bootstrap/css/mdb.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/fontawesome/css/all.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/ionicons/css/ionicons.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style.css" />

        <!-- Js files -->
        <script type="text/javascript" src="<?php echo base_url() ?>/assets/jquery/js/jquery.js"> </script>
        <script type="text/javascript" src="<?php echo base_url() ?>/assets/bootstrap/js/bootstrap.min.js"> </script>
        <script type="text/javascript" src="<?php echo base_url() ?>/assets/bootstrap/js/mdb.js"> </script>
    </head>

    <body id="login">
    <a class="btn waves-effect" id="back" style="border-radius: 40px;" href="<?php echo base_url(); ?>"> <i class="fas fa-long-arrow-alt-left" style="padding-right:10px;"> </i>Go back Home</a>
        <div class="col-lg-6 col-md-8 container" style="margin-top: 50px;"> 
              <?php if(session()->getFlashdata('success')){ ?>
                <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Error!</strong> <?php echo $this->session->getFlashdata('success') ?>
                </div>
              <?php } ?>

              <?php if(session()->getFlashdata('error')){ ?>
                <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Error!</strong> <?php echo $this->session->getFlashdata('error') ?>
                </div>
              <?php } ?>
           
            <div class="card">
                <h5 class="card-header info-color white-text text-center"> 
                  <strong>Register</strong>
                </h5>

                <?php if (! empty($errors)) : ?>
                      <div class="alert alert-danger">
                        <p><?= reset($errors) ?></p>
                      </div>
                <?php endif ?>

                <div class="card-body px-lg-5 pt-0">
                    <form class="text-center" method="post" action="<?php echo base_url() ?>/user/register ">

                      <div class="row">
                        <div class="col-md-6">
                          <div class="md-form mb-0">
                            <input class="form-control validate mb-0" type="text" id="surname" name="surname" />
                            <label for="surname">Surname</label>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="md-form mb-0">
                            <input class="form-control validate mb-0" type="text" id="firstname" name="firstname"  />
                            <label for="firstname">Firstname</label>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="md-form mb-0"> 
                            <input class="form-control validate mb-0" type="text" id="othername" name="othername"  />
                            <label for="othername">Othername</label>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="md-form mb-0"> 
                            <input type="text" class="form-control validate mb-0" id="username" name="username"  />
                            <label for="username">Username</label>
                          </div>
                        </div>
                      </div>  

                      <div class="md-form">
                        <input class="form-control validate" type="text" id="email" name="email"  />
                        <label for="email">Email</label>
                      </div>

                      <div class="md-form"> 
                        <input class="form-control validate" type="password" id="password" name="password"  />
                        <label for="password">Password</label>
                      </div>

                      <button class="btn btn-info waves-effect btn-block" name="submit" style="border-radius:20px;">Sign up</button>
                      <!-- <i class="red-text"><?php echo session()->getFlashdata('message') ?></i> -->

                      <p> Already a member?
                        <a href="./login">Sign in</a>
                      </p>

                      <a type="button" class="btn-floating btn-fb btn-sm"> 
                        <i class="ion-social-facebook" style="color:#33b5e5;"> </i>
                      </a>

                      <a type="button" class="btn-floating btn-fb btn-sm"> 
                        <i class="ion-social-twitter" style="color:#33b5e5;"> </i>
                      </a>

                      <a type="button" class="btn-floating btn-fb btn-sm"> 
                        <i class="ion-social-linkedin" style="color:#33b5e5;"> </i>
                      </a>

                      <a type="button" class="btn-floating btn-fb btn-sm"> 
                        <i class="ion-social-github" style="color:#33b5e5;"> </i>
                      </a>

                    </form>
                </div>
            </div>
        </div>
       
    </body>

    <script>
      window.setTimeout(function() {
          $(".alert").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
          });
      }, 3000);
    </script>

</html>    
<html>
    <head>
        <title> Login | Gym </title>
        <!-- Css files -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/bootstrap/css/mdb.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/fontawesome/css/all.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/ionicons/css/ionicons.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/toastify/toastify.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style.css" />

        <!-- Js files -->
        <script type="text/javascript" src="<?php echo base_url() ?>/assets/jquery/js/jquery.js"> </script>
        <script type="text/javascript" src="<?php echo base_url() ?>/assets/bootstrap/js/bootstrap.min.js"> </script>
        <script type="text/javascript" src="<?php echo base_url() ?>/assets/bootstrap/js/mdb.js"> </script>
        <script type="text/javascript" src="<?php echo base_url() ?>/assets/toastify/toastify.min.js"> </script>

        <script type="text/javascript">
          $(document).ready(function(){
            window.setTimeout(function(){
              $('.alert').fadeTo(500,0).slideUp(500, function(){
                  $(this).remove;
              });
            }, 2000);
          })
        </script>
    </head>

    <body id="login">
        <a class="btn waves-effect" id="back" style="border-radius: 40px;" href="<?php echo base_url() ?>/"> <i class="fas fa-long-arrow-alt-left" style="padding-right:10px;"> </i>Go back Home</a>
        <div class="col-lg-6 container" style="margin-top: 50px;"> 
        
              <?php if(session()->getFlashdata('message')){ ?>
                <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Error!</strong> <?php echo $this->session->getFlashdata('message') ?>
                </div>
              <?php } ?>

              <?php if(session()->getFlashdata('pass_suc')){ ?>
                <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Success!</strong> <?php echo $this->session->getFlashdata('pass_suc') ?>
                </div>
              <?php } ?>

            <div class="card">
                <h5 class="card-header info-color white-text text-center"> 
                  <strong>Sign in</strong>
                </h5>

                <div class="card-body px-lg-5 pt-0">
                  <?php echo form_open('', ['class' => 'text-center', 'id' => 'loginForm']) ?>
                    <div class="md-form"> 
                      <?php echo form_input(
                        [
                          'name' => 'email',
                          'id' => 'email',
                          'class' => 'form-control validate'
                        ]
                      ) ?>
                      <?php echo form_label('Email', '',['for' => 'email']) ?>
                    </div>

                    <div class="md-form"> 
                      <?php echo form_input(
                        [
                          'name' => 'password',
                          'id' => 'password',
                          'type' => 'password',
                          'class' => 'form-control validate'
                        ]
                      ) ?>
                      <?php echo form_label('Password', '',['for' => 'password']) ?>
                    </div>

                    <div class="d-flex justify-content-between"> 
                      <div> 
                        <div class="form-check">
                          <?php echo form_input(
                          [
                            'id' => 'remember',
                            'type' => 'checkbox',
                            'class' => 'form-check-input'
                          ]
                          ) ?>
                          <?php echo form_label('Remember me', '',['for' => 'remember', 'class' => 'form-check-label']) ?>
                        </div>
                      </div>

                      <div> 
                        <a href="">Forgot password?</a>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="button" class="btn btn-info waves-effect btn-block my-4" onclick="login()" style="border-radius: 40px;" >Sign in</button>
                    </div>

                    <!-- <button onclick="save()" class="btn btn-info waves-effect btn-block my-4" type="submit" name="submit" id="submit" style="border-radius: 40px;">Sign in</button> -->

                    <p> Not a member?
                      <a href="<?php echo base_url() ?>/register">Register</a>
                    </p>
                  <?php echo form_close() ?>
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

      function login(){
        let email = $('#loginform #email').val();
        let password = $('#loginform #password').val();

        if(email == ''){
          Toastify({
            text: 'Email field is required',
            duration: 5000,
            close: true,
          }).showToast();
          return;
        }

        if(password == ''){
          Toastify({
            text: 'Password field is required',
            duration: 5000,
            close: true,
          }).showToast();
          return;
        }

        //Serialize form data
        var frmData = {};
        var data = $('#loginForm').serializeArray({checkboxesAsBools: false});

        $.each(data, function (key, input) {
            frmData[input.name] = input.value;
        });

        $.ajax({
            type: 'POST',
            url: '<?php base_url() ?>/User/login',
            data: frmData,
            beforeSend: () => {
                $('#loginForm .btn').text('Loading...');
            },
            success: function (response){
                if(response == 'success')
                {
                    Toastify({
                      text: 'Successfully logged in',
                      duration: 5000,
                      close: true,
                      style: {
                        background: "green",
                      },
                    }).showToast();
                    window.location.replace("<?php echo base_url() ?>/user/home");
                }

                else
                {
                    $('#loginForm .btn').text('Sign in');
                    Toastify({
                      text: response,
                      duration: 5000,
                      close: true,
                      style: {
                        background: "red",
                      },
                    }).showToast();
                }
            },

            error: function(response) {
              Toastify({
                text: response,
                duration: 5000,
                close: true,
              }).showToast();
            }
        });
      }
    </script>
</html>    
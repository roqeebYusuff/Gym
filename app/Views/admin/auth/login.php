<html>
    <head>
        <title>Admin</title>

        <link href="<?php echo base_url(); ?>assets/materialize/materialize.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/fontawesome/css/all.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/materialize/materialize-social.css" rel="stylesheet" /> 
        <link href="<?php echo base_url(); ?>assets/materialize/iconfont/material-icons.css" rel="stylesheet" /> 
        <link href="<?php echo base_url(); ?>assets/admin.css" rel="stylesheet" /> 
        
        <script src="<?php echo base_url(); ?>assets/jquery/js/jquery.min.js" type="text/javascript"> </script>
        <script src="<?php echo base_url(); ?>assets/materialize/materialize.min.js" type="text/javascript"> </script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"> </script>

    </head>

    <script>
        $(document).ready(function(){
            M.AutoInit();
            
        });
    </script>

  <body>
    <div class="col-md-3 container" style="margin-top: 100px;">
        
        <div class="card">

            <h5 class="card-header text-center blue lighten-2 white-text"> 
              Signin
            </h5>

            <div class="card-body text-center">
 
                <form method="post" action="<?php echo base_url() ?>admin/login" id="form"> 
                  <div class="input-field"> 
                    <i class="material-icons prefix">account_circle</i>
                    <input class="validate" type="text" name="username" id="username" /> 
                    <label for="username">Username</label>
                  </div>    

                  <div class="input-field"> 
                    <i class="material-icons prefix">lock</i>
                    <input class="validate" type="password" name="password" id="password" /> 
                    <label for="password">Password</label>
                  </div>

                  <p>
                    <button class="col-md-10 btn btn-info waves-effect" name="submit" id="submit" style="border-radius:50px; margin-top:15px;">Login </button>
                  </p>
                </form>

            </div>
        </div>
    </div>
  </body>

  <script type="text/javascript">
      var message = '<?php echo $this->session->flashdata('message'); ?>';
      var success = '<?php echo $this->session->flashdata('change_success'); ?>';

      if(success != '')
      {
          M.toast({
              html: success,
              classes: 'green darken-1',
              displayLength: 5000,
              inDuration: 3000,
              outDuration: 3000
          });
      }
      
      if(message != '')
      {
        M.toast({
          html: message,
          classes: 'red darken-1',
          displayLength: 5000,
          inDuration: 3000,
          outDuration: 3000
        });
      }  
  </script>
</html>

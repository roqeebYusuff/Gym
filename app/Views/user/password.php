<div class="container wrapper">
      <div class="card"> 
        <div class="card-header text-center text-uppercase bg-success white-text" style="font-weight:bold;">Change Password</div>
        <div class="card-content"> 
          <div class="container">
            <form method="post" action="<?php echo base_url() ?>user/password"> 
              <input type="hidden" name="id" value="<?php echo $data->id; ?>" />
              <input type="hidden" name="pass" value="<?php echo $data->password; ?>" />

              <div class="input-field"> 
                <input class="validate" id="cpassword" type="text" name="old_pass" />
                <label for="cpassword"> Current Password </label>
              </div>

              <div class="row">   
                <div class="input-field col s3"> 
                  <input class="validate" id="npassword" type="password" name="new_pass" />
                  <label for="npassword"> New Password </label>
                </div>

                <div class="input-field col s3"> 
                  <input class="validate" id="cnpassword" type="password" name="confirm_pass" />
                  <label for="cnpassword"> Confirm Password </label>
                </div>
              </div>


              <div class="right">
                <input type="submit" name="change_pass" class="btn btn-success" value="Change Password">
              </div>
            </form>           
          </div>
        </div>
      </div>
</div>

<script>
    $success = '<?php echo $this->session->flashdata('pass_suc'); ?>';
    $error = '<?php echo $this->session->flashdata('pass_err'); ?>'

    if($success != ''){
        M.toast({
            html: $success,
            classes: 'green darken-1'
        });
    }

    if($error != ''){
        M.toast({
            html: $error,
            classes: 'red darken-1'
        });
    }

</script>
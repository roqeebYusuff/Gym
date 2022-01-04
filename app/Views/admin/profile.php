<div class="container" id="content"> 
      <div class="row"> 
          <div class="col s12 m8 14" style="margin-right: 30px;"> 
            <div class="card-panel">
              <form method="post" action="<?php echo base_url('admin/update_profile') ;?>">
                <input type="hidden" name="id" id="id" value="<?php echo $data->id; ?>" />
                <div class="input-field">
                  <input class="validate" type="text" id="surname" name="surname"  value="<?php echo $data->surname; ?>" />
                  <label for="surname">Surname</label>
                </div>

                <div class="input-field">
                  <input class="validate" type="text" id="firstname" name="firstname"  value="<?php echo $data->firstname; ?>" />
                  <label for="firstname">Firstname</label>
                </div>

                <div class="input-field">
                  <input class="validate" type="text" id="username" name="username" value="<?php echo $data->username; ?>" />
                  <label for="username">Username</label>
                </div>

                <div class="input-field">
                  <input class="validate" type="email" id="email" name="email" value="<?php echo $data->email; ?>" />
                  <label for="email">Email</label>
                </div>

                <div class="right">
                  <button type="submit" name="update" class="btn btn-success waves-effect waves-light">Edit profile</button>
                </div>
              </form>
            </div>
          </div>

          <div class="col s12 m4 l4">
            <div id="profile-card" class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="../img/12.jpg" alt="user bg">
              </div>

              <div class="card-content">
                <img src="images/avatar/avatar-7.png" alt="" class="circle responsive-img activator card-profile-image cyan lighten-1 padding-2">
                <a class="btn-floating activator waves-effect waves-light red accent-2 z-depth-4 right">
                  <i class="material-icons">edit</i>
                </a>
                <span class="card-title activator grey-text text-darken-4"><?php echo ucfirst($data->username); ?></span>
                <p>
                  <i class="material-icons">perm_identity</i> Administrator</p>
                <p>
                  <i class="material-icons">perm_phone_msg</i> +1 (612) 222 8989</p>
                <p>
                  <i class="material-icons">email</i>  <?php echo $data->email; ?></p>
              </div>

              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><?php echo ucfirst($result->username); ?>
                  <i class="material-icons right">close</i>
                </span>

                <p>Here is some more information about this card.</p>
                  <p>
                      <i class="material-icons">perm_identity</i> 
                      Administrator
                  </p>

                  <p>
                      <i class="material-icons">perm_phone_msg</i> +1 (612) 222 8989
                  </p>

                  <p>
                      <i class="material-icons">email</i> <?php echo $data->email; ?>
                  </p>

                  <p>
                      <i class="material-icons">cake</i> 18th June 1990
                  </p>
                
              </div>
              
          </div>
      </div>
</div>

<script>
  var success = '<?php echo $this->session->flashdata('update_success'); ?>';
  var error = '<?php echo $this->session->flashdata('update_error'); ?>';

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

  if(error != '')
  {
    M.toast({
      html: error,
      classes: 'red darken-1',
      displayLength: 5000,
      inDuration: 3000,
      outDuration: 3000
    });
  }
</script>
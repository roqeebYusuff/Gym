<div class="container wrapper">
      <div class="card"> 
        <div class="card-header text-center text-uppercase bg-success white-text" style="font-weight:bold;">Edit Profile</div>
        <div class="card-content"> 
          <div class="container">
            <form method="post" action="<?php echo base_url(); ?>user/update_profile"> 
              <input type="hidden" name="id" value="<?php echo $profile->id; ?>" />
              <div class="row">   
                <div class="input-field col s5"> 
                  <input class="validate" id="surname" type="text" name="surname" value="<?php echo $profile->surname; ?>"/>
                  <label for="surname"> Surname </label>
                </div>

                <div class="input-field col s3"> 
                  <input class="validate" id="username" type="text" name="username" value="<?php echo $profile->username; ?>"/>
                  <label for="username"> Username </label>
                </div>

                <div class="input-field col s4"> 
                  <input class="validate" id="email" type="email" name="email" value="<?php echo $profile->email; ?>"/>
                  <label for="email"> Email </label>
                </div>
              </div>

              <div class="row"> 

                <div class="input-field col s6"> 
                  <input class="validate" id="firstname" type="text" name="firstname" value="<?php echo $profile->firstname; ?>" />
                  <label for="firstname"> Firstname </label>
                </div>

                <div class="input-field col s6"> 
                  <input class="validate" id="othername" type="text"  name="othername"value="<?php echo $profile->othername; ?>" />
                  <label for="othername"> Othername </label>
                </div>

              </div>

              <div class="row"> 

                <div class="input-field col s12"> 
                  <input class="validate" id="address" type="text" name="address" value="<?php echo $profile->address; ?>" />
                  <label for="address"> Address </label>
                </div>
              </div>

              <div class="right">
                <button type="submit" name="update" class="btn btn-success">Edit profile</button>
              </div>
            </form>           
          </div>
        </div>
      </div>

  <!-- <div class="container col s3"> 
    <div class="card">
      <div class="card-content"> 
        <div class="card-image">
          <img src="../img/12.jpg" >
        </div>

          <div class="col s m8 offset-m2 l6 offset-l3">
                <div>
                  <img src="../img/6.jpg" alt="" class="circle responsive-img img-fluid" style="height:64px; width:64px;"> 
                </div>

                <div class="col s10">
                  <span class="black-text">
                    This is a square image. Add the "circle" class to it to make it appear circular.
                  </span>
                </div>

          </div>

      </div>
    </div>
  </div> -->

</div>

<script>
    $success = '<?php echo $this->session->flashdata('success'); ?>';
    $error = '<?php echo $this->session->flashdata('error'); ?>'

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
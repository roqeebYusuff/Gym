<div class="container" id="content"> 
    <div class="card">
        <div class="card-content"> 

           <form method="post" action="<?php echo base_url(); ?>admin/password">
                <input type="hidden" name="id" id ="id" value="<?php echo $data->id; ?>" />
                <input type="hidden" name="pass" value="<?php echo $data->password; ?>" /> 
                <div class="input-field"> 
                    <input class="validate" type="password" id="old_password" name="old_password" /> 
                    <label for="old_password">Current Password</label>
                </div>

                <div class="input-field"> 
                    <input class="validate" type="password" id="new_password" name="new_password" /> 
                    <label for="new_password">New Password</label>
                </div>

                <div class="input-field"> 
                    <input class="validate" type="password" id="confirm_pass" name="confirm_pass" /> 
                    <label for="confirm_pass">Confirm Password</label>
                </div>

                <div class="right">
                    <input type="submit" name="change_password" class="btn btn-success" value="Change Password" />
                </div>

                <i> <?php echo $this->session->flashdata('message') ?> </i>
           </form>
        </div>
    </div>
</div>

<script>
    var success = '<?php echo $this->session->flashdata('change_success'); ?>';
    var error = '<?php echo $this->session->flashdata('change_error'); ?>';

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
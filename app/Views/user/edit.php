<div class="container wrapper">
    <div class="card"> 
        <div class="card-content"> 
            <form method="post" action="<?php echo base_url() ?>user/update">
                <div class="row">
                    <input type="hidden" name="id" id="id" value="<?php echo $okay->id; ?>" /> 

                    <div class="input-field col s6"> 
                        <input class="validate" type="text" id="session" name="session" value="<?php echo $okay->session; ?>" />
                        <label for="session">Session</label>
                    </div>

                    <div class="input-field col s6"> 
                        <input class="validate" type="date" id="date" name="name" value="<?php echo $okay->date; ?>" />
                        <label for="date">Date</label>
                    </div>                    
                </div>
                
                <div class="row">
                    <div class="input-field col s6"> 
                        <input class="validate" type="time" id="time" name="time" value="<?php echo $okay->from; ?>" />
                        <label for="time">From</label>
                    </div> 

                    <div class="input-field col s6"> 
                        <input class="validate" type="time" id="time" name="time" value="<?php echo $okay->to; ?>" />
                        <label for="time">To</label>
                    </div> 
                </div>

                <button class="btn btn-success right" type="submit" id="submit" name="submit">Update</button>
                
            </form>
        </div>
    </div>
</div>

<script>
    $success = '<?php echo $this->session->flashdata('up_suc'); ?>';
    $error = '<?php echo $this->session->flashdata('up_er'); ?>'

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
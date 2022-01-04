<div class="container wrapper">
    <div class="card"> 
        <div class="card-content"> 
            <form method="post">
                <div class="row">
                    
                    <div class="input-field col s6"> 
                        <input class="validate" type="text" id="session" name="session" value="Gym" />
                        <label for="session">Session</label>
                    </div>

                    <div class="input-field col s6"> 
                        <input class="validate" type="date" id="date" name="date" />
                        <label for="date">Date</label>
                    </div>                    
                </div>
                
                <div class="row">
                    <div class="input-field col s6"> 
                        <input class="validate" type="time" id="from" name="from" />
                        <label for="from">From</label>
                    </div> 

                    <div class="input-field col s6"> 
                        <input class="validate" type="time" id="to" name="to" />
                        <label for="to">To</label>
                    </div> 
                </div>

                <button class="waves-effect waves-light btn btn-flat green white-text right" type="submit" id="submit" name="book">Book</button>
                
            </form>
        </div>
    </div>
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
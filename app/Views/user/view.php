<!-- <script>
     M.toast({html: 'I am a toast!'})
</script> -->

<div class="container wrapper">
    <div class="card"> 
        <div class="card-content"> 
        <?php if($num_rows > 0): ?>
            <table class="striped highlight centered"> 
                <thead>               
                        <th>Session</th>
                        <th>Date</th>
                        <th>From</th>
                        <th>To</th>  
                        <th>Actions</th>
                </thead>

                <tbody>
               <?php echo $this->session->flashdata('delete_success'); ?>
                       <?php foreach($results as $rows): ?>
                            <tr> 
                                <td><?php echo $rows->session; ?></td>
                                <td><?php echo $rows->date; ?></td>
                                <td><?php echo $rows->from; ?></td>
                                <td><?php echo $rows->to; ?></td>
                                <td>
                                    <a href="<?php echo base_url('user/edit/'.$rows->id) ?>" class="waves-effect waves-light btn-floating btn-small green white-text" title="Edit"><i class="material-icons">edit</i></a>
                                    <a href="#confirm-modal<?php echo $rows->id; ?>" class="waves-effect waves-light btn-floating btn-small red white-text modal-trigger" title="Delete"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            <div id="confirm-modal<?php echo $rows->id; ?>" class="modal">
                                <div class="modal-content">
                                    <h4>Confirm Action</h4>
                                    <p>Are you sure you want to delete the record?</p>
                                </div>

                                <div class="modal-footer">
                                    <a href="<?php echo base_url('user/delete/'.$rows->id) ?>" class="waves-effect waves-light btn btn-flat green">Yes</a>
                                    <a href="" class="modal-action modal-close waves-effect waves-light btn btn-flat red">No</a>
                                </div>
                            </div>
                       <?php endforeach; ?>
                </tbody>
            </table> 
            <?php else: ?> 
                <h1>No Session Booked Yet</h1>    
         <?php endif; ?>
        </div>
    </div>
</div>

<script>
    $up_suc = '<?php echo $this->session->flashdata('up_suc'); ?>';
    $up_er = '<?php echo $this->session->flashdata('up_er'); ?>';
    $delete_success = '<?php echo $this->session->flashdata('delete_success'); ?>';
    $delete_error = '<?php echo $this->session->flashdata('delete_error'); ?>';

    if($up_suc != ''){
        M.toast({
            html: $up_suc,
            classes: 'green darken-1'
        });
    }

    if($up_er != ''){
        M.toast({
            html: $up_er,
            classes: 'red darken-1'
        });
    }

    if($delete_success != ''){
        M.toast({
            html: $delete_success,
            classes: 'green darken-1'
        });
    }

    if($delete_error != ''){
        M.toast({
            html: $delete_error,
            classes: 'red darken-1'
        });
    }
</script>
 
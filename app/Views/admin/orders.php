<div class="container" id="content"> 
    <div class="card">
        <div class="card-content"> 
        <?php if($num_rows > 0): ?>
            <table class="responsive-table striped highlight centered">
                <thead> 
                    <tr> 
                        <th>Customer_Id</th>
                        <th>Sesison</th>
                        <th>Date</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                
                <tbody> 
                    <?php $i = 0; ?>
                    <?php foreach($orders as $row): ?>
                    <tr> 
                        <td><?php echo $row->customer_id ?></td>
                        <td><?php echo $row->session ?></td>
                        <td><?php echo $row->date ?></td>
                        <td><?php echo $row->from ?></td>
                        <td><?php echo $row->to ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/edit/'.$row->id); ?>" class="waves-effect waves-light btn-floating btn-small green white-text" title="Edit"><i class="material-icons">edit</i></a>
                            <a href="#demo-modal<?php echo $row->id; ?>" class="waves-effect waves-light btn-floating btn-small red white-text modal-trigger" title="Delete"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                    <div id="demo-modal<?php echo $row->id; ?>" class="modal">
                        <div class="modal-content">
                            <h4>Confirm Action</h4>
                            <p>Are you sure you want to delete the record?</p>
                        </div>

                        <div class="modal-footer">
                            <a href="<?php echo base_url('admin/delete/'.$row->id) ?>" class="waves-effect waves-light btn btn-flat green">Yes</a>
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
    var success = '<?php echo $this->session->flashdata('del_suc'); ?>';
    var error = '<?php echo $this->session->flashdata('del_err'); ?>';

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
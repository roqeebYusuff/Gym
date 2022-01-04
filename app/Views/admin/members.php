<div class="container" id="content"> 
    <div class="card">
        <div class="card-content"> 
            <table class="container responsive-table striped highlight" id="datatable">
                <thead> 
                    <tr> 
                        <th>Fullname</th>
                        <th>Username</th>
                        <th>Address</th>
                        <th>Email</th>
                        
                    </tr>
                </thead>

                <tbody> 
                    <?php foreach($orders as $row): ?>
                        <tr> 
                            <td><?php echo $row->surname.' '.$row->firstname.' '.$row->othername ?></td>
                            <td><?php echo $row->username ?></td>
                            <td><?php echo $row->address ?></td>
                            <td><?php echo $row->email ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
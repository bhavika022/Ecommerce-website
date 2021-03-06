<div class="container">
    <div class="row">
        <div class="col-lg-12">           
            <h2>Products 
                <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo base_url('admin/create') ?>"> Create New Product</a>
                <a class="btn btn-info" href="<?php echo base_url('admin/generate_pdf') ?>">generate pdf</a>
                </div>
            </h2>
        </div>
    </div>
    <div class="table-responsive">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Status</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $d) { ?>      
        <tr>
            <td><?php echo $d->name; ?></td>
            <td><?php echo $d->description; ?></td> 
            <td><?php echo $d->price; ?></td>
            <td><?php echo $d->status; ?></td>
            <td><?php echo $d->image; ?></td>         
        <td>
            <form method="DELETE" action="<?php echo base_url('admin/delete/'.$d->id);?>">
            <a class="btn btn-warning btn-xs" href="<?php echo base_url('admin/edit/'.$d->id) ?>"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Delete</button>
            </form>
        </td>     
        </tr>
        <?php } ?>
    </tbody>
    </table>
    </div>
</div>
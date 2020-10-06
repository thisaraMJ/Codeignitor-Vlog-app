<?php include "includes/header.php"?>
</br></br></br>

<div class="container">
    <div class="form-group">
        <h2 style="color: mediumseagreen;">View My Posts</h2>
    </div>
    <div class="form-group">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Create Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($posts)>0):?>
                <?php foreach($posts as $post):?>
                <tr>
                    <th><?php echo $post->title;?></th>
                    <td><?php echo $post->text;?></td>
                    <td><?php echo $post->date;?></td>
                    <td>
                        <?php echo anchor("Admin/viewSingle/{$post->id}",'View',['class'=>'badge badge-success']); ?>
                        <?php echo anchor("Admin/update/{$post->id}",'Update',['class'=>'badge badge-warning']); ?>
                        <?php echo anchor("Admin/delete/{$post->id}",'Delete',['class'=>'badge badge-danger']); ?>
                    </td>
                </tr>
                <?php endforeach;?>
                <?php else: ?>
                <tr>
                    <td>No Records Found!</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include "includes/footer.php"?>
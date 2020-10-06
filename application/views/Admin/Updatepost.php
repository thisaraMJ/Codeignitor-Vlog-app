<?php include "includes/header.php"?>

<div class="container p-3 my-3 bg-dark text-white">

    <div class="row justify-content-md-center">

        <div class="col-md-8 col-md-offset-2">

            <h1 style="color: #26bf73;">Update post</h1>

            <?php echo form_error('title','<div class="text-danger">','</div>');?>
            <?php echo form_open("Add/Change/{$post->id}",['class'=>'form-horizontal']); ?>

            <div class="form-group">
                <label for="title">Title <span class="require">*</span></label>
                <input type="text" class="form-control" name="title"  placeholder="<?php echo $post->title;?>" value="<?php echo $post->title;?>" />
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea rows="5" class="form-control" name="text" placeholder="<?php echo $post->text;?>" value="<?php echo $post->text;?>"></textarea>
            </div>

            <!-- <div class="form-group">

                    <div class="form-group">
                        <input  type="file" name="userfile" value=""/>
                    </div>

                    <div class="form-group">   
                        <input  type="submit" name="submit" value="upload image"/>
                    </div>
                
            </div> -->

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Update</button>
                    
                <button class="btn btn-default"><?php echo anchor('Admin/index','Cancel'); ?></button>    

            </div>

            <?php echo form_close()?>

        </div>

    </div>

</div>
<?php include "includes/footer.php"?>
<?php include "includes/header.php"?>

<div class="container p-3 my-3 bg-dark text-white">

    <div class="row justify-content-md-center">

        <div class="col-md-8 col-md-offset-2">

            <h1 style="color: #26bf73;">Create post</h1>
            <?php if($this->session->flashdata('msg'))
                {
                echo "<h5 style='color: red; font-size: 15px;'>".$this->session->flashdata('msg')."</h5>";
                }
            ?>

            <?php echo form_error('title','<div class="text-danger">','</div>');?>
            <?php echo form_open_multipart('Add/do_upload'); ?>

            <div class="form-group">
                <label for="title">Title <span class="require">*</span></label>
                <input type="text" class="form-control" name="title" />
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea rows="5" class="form-control" name="text"></textarea>
            </div>

            <div class="form-group">
                <label for="description">Select Here Image to Upload:</label>
                <div class="form-group">
                    <input type="file" name="userfile" />
                </div>

            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">
                    Create
                </button>
                <button class="btn btn-default">
                    <?php echo anchor('Admin/index','Cancel'); ?>
                </button>

            </div>

            <?php echo form_close()?>

        </div>

    </div>

</div>
<?php include "includes/footer.php"?>
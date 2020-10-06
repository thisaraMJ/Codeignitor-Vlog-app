<?php include "includes/header.php"?>
</br></br>
<div class="container p-3 my-3 bg-dark text-white">
    <div class="well">
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object img-thumbnail" src="<?php echo base_url() ?>/images/<?php echo $post->image_name?>">
                <!-- <?php echo base_url() ?>/controller_b/controllerfunction/<?php echo $id ?> -->
            </a>
            <div class="container p-3 my-3 bg-dark text-white">
            <div class="media-body">
                <h4 class="media-heading"><?php echo $post->title?></h4>
                <p class="text-right">By @<?php echo $post->username?></p>
                <p><?php echo $post->text?></p>
                <ul class="list-inline list-unstyled">
                    <li><span><i class="glyphicon glyphicon-calendar"></i>Date: <?php echo $post->date?></span></li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php"?>
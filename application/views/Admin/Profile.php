<?php include "includes/header.php" ?>
<!-- included header-->

<div class="container p-3 my-3 bg-dark text-white">


    <fieldset style="padding: 35px 50px">

        <legend style="color: #218BDB ; font-size: 40px">My Profile</legend>

        <dl class="row">

            <dt class="col-sm-3"><h4>Name:</h4></dt>
            <dd class="col-sm-9"><h4><?php echo $this->session->userdata('fname')?></h4></dd>

            <dt class="col-sm-3"><h4>Last Name:</h4></dt>
            <dd class="col-sm-9"><h4><?php echo $this->session->userdata('lname')?></h4></dd>

            <dt class="col-sm-3"><h4>Username:</h4></dt>
            <dd class="col-sm-9"><h4><?php echo $this->session->userdata('username')?></h4></dd>

            <dt class="col-sm-3 text-truncate"><h4>Email:</h4></dt>
            <dd class="col-sm-9"><h4><?php echo $this->session->userdata('email')?></h4></dd>

        </dl>

        <?php echo anchor('Home/update_profile','Update',['class'=>'btn btn-primary']); ?>

    </fieldset>

    <?php echo form_close();?>

</div>

<?php include "includes/footer.php" ?>
<!-- included footer-->


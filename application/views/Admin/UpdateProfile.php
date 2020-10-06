<?php include "includes/header.php" ?>
<!-- included header-->

<div class="container p-3 my-3 bg-dark text-white">

    <?php echo validation_errors(); ?>
    <!-- codeignitor form validation -->

    <?php echo form_open('Register/updateUser');?>

    <fieldset style="padding: 35px 50px">
        <?php if($this->session->flashdata('msg')){
                echo "<h5 style='color: red; font-size: 15px;'>".$this->session->flashdata('msg')."</h5>";
                }
            ?>
        <legend style="color: #218BDB ; font-size: 40px">My Profile</legend>

        <div class="form-group">
            <label for="username">First name</label>
            <input type="text" class="form-control" name="firstname" value="<?php echo $this->session->userdata('fname')?>" >
        </div>

        <div class="form-group">
            <label for="username">Last name</label>
            <input type="text" class="form-control" name="lastname"  value="<?php echo $this->session->userdata('lname')?>" >
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $this->session->userdata('email')?>"
                 name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <button type="submit" class="btn btn-primary">SAVE</button>

    </fieldset>

    <?php echo form_close();?>

</div>

<?php include "includes/footer.php" ?>
<!-- included footer-->
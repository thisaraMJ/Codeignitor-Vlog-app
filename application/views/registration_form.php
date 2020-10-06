<?php include "partials/header.php" ?>
<!-- included header-->

<div class="container p-3 my-3 bg-dark text-white">

    <?php echo validation_errors(); ?>
    <!-- codeignitor form validation -->

    <?php echo form_open('Register/registerUser');?>

    <fieldset style="padding: 35px 50px">
        <?php if($this->session->flashdata('msg')){
                echo "<h5 style='color: red; font-size: 15px;'>".$this->session->flashdata('msg')."</h5>";
                }
            ?>
        <legend style="color: #218BDB ; font-size: 40px">Registration</legend>

        <div class="form-group">
            <label for="username">First name</label>
            <input type="text" class="form-control" name="firstname" placeholder="Enter First name">
        </div>

        <div class="form-group">
            <label for="username">Last name</label>
            <input type="text" class="form-control" name="lastname" placeholder="Enter Last name">
        </div>

        <div class="form-group">
            <label for="username">User name</label>
            <input type="text" class="form-control" name="username" placeholder="Enter Username">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password">
        </div>

        <div class="form-group">
            <label for="password">Confirm your Password</label>
            <input type="password" class="form-control" name="passwordConfirm" placeholder="Re-Enter Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button><br><br>

    </fieldset>

    <?php echo form_close();?>

</div>

<?php include "partials/footer.php" ?>
<!-- included footer-->
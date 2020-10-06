<?php include "partials/header.php" ?>

<div class="container p-3 my-3 bg-dark text-white">

    <?php echo validation_errors(); ?>
    <!-- codeignitor form validation -->

    <?php echo form_open('Login/userLogin');?>

    <fieldset style="padding: 45px 65px; border: 2px border-color=black">

        <?php if($this->session->flashdata('msg')){
                echo "<h5 style='color: green ; font-size: 15px;'>".$this->session->flashdata('msg')."</h5>";
                }
                if($this->session->flashdata('errmsg')){
                    echo "<h5 style='color: red ; font-size: 15px;'>".$this->session->flashdata('errmsg')."</h5>";
                    }
            ?>

        <legend style="color: #218BDB ; font-size: 30px;">Sign in to Your Account</legend>

        <div class="form-group">
            <label for="username">User name</label>
            <input type="text" class="form-control" name="username" placeholder="Enter Username">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password">
        </div>

        <button type="submit" class="btn btn-primary">Login</button><br><br>

        <div class="new-account">
            <label style="font-size: 15px">Don't you register yet?</label>
            <a class="link" href="<?php echo base_url('index.php/Home/register');?>">Register here</a><br>
        </div>

    </fieldset>

    <?php echo form_close();?>

</div>

<?php include "partials/footer.php" ?>
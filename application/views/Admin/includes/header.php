<?php
    if(!$this->session->userdata('logged_in')){
        redirect('Home/login');
    }

    // if($this->session->flashdata('welcome')){
    //     echo $this->session->flashdata('welcome')." ".$this->session->userdata('fname')."!";
    // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url('index.php/Admin/index');?>" style="color: #09dd53 ; font-size: 30px;">TravelBlog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" style="color:#b56aff" href="<?php echo base_url('index.php/Admin/addPost');?>"><B>Add New Post</B></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#b56aff" href="<?php echo base_url('index.php/Admin/viewPost');?>"><B>View My Posts</B></a>
                </li>
            </ul>
            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <b><?php
                            if($this->session->userdata('logged_in')){
                                echo $this->session->userdata('fname');
                            }
                            else{
                                echo "<h6>"."User"."</h6>";
                            } 
                        ?></b>
                    </a>


                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo base_url('index.php/Login/userLogout');?>">Logout</a>
                        <a class="dropdown-item" href="<?php echo base_url('index.php/Home/profile');?>">Profile</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


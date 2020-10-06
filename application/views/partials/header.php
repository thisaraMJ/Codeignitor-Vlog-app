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
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark " style="background-color: #4fb4f0">
        <a class="navbar-brand" href="#" style="color: #09dd53 ; font-size: 30px;">TravelBlog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">

            </ul>
            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/Home/login');?>"><b>LOGIN</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/Home/register');?>"><b>REGISTER</b></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false"><b>User</b></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Logout</a>
                        <a class="dropdown-item" href="#">Profile</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="d-flex justify-content-center align-items-center flex-column bg-light min-vh-100">
    <div class="">

        <div class="" style="font-family: Arial, Helvetica, sans-serif; font-weight: 700; font-size: 4vw;">
            Simple <span style="color:teal">E-Commerce Website</span>
        </div>
        <div class="d-flex justify-content-center">
            <a href="<?php echo base_url()?>index.php/admin" class="btn btn-secondary font-weight-bold mx-5">Admin Panel</a>

            <a href="<?php echo base_url()?>index.php/home" class="btn btn-success font-weight-bold mx-5">Main Site</a>
        </div>

    </div>
</div>
</body>
</html>
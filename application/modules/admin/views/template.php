<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fa/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>


</head>
<body>
    <p class="d-none" id="base_url"><?php echo base_url();?></p>
    <div class="bg-light p-3 d-flex justify-content-center align-items-center border-bottom mb-3">
        <h1 class="font-weight-bold">Simple E-commerce Admin Panel</h1>
    </div>
    <div class="row m-0 p-0">
        <div class="col-md-2 border-right">
            <a href="<?php echo base_url(); ?>index.php/admin" class="btn btn-info w-100 font-weight-bold my-3">Admin Panel <i class="fa fa-home"></i></a>
            <a href="<?php echo base_url(); ?>index.php/home" class="btn btn-info w-100 font-weight-bold">Main Site <i class="fa fa-link"></i></a>
        </div>
        <div class="col-md-10">
            <?php
                $this->load->view($mainContent, $data);
            ?>
        </div>
    </div>
    <script src="<?php echo base_url()?>template\web\views\themes\zaima\assets\plugins\jquery\jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url()?>template\assets\js\jquery.validate.min.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <?php
        if (isset($jsPath))
        {
             ?>
            <script src="<?php echo base_url() . $jsPath; ?>"></script>
            <?php
        }
    ?>


</body>
</html>
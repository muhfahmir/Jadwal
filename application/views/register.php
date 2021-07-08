<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>vendors/animate-css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>vendors/popup/magnific-popup.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/') ?>style.css">
</head>

<body class="bg-secondary">

    <div class="container my-5">
        <div class="row">
            <div class="col-sm-6 col-md-4 mx-auto p-4">
                <?php 
                echo $this->session->flashdata('msg')
            ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 mx-auto bg-light p-4 login">
                <h3 class="text-center mb-30 title_color border-bottom">REGISTER</h3>
                <form action="<?php echo base_url('register/') ?>action" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" placeholder="Nama" name="nama" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Nama'" required class=" form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Username" name="username" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Username'" required class=" form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Password'" class=" form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Confirm Password" name="confirm"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" required
                            class=" form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" name="submit">
                    </div>
                    <hr>
                    <div class="text-center">
                        Sudah punya akun? <a href="<?php echo base_url() ?>login">Login disini.</a><br>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-3 mt-5 fixed-bottom">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; 2021</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- <script src="<?php echo base_url('assets/sb_shop/') ?>vendors/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/sb_shop/') ?>vendors/bootstrap/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>
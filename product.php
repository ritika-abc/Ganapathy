<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Averath Agricos LLP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Averath Agricos LLP" name="keywords">
    <meta content="Averath Agricos LLP" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    include "header.php";
    ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background-image:linear-gradient(#00000096,#00000096), url(image/3.jpg); background-position: center;background-position: left;">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Our Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>

                    <li class="breadcrumb-item" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-fluid  e py-5">
        <div class="container pt-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 my-4 text- ">Our Products</h1>
                <p class="mb-5 text-  fs-5">We provide our products as per your demand and requirement
                </p>
            </div>
            <div class="row justify-content-center g-4">
                <?php
                include "config.php";
                $s = "SELECT * from `pro`  ";
                $q = mysqli_query($con, $s);
                while ($row = mysqli_fetch_array($q)) {

                ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item shadow-lg rounded text-center">
                            <img src="<?php echo $row['image'] ?>" height="auto" class="border border-dark  rounded"
                                width="100%" alt="">
                            <h5 class=" mt-4 mb-4"><?php echo $row['name'] ?></h4>
                                <!-- <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus
                                augue.</p> -->
                                <a class="btn btn-dark px-3" href="">Enquiry Now<i
                                        class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <?php
    include "footer.php";
    ?>
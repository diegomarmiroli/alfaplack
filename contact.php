<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <?php require_once('view/modules/header-tags.php') ?>

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


    <?php require_once('view/modules/navbar.php') ?>



    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primario pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Contacto</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="index">Inicio</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container" style="max-width: 900px;">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                                <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 100px; height: 100px; border-width: 15px !important;">
                                    <i class="fa-solid fa-location-dot text-primary" style="font-size: 30px;"></i>
                                </div>
                                <h5 class="font-weight-medium m-0 mt-2">123 Street, New York, USA</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                                <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 100px; height: 100px; border-width: 15px !important;">
                                    <!-- <i class="fa fa-2x fa-envelope-open text-secondary"></i> -->
                                    <i class="fa-solid fa-at text-primary" style="font-size: 30px;"></i>
                                </div>
                                <h5 class="font-weight-medium m-0 mt-2">info@example.com</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                                <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 100px; height: 100px; border-width: 15px !important;">
                                    <i class="fa-solid fa-phone text-primary" style="font-size: 30px;"></i>
                                </div>
                                <h5 class="font-weight-medium m-0 mt-2">+012 345 6789</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Ingrese su nombre" required="required" data-validation-required-message="Ingrese su nombre" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" placeholder="Ingrese su email" required="required" data-validation-required-message="Ingrese su email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Motivo" required="required" data-validation-required-message="Ingrese un motivo" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" style="resize: none;" rows="6" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Ingrese un mensaje"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5 rounded-pill float-right" type="submit" id="sendMessageButton">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <?php require_once('view/modules/footer.php') ?>



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <?php require_once('view/modules/script-tags.php') ?>

    <!-- JavaScript Libraries -->
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
</body>

</html>
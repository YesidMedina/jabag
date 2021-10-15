<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Catalogo de productos jabag</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
<!--

TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <a class="navbar-brand" href=""><img class="logo"src="img/logojabag.jpeg" style="height:50px "/></a>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="/">Spa de uñas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="/peluqueria">Peluqueria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="/barberia">Barberia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="/cosmetico">Cosmeticos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="/aseopersonal">Aseo personal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="/nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="/contacto">Contacto</a>
                    <li class="nav-item">
                    <a class="nav-link nav-link-4" href="/login">login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="/register">Register</a>
                </li>
                </li>
            </ul>
            </div>
        </div>
    </nav>

@yield('content')




        <div class="row tm-mb-90 tm-gallery">


            <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Anterior</a>
                <div class="tm-paging d-flex">
                    <a href="javascript:void(0);" class="active tm-paging-link">1</a>
                    <a href="javascript:void(0);" class="tm-paging-link">2</a>
                    <a href="javascript:void(0);" class="tm-paging-link">3</a>
                    <a href="javascript:void(0);" class="tm-paging-link">4</a>
                </div>


                <a href="javascript:void(0);" class="btn btn-primary tm-btn-next">Siguiente página</a>
            </div>
        </div>

    </div> <!-- container-fluid, tm-container-content -->



    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Nuestro catálogo</h3>
                    <p>Nuestros catálogo contiene los mejores próductos del mercado</a> ademas de manejar precios de distribucion, si deseas escribirnos para que uno de nuestros vendedores pueda visitarte, puedes darle clic al siguiente boton</p>
                    <a href="" class="btn btn-primary tm-btn-next">  Contacto  </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Menú</h3>
                    <ul class="tm-footer-links pl-0">
                        <li><a href="#">Videos</a></li>
                        <li><a href="/nosotros">Nosotros</a></li>

                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                        <li class="mb-2"><a href=""><i class="bi bi-alarm-fill"></i></a></li>
                        <li class="mb-2"><a href=""><i class="bi bi-twitter"></i></a></li>
                        <li class="mb-2"><a href=""><i class="fab fa-instagram"></i></a></li>
                        
                    </ul>
                    <a href="#" class="tm-text-gray text-right d-block mb-2">Terms of Use</a>
                    <a href="#" class="tm-text-gray text-right d-block">Privacy Policy</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Copyright 2021 Jabag Company. All rights reserved.
                </div>
                <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                    Designed by <a href="">TecnoEAM</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>

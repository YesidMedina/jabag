<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Catalogo de productos jabag</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/templatemo-style.css">
    <!--

TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>

<body>
    <!-- Page Loader -->

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-1 active" aria-current="page" href="/">Spa de uñas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-2 active" href="/peluqueria">Peluquería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-3 active" aria-current="page" href="/barberia">Barbería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-4 active" aria-current="page" href="/cosmetico">Cosméticos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-5 active" aria-current="page" href="/aseous">Aseo personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-6 active" aria-current="page" href="/nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-7 active" aria-current="page" href="/contacto">Contacto</a>
                    <li class="nav-item">
                        <a class="nav-link nav-link-8 active" aria-current="page" href="/login">login</a>
                    </li>
                    {{-- <li class="nav-item">
                    <a class="nav-link nav-link-9 active" aria-current="page" href="/register">Register</a>
                </li>  --}}
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>

    <div style="align-content: center" class="row tm-mb-90">
        <div class="col-6" style="width: 600px;">
            <img src="../../public/img/{{$peluqueria->imagen }}" alt="Image" class="img-fluid">
        </div>
        <div class="col-6 justify-content-center" style="border-bottom: solid 1px #1A1919; font-size:40px;">
            <div class="tm-bg-gray tm-video-details">

                <div class="text-center mb-5">
                    <a href="/peluqueria" class="btn btn-primary tm-btn-big">Atrás</a>
                </div>



                <h1 class=" d-flex justify-content-center align-items-center">
                    {{$peluqueria->nombreProducto}}
                </h1><br>

                <div class="mb-4 d-flex flex-wrap">
                    <div class="mr-4 mb-2">
                        <span class="">Precio: </span><span class="tm-text-primary">{{ $peluqueria->precio }}</span>
                    </div>
                    <div class="mr-4 mb-2">
                        <span class="">Código: </span><span class="tm-text-primary">{{ $peluqueria->codigo }}</span>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="">Descripción:</span>
                    <p>{{ $peluqueria->descripcion }}</p>
                </div>

            </div>
        </div>
    </div>


    </div> <!-- container-fluid, tm-container-content -->



    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Nuestro catálogo</h3>
                    <p>Nuestro catálogo contiene los mejores productos del mercado</a> además de manejar precios de distribución, si deseas escribirnos para que uno de nuestros vendedores pueda visitarte, puedes darle clic al siguiente botón</p>
                    <a href="/contacto" class="btn btn-primary tm-btn-next"> Contacto </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Menú</h3>
                    <ul class="tm-footer-links pl-0">
                        <li><a href="/">Spa de uñas</a></li>
                        <li><a href="/peluqueria">peluquería</a></li>
                        <li><a href="/cosmetico">Cosméticos</a></li>
                        <li><a href="/barberia">Barbería</a></li>
                        <li><a href="/aseous">Aseo personal</a></li>
                        <li><a href="/nosotros">Nosotros</a></li>

                    </ul>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">

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

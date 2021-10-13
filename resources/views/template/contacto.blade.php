@extends('layouts.template')


@section('content')

<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/negro.jpg">

</div>




    <div class="container-fluid tm-mt-60">
        <div class="row tm-mb-50">
            <div class="col-lg-6 col-12 mb-5">
                <h2 class="tm-text-primary mb-5">Escríbenos</h2>
                <form id="contact-form" action="" method="POST" class="tm-contact-form mx-auto">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control rounded-0" placeholder="Nombre" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control rounded-0" placeholder="Correo" required />
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="contact-select" name="inquiry">
                            <option value="-">Quiero que me visiten</option>
                            <option value="sales">Reclamo</option>
                            <option value="creative">Garantías</option>
                            <option value="uiux">Felicitaciones</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Mensaje" required=></textarea>
                    </div>

                    <div class="form-group tm-text-right">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 col-12">
                <h2 class="tm-text-primary mb-5">Por un mundo mejor</h2>
                <!-- Map -->
                <div class="mapouter mb-4">
                    <div class="gmap-canvas">
                        <iframe width="100%" height="520" id="gmap-canvas"
                            src="img/otro.jpg"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row tm-mb-74 tm-people-row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                <img src="img/people-1.jpg" alt="Image" class="mb-4 img-fluid">
                <h2 class="tm-text-primary mb-4">Ryan White</h2>
                <h3 class="tm-text-secondary h5 mb-4">Chief Executive Officer</h3>
                <p class="mb-4">
                    Mauris ante tellus, feugiat nec metus non, bibendum semper velit. Praesent laoreet urna id tristique fermentum. Morbi venenatis dui quis diam mollis pellentesque.
                </p>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                <img src="img/people-2.jpg" alt="Image" class="mb-4 img-fluid">
                <h2 class="tm-text-primary mb-4">Catherine Pinky</h2>
                <h3 class="tm-text-secondary h5 mb-4">Chief Marketing Officer</h3>
                <p class="mb-4">
                    Sed faucibus nec velit finibus accumsan. Sed varius augue et leo pharetra, in varius lacus eleifend. Quisque ut eleifend lacus.
                </p>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                <img src="img/people-3.jpg" alt="Image" class="mb-4 img-fluid">
                <h2 class="tm-text-primary mb-4">Johnny Brief</h2>
                <h3 class="tm-text-secondary h5 mb-4">Accounting Executive</h3>
                <p class="mb-4">
                    Sed faucibus nec velit finibus accumsan. Sed varius augue et leo pharetra, in varius lacus eleifend. Quisque ut eleifend lacus.
                </p>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                <img src="img/people-4.jpg" alt="Image" class="mb-4 img-fluid">
                <h2 class="tm-text-primary mb-4">George Nelson</h2>
                <h3 class="tm-text-secondary h5 mb-4">Creative Art Director #C69</h3>
                <p class="mb-4">
                    Nunc convallis facilisis congue. Curabitur gravida rutrum justo sed pulvinar. Pellentesque ac ante in erat bibendum dignissim.
                </p>

            </div>
        </div>

@endsection

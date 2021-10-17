@extends('layouts.template')


@section('content')

<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/negro.jpg">

</div>




    <div class="container-fluid tm-mt-60">
        <div class="row tm-mb-50">
            <div class="col-lg-6 col-12 mb-5">
                <h2 class="tm-text-primary mb-5">Escríbenos</h2>
                <form id="contact-form" action="{{Route('contacto.store')}}" method="POST" class="tm-contact-form mx-auto">
                @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control rounded-0" placeholder="Nombre" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control rounded-0" placeholder="Correo" required />
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="contact-select" name="inquiry">
                            <option value="quiero que me visiten">Quiero que me visiten</option>
                            <option value="reclamo">Reclamo</option>
                            <option value="Garantias">Garantías</option>
                            <option value="felicitaciones">Felicitaciones</option>
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
                <img src="img/rolda.png" alt="Image" class="mb-4 img-fluid">
                <h2 class="tm-text-primary mb-4"></h2>
                <h3 class="tm-text-secondary h5 mb-4"></h3>
                <p class="mb-4">

                </p>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                <img src="img/karicia.png" alt="Image" class="mb-4 img-fluid">
                <h2 class="tm-text-primary mb-4"></h2>
                <h3 class="tm-text-secondary h5 mb-4"></h3>
                <p class="mb-4">
                </p>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                <img src="img/ossion.png" alt="Image" class="mb-4 img-fluid">
                <h2 class="tm-text-primary mb-4"></h2>
                <h3 class="tm-text-secondary h5 mb-4"></h3>
                <p class="mb-4">
                </p>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                <img src="img/nevada.png" alt="Image" class="mb-4 img-fluid">
                <h2 class="tm-text-primary mb-4"></h2>
                <h3 class="tm-text-secondary h5 mb-4"></h3>
                <p class="mb-4">

                </p>

            </div>
        </div>

@endsection

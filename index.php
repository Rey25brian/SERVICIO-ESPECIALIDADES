<!-- Header Start -->
<?php if (!$this->session->tempdata() == null) { ?>
    <div class="alert alert-success" role="alert">
        <strong>Aviso </strong><?= $this->session->tempdata('mensaje') ?>
    </div>
<?php }; ?>
<div class="jumbotron jumbotron-fluid position-relative overlay-bottom">
    <div class="container text-center my-5 py-5">
        <h1 class="text-white mt-4 mb-4">
            Bienvenido a MediConnect
        </h1>
        <h1 class="text-white display-1 mb-5">Buscar Servicio</h1>
        <div class="mx-auto mb-5" style="width: 100%; max-width: 600px">

            <!-- <div class="input-group">
                <input id="buscador" list="palabrasClave" type="text" class="form-control border-light" style="padding: 30px 25px" placeholder="Que deseas buscar?" />
                <div class="input-group-append">
                    <button id="buscar" class="btn btn-secondary px-4 px-lg-5">
                        Buscar
                    </button>
                </div>

                <!-- <datalist id="palabrasClave">
                    <?php foreach ($resultado as $item) { ?>
                        <option value="<?= $item['Nombre'] ?>"></option>
                    <?php } ?>

                </datalist> -->
            </div> -->

            <!-- <?php foreach ($resultado as $item) { ?>
                <input hidden class="form-check-input me-1" checked type="checkbox" value="<?= $item['Nombre'] ?>">
            <?php } ?> -->


        </div>
    </div>
</div>
<!-- Header End -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

<div class="redondear-tarjeta container-fluid bg-image">
    <div class="container">
        <div class="row">
            <div id="sobreNosotros" class="col-lg-7 my-5 pt-5 pb-lg-5">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">
                        Sobre nosotros?
                    </h6>
                    <h1 class="display-4">Sobre nosotros?</h1>
                </div>
                <p class="mb-4 pb-2">
                    Nuestra aplicación es una plataforma en línea que conecta a
                    proveedores de servicios de belleza con clientes potenciales. ¡Nos
                    enorgullece ofrecer una experiencia de usuario amigable y fácil de
                    usar!
                </p>
                <div class="d-flex mb-3">
                    <div class="btn-icon bg-primary mr-4">
                        <i class="fa fa-2x fa-graduation-cap text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>Misión</h4>
                        <p>
                            Brindar acceso fácil y confiable a servicios médicos especializados, mejorando la calidad de vida de nuestros usuarios.
                        </p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="btn-icon bg-secondary mr-4">
                        <i class="fa fa-2x fa-certificate text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>Visión</h4>
                        <p>
                            SSer la plataforma líder en la conexión entre usuarios y especialistas médicos, impulsando la innovación y la excelencia en la atención sanitaria.
                        </p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="btn-icon bg-warning mr-4">
                        <i class="fa fa-2x fa-book-reader text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>Valores</h4>
                        <p class="m-0">
                            <b>Calidad</b>: Nos comprometemos a ofrecer servicios de alta calidad, respaldados por profesionales médicos cualificados y altos estándares de atención.
                        </p>
                        <p class="m-0">
                            <b>Accesibilidad</b>: Buscamos proporcionar una plataforma fácil de usar y accesible para que los usuarios encuentren especialistas médicos y soliciten servicios de manera conveniente.
                        </p>
                        <p class="m-0">
                            <b>Confianza</b>: Nos esforzamos por construir relaciones basadas en la confianza, garantizando la privacidad y seguridad de la información, y promoviendo la transparencia en todas nuestras interacciones.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 500px">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="<?= base_url(); ?>/assets/img/feature.jpg" style="object-fit: cover" />
                </div>
            </div>
        </div>
    </div>
</div>

<div id="servicios" class="container-fluid px-0 py-5">
    <div class="row mx-0 justify-content-center pt-5">
        <div class="col-lg-6">
            <div class="section-title text-center position-relative mb-4">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">
                    SERVICIOS
                </h6>
                <h1 class="display-4">
                    Revisa algunos de los servicios de nuestra web!
                </h1>
            </div>
        </div>
    </div>
    <!-- <div id="servicios2" class="owl-carousel courses-carousel redondear-tarjeta">
        <?php foreach ($resultado as $item) { ?>
            <div id="Corte de pelo" class="courses-item position-relative" style="padding-right: 1rem; padding-left: 1rem;">
                <img class="img-fluid" src="<?= base_url(); ?>/assets/img/<?= $item['Foto'] ?>" alt="" />

                <div class="courses-text" style="padding-right: 1rem; padding-left: 1rem;">
                    <h4 class="text-center text-white px-3"><?= $item['Nombre'] ?></h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i><?= $item['Nombre_Usuario'] ?></span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i><?= $item['califiacion'] ?> <small>(250)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="<?= base_url(); ?>detalles-productos/<?= $item['id_Servicios'] ?>">Detalles del servicio</a>
                    </div>
                </div>
            </div>
        <?php  } ?>

    </div> -->
</div>
<!-- Courses End -->

<!-- Team Start -->
<!-- <div class="container-fluid py-5 ">
    <div class="container py-5">
        <div class="section-title text-center position-relative mb-5 ">
            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">
                Usuarios
            </h6>
            <h1 class="display-4">Principales Usuarios</h1>
        </div>
        <?php $count = 100; ?>
        <div class="owl-carousel team-carousel position-relative " style="padding: 0 30px">
            <?php foreach ($usuarios as $item) { ?>
                <?php $count = $count + 1; ?>

                <div class="team-item redondear-tarjeta">
                    <img class="img-fluid w-100" src="https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/<?= $count; ?>.jpg" alt="" />
                    <div class="  text-center p-4">
                        <h5 class="mb-3"><?= $item['Nombre'] ?></h5>
                        <p class="mb-2"></p>
                        <div class="d-flex justify-content-center">

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    
    </div>
</div> -->

<!-- Team End -->
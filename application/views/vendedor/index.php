<div class="jumbotron jumbotron-fluid position-relative overlay-bottom">
    <div class="container text-center my-5 py-5">
        <h1 class="text-white mt-4 mb-4">
            Bienvenido <?= $this->session->userdata('username'); ?> estos son tus servicios.
        </h1>

    </div>
</div>
<!-- Header End -->
<!-- Courses Start -->

<div class="container-fluid py-5 ">

    <div class="container py-5 redondear-tarjeta">
        <div class="row">
            <?php if (!$this->session->tempdata() == null) { ?>
                <div class="alert alert-<?= $this->session->tempdata('clase') ?>" role="alert">
                    <strong>Mensaje </strong><?= $this->session->tempdata('mensaje') ?>
                </div>
            <?php }; ?>
            <?php if (!$servicios) { ?>
                <h1 class="text-black mt-4 mb-4">
                    Sin servicios.
                </h1>
            <?php }  ?>
            <?php foreach ($servicios as $item) { ?>
                <div class="col-lg-4 col-md-6 pb-4 ">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2 sombra" href="<?= base_url(); ?>detalles-productos/<?= $item['id_Servicios'] ?>">
                        <img class=" img-fluid-S" src="<?= base_url(); ?>/assets/img/<?= $item['Foto'] ?>" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3"><?= $item['Nombre'] ?></h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i><?= $item['Nombre_Usuario'] ?></span>
                                    <span class="text-white">Modificar</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i><?= $item['califiacion'] ?> <small>(250)</small></span>

                                </div>

                            </div>
                        </div>
                    </a>
                    <center>
                        <a name="" id="" class="btn btn-primary sombra" href="<?= base_url(); ?>eliminarServicio/<?= $item['id_Servicios'] ?>" role="button">Eliminar</a>
                    </center>

                </div>
            <?php } ?>
            <div class="col-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-lg justify-content-center mb-0">
                        <li class="page-item disabled">
                            <a class="page-link rounded-0" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>

                        <li class="page-item">
                            <a class="page-link rounded-0" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
 

<!-- Modal Body-->
<div class="modal fade" id="modalIdBienvenida" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Bienvenid@!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <center>
                        <header style="background-color: #f7a8b8;
        text-align: center;
        padding: 20px;">
                            <h1>Bienvenido(a)</h1>
                        </header>
                        <main style="max-width: 800px;
        margin: 0 auto;
        text-align: justify;
        line-height: 1.5;
        padding: 40px;">
                            <p>¡Gracias por unirte a nuestra plataforma para ofrecer tus servicios relacionados con negocios de belleza! A partir de ahora, podrás compartir tu experiencia y conocimientos con nuestros clientes y aumentar tu visibilidad en el mercado.</p>
                            <p>En nuestro sitio web, podrás subir tus servicios, establecer tus horarios y tarifas, recibir comentarios y valoraciones de tus clientes, y mucho más. Si tienes alguna duda o sugerencia, no dudes en ponerte en contacto con nuestro equipo de soporte.</p>
                            <p>¡Disfruta de tu experiencia en nuestra plataforma!</p>
                        </main>
                    </center>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>


<?= $this->session->tempdata('bienvenida'); ?>

<?php if ($this->session->tempdata('bienvenida') == "activar") { ?>
    <script>
        $(document).ready(function() {
            $('#modalIdBienvenida').modal('toggle')
        });
        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
    </script>
<?php }; ?>


<!-- Footer Start -->
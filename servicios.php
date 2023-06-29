<div class="jumbotron jumbotron-fluid position-relative overlay-bottom">
    <div class="container text-center my-5 py-5">
        <h1 class="text-white mt-4 mb-4">
            Bienvenido a MediConnect
        </h1>
        <h1 class="text-white display-1 mb-5">Buscar Especialidades</h1>
        <div class="mx-auto mb-5" style="width: 100%; max-width: 600px">
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="<?= base_url(); ?>">Inicio</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Especialidades</p>
            </div>
            <!-- <div class="input-group">
                <input id="buscador" list="palabrasClave" type="text" class="form-control border-light" style="padding: 30px 25px" placeholder="Que deseas buscar?" />
                <div class="input-group-append">
                    <button id="buscar" class="btn btn-secondary px-4 px-lg-5">
                        Buscar
                    </button>
                </div>

                <datalist id="palabrasClave">
                    <?php foreach ($servicios as $item) { ?>
                        <option value="<?= $item['Nombre'] ?>"></option>
                    <?php } ?>

                </datalist>
            </div> -->

            <?php foreach ($servicios as $item) { ?>
                <input hidden class="form-check-input me-1" checked type="checkbox" value="<?= $item['Nombre'] ?>">
            <?php } ?>
        </div>

    </div>
</div>
</div>
<!-- Header End -->
<!-- Courses Start -->
<div class="container-fluid py-5" id="serviciosGaleria">
    <div class="container py-5 redondear-tarjeta">
        <div class="row mx-0 justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center position-relative mb-5">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Servicios</h6>
                    <h1 class="display-4">Consulta la variedad de especialidades que ofrecemos</h1>
                </div>
                <!--  Modal trigger button  -->
                <center>
                    <div class="mb-3">
                        <a href="" type="button" class=" " data-bs-toggle="modal" data-bs-target="#modalIdFiltro">
                            <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/svbmmyue.json" trigger="hover" style="width:50px;height:50px">
                            </lord-icon>
                        </a>
                    </div>
                </center>
            </div>
        </div>
        <div class="row">
            <?php foreach ($servicios as $item) { ?>
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="<?= base_url(); ?>detalles-productos/<?= $item['id_especialidad'] ?>">
                        <img class=" img-fluid-S" src="https://plustatic.com/8800/conversions/especialidades-medicas-mejor-pagadas-large.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3"><?= $item['Nombre'] ?></h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i><?= $item['Descripción'] ?></span>
                                </div>
                            </div>
                        </div>
                    </a>
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
<div class="modal fade" id="modalIdFiltro" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Filtro!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form>
                        <div class="mb-3">
                            <label for="categoriaSelect" class="form-label">Categoría</label>
                            <select class="form-select" id="categoriaSelect">
                                <option selected disabled value="">Seleccione</option>
                                <option value="t">Todos</option>

                                <?php foreach ($categorias as $key) { ?>
                                    <option value="<?= $key["id_categorias"] ?>"><?= $key["nombre"] ?></option>
                                <?php } ?>


                            </select>
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>



<!-- Courses End -->
<script>
    $tipo = "";
    $(document).ready(function() {

        $tipo = $("#tipoDeNavegador").val();

    });
    const select = document.getElementById('categoriaSelect');
    select.addEventListener('change', function() {
        const value = select.value;
        if (value == "t") {
            if ($tipo === "http://localhost/CAB/") {

                window.location.href = "http://localhost/CAB/dash-servicios";
            } else {
                window.location.href = "https://conectados-a-la-belleza.000webhostapp.com/dash-servicios";
            }
        } else {
            if (value !== '') {
                if ($tipo === "http://localhost/CAB/") {

                    window.location.href = "http://localhost/CAB/dash-serviciosC/" + value;
                } else {
                    window.location.href = "https://conectados-a-la-belleza.000webhostapp.com/dash-serviciosC/" + value;
                }


            }
        }

    });
    $(document).ready(function() {

        $('html, body').animate({

            scrollTop: $("#serviciosGaleria").offset().top

        }, 1);

    });
</script>

<!-- Footer Start -->
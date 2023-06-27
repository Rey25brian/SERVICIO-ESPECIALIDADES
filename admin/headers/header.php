<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>MediConnect</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/img/icono.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Cab System" name="keywords" />
    <meta content="MediConnect" name="description" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- Favicon -->
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>/assets/CSS/style.css" rel="stylesheet" />

</head>

<body>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            background-color: #f9f9f9;
        }

        li {
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
            transition: background-color 0.3s ease;
        }

        li:last-child {
            border-bottom: none;
        }

        li:hover {
            background-color: #ddd;
        }

        a {
            text-decoration: none;
            color: #333;
        }

        a:hover {
            color: #000;
        }

        /* Estilos para el título de la lista */
        h3 {
            font-size: 18px;
            font-weight: bold;
            margin: 0;
            padding: 20px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
    </style>
    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="<?= base_url(); ?>dash-admin" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary responTitulo">
                    <img class="logo" src="<?= base_url(); ?>/assets/img/icono.png" alt=""> MediConnect
                </h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="<?= base_url(); ?>nosotros" class="nav-item nav-link">Sobre Nosotros</a>
 
                    <a href="<?= base_url(); ?>contactenos" class="nav-item nav-link">Contáctanos!</a>
                </div>
                <a style="margin: 0rem; border-radius: 50px;" href="" data-bs-toggle="modal" data-bs-target="#modalId" class=" ">
                    <lord-icon src="https://cdn.lordicon.com/bhfjfgqz.json" trigger="hover" colors="primary:#6f42c1" style="width:60px;height:60px">
                    </lord-icon>
                </a>
            </div>
        </nav>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Modal -->
    <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Bienvenido <?= $this->session->userdata('username'); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <h2>Configuraciones!</h2>
                        <label for="theme">Tema:</label>
                        <select class="form-select" id="theme">
                            <option value="light">Claro</option>
                            <option disabled value="dark">Oscuro</option>
                        </select>

                        <br>

                        <ul>
                            <li><a data-bs-toggle="modal" data-bs-target="#modalIdcambiarDatos" href="#">Cambiar datos</a></li>
                            <li><a data-bs-toggle="modal" data-bs-target="#modalIdAgregar">Agregar Servicios</a></li>
                            <li><a href="<?= base_url(); ?>obtenerHistorial">Historial servicios</a></li>

                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" href="<?= base_url(); ?>cerrar"><i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión</a>

                </div>
            </div>
        </div>
    </div>

    <script>
        var modalId = document.getElementById('modalId');

        modalId.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            let button = event.relatedTarget;
            // Extract info from data-bs-* attributes
            let recipient = button.getAttribute('data-bs-whatever');

            // Use above variables to manipulate the DOM
        });
    </script>


    <!-- Modal Body-->
    <div class="modal fade" id="modalIdAgregar" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content redondear-tarjeta">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Añadir nuevo servicio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="wrapper">
                            <form action="<?= base_url(); ?>agregarServicio" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="nombre">Nombre del servicio</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="precio">Precio</label>
                                    <input type="number" class="form-control" id="precio" name="precio" min="0" step="0.01" required>
                                </div>
                                <div class="form-group">
                                    <label for="precio">Duracion en horas</label>
                                    <input type="number" class="form-control" id="Duracion" name="Duracion" min="1" max="24" required>
                                </div>
                                <div class="form-group">
                                    <label for="categoria">Categoría</label>
                                    <select class="form-control" id="categoria" name="categoria" required>
                                        <option value="" disabled selected>Seleccione una categoría</option>
                                        <option value="872706d6d86a42b2a3a80917983e39a9">Cabello</option>
                                        <option value="2e95113a8a2440e4afdd627e0227c214">Maquillaje</option>
                                        <option value="fddd2662af93455882405265752fa3b7">Uñas</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="imagen">Imagen del servicio</label>
                                    <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button class="btn btn-success" type="submit">Guardar servicio</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modalIdcambiarDatos" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cambiar Datos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url(); ?>modificar-datos" method="post">
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input required type="text" value="<?= $this->session->userdata('username') ?>" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Cofirmar contraseña</label>
                                <input required type="text" class="form-control" name="contraseña" id="contraseña" aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted">Contraseña Actual</small>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="check" id="check" value="1" onchange="javascript:showContent()">
                                    Modificar Contraseña
                                </label>
                            </div>
                            <div id="content" class="form-group" style="display: none;">
                                <label for="">Nueva contraseña</label>
                                <input type="text" class="form-control" name="contraseñaNueva" id="contraseñaNueva" aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted">Confirma contraseña tambien</small>
                            </div>
                            <input type="text" hidden name="id" value="<?= $this->session->userdata('s_id_sesiones') ?>">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function showContent() {
            element = document.getElementById("content");
            check = document.getElementById("check");
            if (check.checked) {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        }
    </script>
    <input hidden id="tipoDeNavegador" type="text" value="<?= base_url(); ?>">


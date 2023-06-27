    <!-- Header Start -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">

                <div class="redondear-tarjeta">
                    <div class="section-title position-relative mb-4">
                        <div class="d-inline-flex text-black mb-5">
                            <p class="m-0 text-uppercase"><a class="text-black" href="<?= base_url(); ?>">Inicio</a></p>
                            <i class="fa fa-angle-double-right pt-1 px-3"></i>
                            <p class="m-0 text-uppercase">Médicos</p>
                        </div>
                        <h1 class="display-4">Información generar médicos</h1>
                    </div>

                    <div class="row pt-3">
                        <div class="table-responsive">
                            <?php if ($reservas == null) { ?>
                                <h1 class="display-5">Sin médicos</h1>.
                            <?php } else { ?>
                                <table id="myTable" class="table">
                                    <thead class="thead-dark responsive nowrap" style="width:100%">
                                        <tr>
                                            <th scope="col">Nombre del medico</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Estatus</th>
                                            <th scope="col">Cedula</th>
                                            <th>Botones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($reservas as $item) { ?>
                                            <tr class="">
                                                <td scope="row"><?= $item['Nombre'] ?></td>
                                                <td scope="row"><?= $item['Descripción'] ?></td>
                                                <td><?= $item['comprobacion'] ?></td>
                                                <td><?= $item['cedula'] ?></td>
                                                <td>
                                                    <div><a name="" id="boton" class="btn btn-info" href="<?= base_url(); ?>comprobante/<?= $item['id_Reservas'] ?>" role="button">Comprobante</a></div>
                                                </td>
                                            </tr>
                                        <?php }  ?>


                                    </tbody>
                                </table>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Body-->
    <div class="modal fade" id="modalIdModificar" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content  redondear-tarjeta">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Modificar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="mb-3">
                            <form action="" method="post">
                                <label for="" class="form-label">City</label>
                                <input id="servicioID" type="text" id="recipient-name" value="">
                                <select class="form-select form-select-lg" name="" id="">
                                    <option selected>Select one</option>
                                    <option value="">New Delhi</option>
                                    <option value="">Istanbul</option>
                                    <option value="">Jakarta</option>
                                </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script>
        $("#boton").click(function(e) {
            e.preventDefault();
            var button = $("#boton") // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes

            $("#servicioID").val(recipient);
        });
        $('#modalIdModificar').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            alert("a");
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
    </script>


    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $('#myTable').DataTable({
            responsive: true,
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
        });
    </script>
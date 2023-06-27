<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">

            <div class="redondear-tarjeta">

                <div class="section-title position-relative mb-4">
                    <div class="d-inline-flex text-black mb-5">
                        <p class="m-0 text-uppercase"><a class="text-black" href="<?= base_url(); ?>">Inicio</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Comentarios</p>
                    </div>
                    <h1 class="display-4">Información generar comentarios</h1>
                </div>
    
                <div class="row pt-3">
                    <div class="table-responsive">
                        <?php if ($reservas == null) { ?>
                            <h1 class="display-5">Sin comentarios disponibles</h1>.
                        <?php } else { ?>
                            <table id="myTable" class="table">
                                <thead class="thead-dark responsive nowrap" style="width:100%">
                                    <tr>
                                        <th scope="col">Id Medico</th>
                                        <th scope="col">Id usuario</th>
                                        <th scope="col">Id especialidad</th>
                                        <th scope="col">Comentario</th>

                                        <th>Botones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($reservas as $item) { ?>
                                        <tr class="">
                                            <td scope="row"><?= $item['id_medico'] ?></td>
                                            <td scope="row"><?= $item['id_usuario'] ?></td>
                                            <td><?= $item['id_especialidad'] ?></td>
                                            <td><?= $item['comentario'] ?></td>

                                            <td>
                                                <div><a name="" id="boton" class="btn btn-info" href="<?= base_url(); ?>comprobante/<?= $item['idcomentarios'] ?>" role="button">Comprobante</a></div>
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
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar especialidad!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-1-12 col-form-label">Nombre</label>
                            <div class="col-sm-1-12">
                                <input type="text" class="form-control" name="inputName" id="inputName" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-1-12 col-form-label">Descripción</label>
                            <div class="col-sm-1-12">
                                <input type="text" class="form-control" name="inputName" id="inputName" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Categoria</label>
                            <select class="form-control" name="" id="">
                                <option disabled selected>Selecciona una</option>
                               <?php foreach ($categorias as $key ) { ?>
                                <option value="<?=$key['id_categorias']?>"><?=$key['nombre']?></option>
                               <?php } ?>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Canelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
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
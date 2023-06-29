<?php if (!$this->session->tempdata() == null) { ?>
    <div class="alert alert-danger" role="alert">
        <strong>Error </strong><?= $this->session->tempdata('mensaje') ?>
    </div>
<?php }; ?>

<form class="formulario redondear-tarjeta" style="margin-top: 5%;" action="<?= base_url(); ?>registrar-medico" method="post">
    <h1>Regístrate</h1>
    <div class="contenedor">
        <div class="input-contenedor">
            <input required style="width: 100%;" class="form-control" name="nombre" id="nombre" type="text" placeholder="Nombre Completo" />
            <br />
        </div>
        <div class="input-contenedor">
            <input required style="width: 100%;" class="form-control" name="telefono" id="telefono" type="number" placeholder="Numero Telefonico" />
            <br />
        </div>
        <div class="input-contenedor">
            <input required style="width: 100%;" class="form-control" name="correo" id="correo" type="email" placeholder="Correo Electronico" />
            <br />
        </div>

        <div class="input-contenedor">
            <input required style="width: 100%;" class="form-control" name="contraseña" id="contraseña" type="password" placeholder="Contraseña" />
            <br />
        </div>
        <div class="input-contenedor">
            <input required style="width: 100%;" class="form-control" name="contraseña2" id="contraseña2" type="password" placeholder="Confirmar Contraseña" />
            <br />
        </div>
        <div class="input-contenedor">
            <input required style="width: 100%;" class="form-control" name="cedula" id="cedula" type="text" placeholder="Cedula" />
            <br />
        </div>
        <div id="error" class="alert alert-danger" style="display: none;" role="alert">
            Las Contraseñas no coinciden, vuelve a intentar !
        </div>
        <div id="ok" class="alert alert-success ocultar" style="display: none;" role="alert">
            Las Contraseñas coinciden ! (Procesando formulario ... )
        </div>
        <div id="vacias" class="alert alert-danger ocultar" style="display: none;" role="alert">
            Las Contraseñas están vacías, vuelve a intentar !
        </div>
        <center>
            <div class="mb-3">
                <label for="" class="form-label">Fecha de nacimiento</label>
                <input required class="form-control" name="nacimiento" id="nacimiento" type="date" placeholder="nacimiento" />
                <div id="errorN" class="alert alert-danger" style="display: none;" role="alert">
                    Tienes que ser mayor de edad para regístrate en este sitio!
                </div>
            </div>
        </center>
        <center>
            <div class="mb-3">
                <label for="" class="form-label">Sexo</label>
                <select required class="form-select form-select-lg" name="sexo" id="sexo">
                    <option selected>Selecciona uno</option>
                    <option value="1">Hombre</option>
                    <option value="2">Mujer</option>
                    <option value="3">Otros</option>
                </select>
            </div>
        </center>
        <center>
            <div class="mb-3">
                <label for="" class="form-label">Seleccione su especialidad</label>
                <select name="cboEspecialidad" id="cboEspecialidad" required class="form-select form-select-lg">
                    <option disabled selected value="0">Seleccione una especialidad</option>
                        <?php foreach ($especialidades as $key) { ?>
                             <option value="<?= $key["id_especialidad"] ?>"><?=$key["Nombre"]?></option>
                        <?php } ?>
                </select>
            </div>
        </center>
        <input required class="form-control" hidden id="comprobar" name="comprobar" type="text">
        <input required class="form-control" hidden id="comprobarN" name="comprobarN" type="text">
        <button id="boton" type="submit" value="Registrate" class="button">Enviar</button>
        <br>
        <br>
        <p class="link-n">
            ¿Ya tienes una cuenta?<a class="link" href="<?= base_url(); ?>login">Iniciar Sesión</a>
        </p>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(document).ready(function() {

        $("#error").hide();
        $("#vacias").hide();
        $("#ok").hide();



        $("#boton").click(function(e) {
            $contraseña1 = $("#contraseña").val();
            $contraseña2 = $("#contraseña2").val();
            $correo = $("#correo").val();



            var inputFechaNacimiento = document.getElementById("nacimiento");

            // Obtener la fecha de nacimiento a partir del valor del input
            var fechaNacimiento = new Date(inputFechaNacimiento.value);

            // Obtener la fecha actual
            var fechaActual = new Date();

            // Calcular la edad en años
            var edad = fechaActual.getFullYear() - fechaNacimiento.getFullYear();

            if (fechaNacimiento.getMonth() > fechaActual.getMonth() || (fechaNacimiento.getMonth() == fechaActual.getMonth() && fechaNacimiento.getDate() > fechaActual.getDate())) {
                edad--;
            }

            // Verificar si es mayor de edad

            if (edad >= 18) {

                $("#errorN").hide();

                $("#comprobarN").val("1");
            } else {
                $("#errorN").show();
                $("#comprobarN").val("");
            }


            if ($contraseña1 == "" || $contraseña2 == "") {
                $("#vacias").show();
                $("#error").hide();
                $("#ok").hide();
                $("#comprobar").val("");
            } else if ($contraseña2 == $contraseña1) {
                $("#ok").show();
                $("#error").hide();
                $("#vacias").hide();
                $("#comprobar").val("1");

            } else {
                $("#comprobar").val("");
                $("#ok").hide();
                $("#vacias").hide();
                $("#error").show();
            }
            if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test($correo)) {

                alert("La dirección de email " + valor + " es correcta!.");

            } else {
                alert("La dirección de email es incorrecta!.");
            }
        });

    });
</script>
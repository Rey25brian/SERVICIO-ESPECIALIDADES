  <?php if (!$this->session->tempdata() == null) { ?>
    <div class="alert alert-danger" role="alert">
      <strong>Error </strong><?= $this->session->tempdata('mensaje') ?>
    </div>
  <?php }; ?>

    <form action="<?= base_url(); ?>iniciar" method="post" class="redondear-tarjeta formulario">
      <h1>Iniciar</h1>
      <div class="contenedor">
        <div class="input-contenedor">
          <input style="width: 100%;" class="form-control" type="email" name="correo" placeholder="Correo Electronico" />
        </div>

        <div class="input-contenedor">
          <input style="width: 100%;" class="form-control" type="password" name="contraseña" placeholder="Contraseña" />
        </div>
        <input type="submit" value="Iniciar" class="button" />
        <br>
        <br>
        <p class="link-n">
          ¿No tienes una cuenta?
          <a class="link" href="<?= base_url(); ?>registrar">Regístrate</a>
        </p>

      </div>
    </form>
  </div>

  <!-- Modal Body-->
  <div class="modal fade " id="modalIdrecupera" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content  ">
        <div class="modal-header ">
          <h5 class="modal-title" id="modalTitleId">Recuperación de contraseña</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
          <div class="container-fluid">
            <h2>Recuperación de contraseña</h2>
            <form>
              <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input class="form-control" type="email" id="email" name="email" required>
              </div>

            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </div>
  </div>
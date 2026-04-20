<div class="section text-center">
  <div class="clearfix">

    <?php if (! $installed) { ?>

      <i class="status fa fa-check-circle-o" style="font-size: 50px;"></i>
      <br />

      <span style="line-height: 50px;">¡Felicitaciones! Has instalado el
        <strong><?php echo $settings['title']; ?></strong> con exito!
      </span>

      <div style="margin: 15px 0 15px 0px; color: #d73b3b;">
        No olvides eliminar el directorio de instalación.
      </div>

      <?php } else { ?>

        <i class="status fa fa-close" style="font-size: 50px; color:red;"></i>
        <br />

        <div style="margin: 15px 0 15px 0px; color: #d73b3b;">
          ¡Parece que esta aplicación ya está instalada! No puedes reinstalarla.
        </div>

      <?php } ?>

      <a class="go-to-login-page" href="<?php echo $dashboard_url; ?>">
        <div>
          <div style="font-size: 100px;"><i class="fa fa-desktop"></i></div>
          <div>IR A LA PÁGINA DE INICIO DE SESIÓN</div>
        </div>
      </a>

    </div>
  </div>

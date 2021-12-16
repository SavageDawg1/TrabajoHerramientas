<header>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand text-white" href="index.php"><i class="fa fa-graduation-cap fa-lg mr-2"></i>Nombre</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nvbCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item pl-1">
              <a class="nav-link" href="index.php"><i class="fa fa-home fa-fw mr-1"></i>Inicio</a>
            </li>
            <li class="nav-item pl-1">
              <a class="nav-link" href="CindoTurismo.php"><i class="fa fa-th-list fa-fw mr-1"></i>Lugares</a>
            </li>
            <li class="nav-item pl-1">
              <a class="nav-link" href="quienes_somos.php"><i class="fa fa-info-circle fa-fw mr-1"></i>Nosotros</a>
            </li>
            <li class="nav-item pl-1">
              <a class="nav-link" href="#"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>Contacto</a>
            </li>
            <li class="nav-item pl-1">
              <?php if(!empty($user)):?>
                <div class="dropdown">
                  <button class="btn-nav btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButtonSM" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: 7px; background: inherit; font-size: 14px"><i class="fa fa-sign-in fa-fw mr-1"></i><?= $user['nombre_usuario']; ?>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonSM" style="text-align: left;">
                    <li><a class="dropdown-item textdrop" href="#" style="text-align: left; font-size: 12px;">Datos De Usuario</a></li>
                    <li><hr class="dropdown-divider "></li>
                    <li><a class="dropdown-item textdrop" href="consultas/logout.php" style="text-align: left; font-size: 12px;">Cerrar Sesión</a></li>
                  </ul>
                </div>
              <?php else: ?>
                <a class="nav-link" href="login.php"><i class="fa fa-sign-in fa-fw mr-1"></i>Iniciar Sesion</a>
              <?php endif; ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </header>
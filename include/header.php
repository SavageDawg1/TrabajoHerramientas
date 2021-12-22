    <header>
            <h1 class="h1 text-center text-faded d-none d-lg-block text-black" style="font-size: 60px; margin-bottom: 40px;" >
                <span class="site-heading-upper text-primary mb-3"></span>
                <span class="site-heading-lower " style="font-family: a;">CONOCIENDO ATACAMA <span class="Turismo " style="font-size: 80px">u</span></span>
            </h1>

        </header>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">

        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold d-lg-none turismo" href="index.html">Turismo Atacama</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php"><i class="fa fa-home fa-fw mr-1"></i>Inicio</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="lugares.php"><i class="fa fa-th-list fa-fw mr-1"></i>Lugares</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="quienes_somos.php"><i class="fa fa-info-circle fa-fw mr-1"></i>Nosotros</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="https://www.instagram.com/conociendo_atacama/">Contacto</a></li>
                    <li class="nav-item px-lg-4">
                        <?php if(!empty($user)):?>
                        <div class="dropdown">
                            <button class="btn-nav btn-secondary btn-sm dropdown-toggle rounded text-uppercase" type="button" id="dropdownMenuButtonSM" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: 7px; background: inherit; font-size: 14px"><i class="fa fa-sign-in fa-fw mr-1"></i><?= $user['nombre_usuario']; ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonSM" style="text-align: left;">
                                <li><a class="dropdown-item textdrop" href="lista_usuarios.php" style="text-align: left; font-size: 12px;">Listas De Usuarios</a></li>
                                <li><hr class="dropdown-divider "></li>
                                <li><a class="dropdown-item textdrop" href="consultas/logout.php" style="text-align: left; font-size: 12px;">Cerrar Sesión</a></li>
                            </ul>
                        </div>
                        <?php else: ?>
                            <a class="nav-link text-uppercase" href="login.php"><i class="fa fa-sign-in fa-fw mr-1"></i>Iniciar Sesion</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
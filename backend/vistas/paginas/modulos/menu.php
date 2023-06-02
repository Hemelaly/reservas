<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Brand Logo -->

  <a href="#" class="brand-link">

    <img src="vistas/img/plantilla/icono.jpg" alt="Portobelo Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">

    <span class="brand-text font-weight-light">Hotel Portobelo</span>

  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">

          <a href="<?php echo $ruta ?>" class="nav-link active" target="_blank">

            <i class="nav-icon fas fa-globe"></i>

            <p>

              Ver sitio

            </p>

          </a>

        </li>



        <li class="nav-item">

          <a href="inicio" class="nav-link">

            <i class="nav-icon fas fa-home"></i>

            <p>

              Inicio

            </p>

          </a>

        </li>

        <?php if ($admin["perfil"] == "Administrador"): ?>



          <li class="nav-item">

            <a href="administradores" class="nav-link">

              <i class="nav-icon fas fa-user"></i>

              <p>

                Administradores

              </p>

            </a>

          </li>

        <?php endif ?>

        <li class="nav-item">

          <a href="banner" class="nav-link">

            <i class="nav-icon fas fa-images"></i>

            <p>

              Banner

            </p>

          </a>

        </li>



        <li class="nav-item">

          <a href="planes" class="nav-link">

            <i class="nav-icon fas fa-tags"></i>

            <p>

              Planes

            </p>

          </a>

        </li>



        <li class="nav-item">

          <a href="categorias" class="nav-link">

            <i class="nav-icon fas fa-list"></i>

            <p>

              Categorias

            </p>

          </a>

        </li>



        <li class="nav-item">

          <a href="habitaciones" class="nav-link">

            <i class="nav-icon fas fa-bed"></i>

            <p>

              Habitaciones

            </p>

          </a>

        </li>

        <?php if ($admin["perfil"] == "Administrador"): ?>

          <li class="nav-item">

            <a href="reservas" class="nav-link">

              <i class="nav-icon fas fa-calendar"></i>

              <p>

                Reservas

              </p>

            </a>

          </li>

        <?php endif ?>

        <li class="nav-item">

          <a href="testimonios" class="nav-link">

            <i class="nav-icon fas fa-comments"></i>

            <p>

              Testimonios

            </p>

          </a>

        </li>

        <?php if ($admin["perfil"] == "Administrador"): ?>

          <li class="nav-item">

            <a href="usuarios" class="nav-link">

              <i class="nav-icon fas fa-users"></i>

              <p>

                Usuarios

              </p>

            </a>

          </li>

        <?php endif ?>

        <li class="nav-item">

          <a href="recorrido" class="nav-link">

            <i class="nav-icon fas fa-bus"></i>

            <p>

              Recorrido

            </p>

          </a>

        </li>



        <li class="nav-item">

          <a href="restaurante" class="nav-link">

            <i class="nav-icon fas fa-utensils"></i>

            <p>

              Restaurante

            </p>

          </a>

        </li>

      </ul>

    </nav>

    <!-- /.sidebar-menu -->

  </div>

  <!-- /.sidebar -->

</aside>
<?php

$categorias = ControladorCategorias::ctrMostrarCategorias();

if (isset($_SESSION["validarSesion"])) {

	if ($_SESSION["validarSesion"] == "ok") {

		$item = "id_u";
		$valor = $_SESSION["id"];

		$usuario = ControladorUsuarios::ctrMostrarUsuario($item, $valor);

	}

}


?>

<!--=====================================
HEADER
======================================-->

<header class="container-fluid p-0 bg-dark">

	<div class="container p-0">

		<div class="grid-container py-2">

			<!-- LOGO -->

			<div class="grid-item">

				<a href="<?php echo $ruta; ?>">

					<img src="img/logoRv.png" class="img-fluid" width="100px" style="margin-top: -0.8rem;">

				</a>

			</div>

			<div class="grid-item d-none d-lg-block"></div>

			<!-- CAMPANA Y RESERVA -->

			<!-- INGRESO DE USUARIOS -->

			<div class="grid-item d-none d-lg-block ml-5" style="margin-top: 0.6rem;">

				<?php if (isset($_SESSION["validarSesion"])): ?>

					<?php if ($_SESSION["validarSesion"] == "ok"): ?>

						<a href="<?php echo $ruta . 'perfil'; ?>">

							<?php if ($usuario["foto"] == ""): ?>

								<i class="fas fa-user text-white"></i>

							<?php else: ?>

								<?php if ($usuario["modo"] == "directo"): ?>

									<img src="<?php echo $servidor . $usuario["foto"]; ?>" class="img-fluid rounded-circle"
										style="width:30px">

								<?php else: ?>

									<img src="<?php echo $usuario["foto"]; ?>" class="img-fluid rounded-circle" style="width:30px">

								<?php endif ?>

							<?php endif ?>

						</a>

					<?php endif ?>

				<?php else: ?>

					<a href="#modalIngreso" data-toggle="modal"><i class="fas fa-user"></i></a>

				<?php endif ?>



			</div>

			<!-- MENÚ HAMBURGUESA -->

			<div class="grid-item mt-1 mt-sm-3 mt-md-4 mt-lg-2 botonMenu">

				<i class="fas fa-bars lead"></i>

			</div>

		</div>

	</div>

</header>

<!--=====================================
MENÚ
======================================-->

<nav class="menu container-fluid p-0">

	<ul class="nav nav-justified py-2">

		<li class="nav-item">
			<a class="nav-link text-white" href="#planes">Planos</a>
		</li>

		<li class="nav-item">
			<a class="nav-link text-white" href="#habitaciones">Apartamentos</a>
		</li>

		<li class="nav-item">
			<a class="nav-link text-white" href="#pueblo">O Público</a>
		</li>

		<li class="nav-item">
			<a class="nav-link text-white" href="#restaurante">Restaurante</a>
		</li>

		<li class="nav-item">
			<a class="nav-link text-white" href="#contactenos">Contacto</a>
		</li>

		<li class="nav-item">

			<ul class="my-2 py-1">

				<li>
					<a href="#" target="_blank">
						<i class="fab fa-facebook-f text-white float-left mx-2"></i>
					</a>
				</li>

				<li>
					<a href="#" target="_blank">
						<i class="fab fa-twitter text-white float-left mx-2"></i>
					</a>
				</li>

				<li>
					<a href="#" target="_blank">
						<i class="fab fa-youtube text-white float-left mx-2"></i>
					</a>
				</li>

				<li>
					<a href="#" target="_blank">
						<i class="fab fa-instagram text-white float-left mx-2"></i>
					</a>
				</li>

			</ul>

		</li>

	</ul>


</nav>

<!--=====================================
MENÚ MÓVIL
======================================-->
<div class="menuMovil">

	<div class="row">

		<div class="col-6">

			<a href="#modalIngreso" data-toggle="modal">
				<i class="fas fa-user lead ml-3 mt-4"></i>
			</a>

		</div>

		<div class="col-6">

			<div class="float-right mr-3 mt-3 mr-sm-5 mt-sm-4">

				<span class="border border-info float-left p-1 bg-info text-white idiomaEs">ES</span>
				<span class="border border-info float-left p-1 bg-white text-dark idiomaEn">EN</span>

			</div>

		</div>

	</div>

	<form action="<?php echo $ruta; ?>reservas" method="post">

		<div class="formReservas py-1 py-lg-2 px-4">

			<div class="form-group my-4">
				<select class="form-control form-control-lg selectTipoHabitacion" required>

					<option value="">Tipo de apartamento</option>

					<?php foreach ($categorias as $key => $value): ?>

						<option value="<?php echo $value["ruta"]; ?>"><?php echo $value["tipo"]; ?></option>

					<?php endforeach ?>

				</select>
			</div>

			<div class="form-group my-4">
				<select class="form-control form-control-lg selectTemaHabitacion" name="id-habitacion" required>

					<option value="">Temática de apartamento</option>

				</select>
			</div>

			<input type="hidden" id="ruta" name="ruta">

			<div class="row">

				<div class="col-6 input-group input-group-lg pr-1">

					<input type="text" class="form-control datepicker entrada" name="fecha-ingreso"
						placeholder="Entrada" autocomplete="off" required>

					<div class="input-group-append">

						<span class="input-group-text p-2">
							<i class="far fa-calendar-alt small text-gray-dark"></i>
						</span>

					</div>

				</div>

				<div class="col-6 input-group input-group-lg pl-1">

					<input type="text" class="form-control datepicker salida" name="fecha-salida" placeholder="Salida"
						autocomplete="off" readonly required>

					<div class="input-group-append">

						<span class="input-group-text p-2">
							<i class="far fa-calendar-alt small text-gray-dark"></i>
						</span>

					</div>

				</div>

			</div>

			<input type="submit" class="btn btn-block btn-lg my-4 text-white" value="Ver disponibilidad"
				style="background:black">

		</div>

	</form>

	<ul class="nav flex-column mt-4 pl-4 mb-5">

		<li class="nav-item">
			<a class="nav-link text-white my-2" href="#planesMovil">Planes</a>
		</li>

		<li class="nav-item">
			<a class="nav-link text-white my-2" href="#habitaciones">Habitaciones</a>
		</li>

		<li class="nav-item">
			<a class="nav-link text-white my-2" href="#pueblo">Recorrido por el pueblo</a>
		</li>

		<li class="nav-item">
			<a class="nav-link text-white my-2" href="#restaurante">Restaurante</a>
		</li>

		<li class="nav-item">
			<a class="nav-link text-white my-2" href="#contactenos">Contáctenos</a>
		</li>

	</ul>

</div>
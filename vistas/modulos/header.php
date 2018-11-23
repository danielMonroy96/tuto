<?php

	$servidor = Ruta::ctrRutaServidor();

	$url = Ruta::ctrRuta();

?>

<!--=====================================
TOP
======================================-->
<?php

	$estiloPlantilla = ControladorPlantilla::ctrEstiloPlantilla();

?>


<div class="container-fluid barraSuperior" style="background: <?php echo $estiloPlantilla['barraSuperior'];?> " id="top">

	<div class="container">

		<div class="row">
			<!--=====================================
			SOCIAL
			======================================-->

			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">

				<ul>

					<?php
					/*=============================================>>>>>
					= SOCIALES =
					===============================================>>>>>*/
					$social = ControladorPlantilla::ctrEstiloPlantilla();

					$jsonRedesSociales = json_decode($social["redesSociales"], true);

					foreach ($jsonRedesSociales as $key => $value) {

						echo '

						<li>
							<a href="'.$value["url"].'" target="_blank">
								<i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
							</a>
						</li>

						';

					}

					?>

				</ul>

			</div>

			<!--=====================================
			REGISTRO
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">

				<ul>
					<li><img class="img-circle" src="<?php echo $servidor?>vistas/img/usuarios/default/anonymous.png" width="10%" alt=""></li>
					<li><a style="color: <?php echo $estiloPlantilla['textoSuperior']; ?>" href="#modalIngreso" data-toggle="modal">Ver Perfil</a></li>
					<li>|</li>
					<li><a style="color: <?php echo $estiloPlantilla['textoSuperior']; ?>" href="#modalRegistro" data-toggle="modal">Salir</a></li>

				</ul>

			</div>

		</div>

	</div>

</div>

<!--=====================================
HEADER
======================================-->
<header class="container-fluid">

	<div class="container">

		<div class="row" id="cabezote">

			<!--=====================================
			LOGOTIPO
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">

				<a href="<?php echo $url?>">

					<img src="<?php echo $servidor.$estiloPlantilla["logoTutorias"]?>" class="img-responsive">

				</a>

			</div>

			<!--=====================================
			BLOQUE CATEGORÍAS Y BUSCADOR
			======================================-->

			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

				<!--=====================================
				BOTÓN CATEGORÍAS
				======================================-->

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">

					<p>CATEGORÍAS

						<span class="pull-right">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>

					</p>

				</div>

				<!--=====================================
				BUSCADOR
				======================================-->

				<div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">

					<input type="search" name="buscar" class="form-control" placeholder="Buscar...">

					<span class="input-group-btn">

						<a href="#">

							<button class="btn btn-default backColor" type="submit">

								<i class="fa fa-search"></i>

							</button>

						</a>

					</span>

				</div>

			</div>

			<!--=====================================
			LOGO ESTADO DE MÉXICO
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipoedomex">

				<a href="<?php echo $url?>">

				<img src="<?php echo $servidor.$estiloPlantilla["logoTESVG"]?>" class="img-responsive">

				</a>

			</div>

		</div>

		<!--=====================================
		CATEGORÍAS
		======================================-->

		<?php

			$item = null;

			$value = null;

			$actividades = ControladorActividades::ctrMostrarActividades($item, $value);

		?>

		<div class="col-xs-12 backColor" id="categorias">

			<?php foreach ($actividades as $key => $value){

				echo '
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

					<h4 class="">
						<a href="'.$value["ruta"].'" class="pixelCategorias">  '.$value["categoria"].' </a>
					</h4>

					<hr>

					<ul>

						<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
						<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
						<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
						<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
						<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>

					</ul>

				</div>
				';
			} ?>

		</div>

	</div>

</header>

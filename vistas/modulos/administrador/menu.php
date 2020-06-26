<?php

if ($_SESSION["perfil"] == "Administrador") {

	echo '
<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">



			<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>


			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>

			<li>

			<a href="paises-del-area">

				<i class="fa fa-globe"></i>
				<span>Paises del Area</span>

			</a>

		</li>

	
			<li>

			<a href="consejos-de-coordinacion">

				<i class="fa fa-circle"></i>
				<span>Consejos de Coordinacion</span>

			</a>

		</li>


		


		
		<li>

		<a href="estacas">

			<i class="fa fa-circle-o"></i>
			<span>Estacas/Distritos</span>

		</a>

	</li>




		
	<li>

	<a href="barrios">

		<i class="fa fa-square"></i>
		<span>Barrios/Ramas</span>

	</a>

</li>

<li>

<a href="miembros">

	<i class="fa fa-child"></i>
	<span>Miembros</span>

</a>

</li>

<li>

<a href="medicamento">

	<i class="fa fa-flask"></i>
	<span>Medicamentos</span>

</a>

</li>


	 
		


		</ul>

	 </section>

</aside>';
}



















?>

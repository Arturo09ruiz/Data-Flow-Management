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

<a href="miembross">

	<i class="fa fa-square"></i>
	<span>Miembros</span>

</a>

</li>



	 

			<li>

				<a href="categorias">

					<i class="fa fa-th"></i>
					<span>Categorías</span>

				</a>

			</li>

			<li>

				<a href="productos">

					<i class="fa fa-product-hunt"></i>
					<span>Productos</span>

				</a>

			</li>

		


			<li>

				<a href="clientes">

					<i class="fa fa-users"></i>
					<span>Clientes</span>

				</a>

			</li>

		

	<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Ventas</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="ventas">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar ventas</span>

						</a>

					</li>

					<li>

						<a href="crear-venta">
							
							<i class="fa fa-circle-o"></i>
							<span>Crear venta</span>

						</a>

					</li>


					<li>

						<a href="reportes">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte de ventas</span>

						</a>

					</li>

					

				

			</ul>

			</li>

		


		</ul>

	 </section>

</aside>';
}



















?>

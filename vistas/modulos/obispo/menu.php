<?php

if ($_SESSION["perfil"] == "Obispo") {

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

			<a href="miembros">
				
				<i class="fa fa-child"></i>
				<span>Registrar Miembro</span>

			</a>

		</li>


	<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Solicitudes Medicinas </span>
					
					<span class="pull-right-container">
					
					<i class="fa fa-angle-left pull-right"></i>

				</span>

				</a>

				<ul class="treeview-menu">
					
				
					<li>

						<a href="realizar-solicitud">
							
							<i class="fa fa-circle-o"></i>
							<span>Realizar Solicitud</span>

						</a>

					</li>

					
					<li>

						<a href="solicitudes-en-camino">
							
							<i class="fa fa-circle-o"></i>
							<span>Solicitudes En Camino</span>

						</a>

					</li>

					<li>

					<a href="entregadas">
						
						<i class="fa fa-circle-o"></i>
						<span>Solicitudes Entregadas</span>

					</a>

				</li>



					<li>

					<a href="desaprobadas">
						
						<i class="fa fa-circle-o"></i>
						<span>Desaprobadas</span>

					</a>

				</li>

					<li>

						<a href="Reportes">
							
							<i class="fa fa-circle-o"></i>
							<span>Reportes</span>

						</a>

					</li>

					

				

			</ul>

			</li>

		


		</ul>

	 </section>

</aside>';
}



















?>

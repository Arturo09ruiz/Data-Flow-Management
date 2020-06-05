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
					
					<span>Pedidos Medicinas </span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
				
					<li>

						<a href="realizar-solicitud">
							
							<i class="fa fa-circle-o"></i>
							<span>Realizar Pedido</span>

						</a>

					</li>


					<li>

						<a href="#">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte de Solicitudes</span>

						</a>

					</li>

					

				

			</ul>

			</li>

		


		</ul>

	 </section>

</aside>';
}



















?>

<?php

if ($_SESSION["perfil"] == "Asesor-Medico") {

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



	<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Solicitud Medicinas</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
				
					<li>

						<a href="solicitud">
							
							<i class="fa fa-circle-o"></i>
							<span>Visualizar Solicitud</span>

						</a>

					</li>

					

				

			</ul>

			</li>

		


		</ul>

	 </section>

</aside>';
}



















?>

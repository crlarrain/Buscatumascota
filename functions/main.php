<?php

//include('classes.php');
//Funcion encargada de mostrar el menu correspondiente 
function get_menu(){
	if(isset($_SESSION['users']['id']))
	{
		echo '<div class="menuPrincipal">
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="search.php">Busqueda</li>
					<li><a href="Blog.php">Blog</a></li>
					<li><a href="">Iniciar Sesion</a></li>
					<li><a href="">Registrarse</a></li>
				</ul>
			  </div>';
	}else{
		echo '<div class="menuPrincipal">
				<ul>menu 2
					<li>sub-menu 4</li>
					<li>sub-menu 5</li>
					<li>sub-menu 6</li>
				</ul>
			  </div>';
	}
}


?>
<?php
	/**
	* 
	*/
	class registroController
	{
		
		public function registrarUsuario()
		{
			require_once('view/all/header.php');
			require_once('view/all/navbar.php');
			require_once('view/registro/registrarUsuario.php');
			require_once('view/all/footer.php');
		}

		public function registrovehiculo()
		{
			require_once('view/all/header.php');
			require_once('view/all/navbar.php');
			require_once('view/registro/registrovehiculo.php');
			require_once('view/all/footer.php');
		}
	}
	
?>
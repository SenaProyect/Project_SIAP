<?php

	/**
	* 
	*/
	class loginController{
		
		public function login(){

			/*el orden en el q se pongan apareceran en la pagina*/
			require_once('view/all/header.php');
			require_once('view/login/login.php');
			require_once('view/all/footer.php');
		}
	}

?>
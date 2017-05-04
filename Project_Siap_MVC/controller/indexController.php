<?php

	/**
	* 
	*/
	class indexController{
		
		public function index(){

			/*el orden en el q se pongan apareceran en la pagina*/
			require_once('view/all/header.php');//cabeza
			require_once('view/all/navbar.php');
		//	require_once('view/all/banner.php');
			require_once('view/all/carousel.php');
			require_once('view/index/index.php');
			require_once('view/all/footer.php');//pie de pagina
		}
	}

?>
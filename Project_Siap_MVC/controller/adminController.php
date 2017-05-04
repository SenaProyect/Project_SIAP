<?php

	/**
	* 
	*/
	class adminController{
		
		public function admin(){

			/*el orden en el q se pongan apareceran en la pagina*/
			require_once('view/all/header.php');
			require_once('view/all/navbar.php');
			require_once('view/all/menu_crud.php');
			require_once('view/admin/admin.php');
			require_once('view/all/footer.php');
		}


		public function queryhistory(){ //porque con esto declaramos todas las consulatas que va hacer el admin
			require_once('view/all/header.php');
			require_once('view/all/navbar.php');
			require_once('view/all/menu_crud.php');
			require_once('view/admin/history.php');
			require_once('view/all/footer.php');

		}
		public function queryregistros(){
			require_once('view/all/header.php');
			require_once('view/all/navbar.php');
			require_once('view/all/menu_crud.php');
			require_once('view/admin/registros.php');
			require_once('view/all/footer.php');
		}

			public function queryconsultvehicule(){
			require_once('view/all/header.php');
			require_once('view/all/navbar.php');
			require_once('view/all/menu_crud.php');
			require_once('view/admin/consultvehicule.php');
			require_once('view/all/footer.php');
		}
					public function queryusersinactiveoractive(){
			require_once('view/all/header.php');
			require_once('view/all/navbar.php');
			require_once('view/all/menu_crud.php');
			require_once('view/admin/usersinactiveoractive.php');
			require_once('view/all/footer.php');
		}
					public function querycompletdisponibility(){
			require_once('view/all/header.php');
			require_once('view/all/navbar.php');
			require_once('view/all/menu_crud.php');
			require_once('view/admin/completdisponibility.php');
			require_once('view/all/footer.php');
		}
				public function queryadminpage(){
			require_once('view/all/header.php');
			require_once('view/all/navbar.php');
			require_once('view/all/menu_crud.php');
			require_once('view/admin/adminpage.php');
			require_once('view/all/footer.php');
		}
				public function queryreportproblems(){
			require_once('view/all/header.php');
			require_once('view/all/navbar.php');
			require_once('view/all/menu_crud.php');
			require_once('view/admin/reportproblems.php');
			require_once('view/all/footer.php');
		}
				public function querylasthour(){
			require_once('view/all/header.php');
			require_once('view/all/navbar.php');
			require_once('view/all/menu_crud.php');
			require_once('view/admin/lasthour.php');
			require_once('view/all/footer.php');
		}
			public function queryprogram(){
			require_once('view/all/header.php');
			require_once('view/all/navbar.php');
			require_once('view/all/menu_crud.php');
			require_once('view/admin/program.php');
			require_once('view/all/footer.php');
		}
				public function queryage(){
			require_once('view/all/header.php');
			require_once('view/all/navbar.php');
			require_once('view/all/menu_crud.php');
			require_once('view/admin/age.php');
			require_once('view/all/footer.php');
		}


	}



?>
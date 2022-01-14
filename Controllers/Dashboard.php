<?php

	/**
	 * 
	 */
	class Dashboard extends Controllers{
		
		function __construct()
		{
			parent::__construct();
		}

		public function dashboard(){
			$data['page_id']=1;
			$data['tag_page']='Dashboard';
			$data['page_title']='Pagina pricipal';
			$data['page_name']='dashboard';
			$data['page_content']='Lorem ipsum dolor sit ametm consectetur adipisicing elit';
			$this->views->getView($this,'dashboard',$data);
		}
		

		

	}


?>
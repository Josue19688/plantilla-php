<?php

	/**
	 * 
	 */
	class Home extends Controllers{
		
		function __construct()
		{
			parent::__construct();
		}

		public function home(){
			$data['page_id']=1;
			$data['tag_page']='Home';
			$data['page_title']='Pagina pricipal';
			$data['page_name']='home';
			$data['page_content']='Lorem ipsum dolor sit ametm consectetur adipisicing elit';
			$this->views->getView($this,'home',$data);
		}
		

		

	}


?>
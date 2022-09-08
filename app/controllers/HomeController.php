<?php

	class HomeController extends Controller{

		public function index($a = '', $b = ''){
			$items = $this->model('item')->get();
			

			$this->view('home/index', ['items'=>$items]);
		}
	}
?>
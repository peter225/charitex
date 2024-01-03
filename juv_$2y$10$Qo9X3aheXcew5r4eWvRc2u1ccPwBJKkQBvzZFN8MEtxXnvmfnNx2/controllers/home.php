<?php

class Home extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function default()
	{
		$this->view('Home/index');
		
	}
	// public function checkout()
	// {
	// 	$this->view('Home/checkout');
	// }

	

}
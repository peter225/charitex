<?php

class Registration extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function default()
	{
		$this->view('Registration/registration');
		
	}
}
<?php
namespace web\controller;

use Gregwar\Captcha\CaptchaBuilder;
use core\View;

class Index
{
	protected $view;

	public function __construct(){
		$this->view = new View();
	}
	
	public function show()
	{
		return $this->view->make('index')->with('version','版本0.1.0');
	}
	
	public function login()
	{
		// dd($_SESSION);
		return $this->view->make('login');
	}
	
	public function code()
	{
		header('Content-type: image/jpeg');
		$builder = new CaptchaBuilder;
		$builder->build();
		$_SESSION['phrase'] = $builder->getPhrase();
		$builder->output();
	}
}
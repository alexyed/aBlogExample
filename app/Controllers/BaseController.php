<?php

namespace App\Controllers;

use Zend\Diactoros\Response\HtmlResponse;

class BaseController {

	protected $twig;

	public function __construct() {
		$loader = new \Twig_Loader_Filesystem('../views');
		$this->twig = new Twig_Environment($loader, array(
			'debug' => true,
    		'cache' => false
		));
	}

	public function render($fileName, $data = []) {
		return new HtmlResponse($this->twig->render($fileName, $data));
	}
}
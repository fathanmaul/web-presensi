<?php

/**
 * @author Lutfi Sobri
 * @link https://kateruriyu.my.id
 * 
 */
class App
{
	protected $controller = 'homeController';
	protected $method = 'index';
	protected $params = [];

	public function __construct()
	{
		$url = $this->parseURL();
		if ($url != null) {
			if (file_exists('app/controllers/' . $url[0] . 'Controller.php')) {
				$this->controller = $url[0] . 'Controller';
				unset($url[0]);
			} else {
				require_once 'app/views/errors/404.php';
				die;
			}
		}

		require_once 'app/controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;

		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			} else {
				require_once 'app/views/errors/404.php';
				die;
			}
		}

		if (!empty($url)) {
			$this->params = array_values($url);
		}

		call_user_func_array([$this->controller, $this->method], $this->params) or die;
	}

	public function parseURL()
	{
		if (isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
}

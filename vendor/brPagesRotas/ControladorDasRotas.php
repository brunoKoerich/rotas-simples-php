<?php

namespace vendor\brPagesRotas;

abstract class ControladorDasRotas
{
	private $routes;
	private $routeFound = false;

	function __construct()
	{
		$this->registraRotas();
		$this->run($this->getUrl());
	}

	//classe abstrata, quem herdar devera implementar esta classe da sua maneira
	abstract protected function registraRotas();

	protected function run($url)
	{
		/*Percorrendo rotas cadastradas em app/mainRoutes.php */
		array_walk($this->routes, function($route) use($url){
			if($url == $route['route']){
				//Econtra o controller e executa a ação da Rota
				$class = "app\\controllers\\".ucfirst($route['controller']);
				$controller = new $class;
				$controller->$route['action']();
				$this->routeFound = true;
			}		
		});
		if($this->routeFound == false){
			//echo "Page not found";
			require_once "app/views/404.phtml";
		}
	}

	protected function setRoutes(array $routes){
		$this->routes = $routes;
	}

	protected function getUrl()
	{
		$link=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
		$linkExplode = explode('/', $link);
		return $linkExplode[2];
		//Alterar a linha acima para: $linkExplode[1] quando estiver na hospedagem
		//Em ambiente localhoat deixar: $linkExplode[2]
	}
}
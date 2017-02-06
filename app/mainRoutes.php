<?php
namespace app;
//usando meu micro-framework brpagesRoutes localizado em vendor
use \vendor\brPagesRotas\ControladorDasRotas;

class MainRoutes extends ControladorDasRotas
{
	protected function registraRotas()
	{
		/*Registrando minhas Rotas, associando a um controller e chamando o método do controller*/
		$ar['principal'] = array('route'=>'', 'controller'=>'ControllerPagePrincipal','action'=>'renderPrincipal');
		$ar['principalHome'] = array('route'=>'home', 'controller'=>'ControllerPagePrincipal','action'=>'renderPrincipal');
		$ar['empresa'] = array('route'=>'empresa', 'controller'=>'ControllerPageEmpresa','action'=>'renderEmpresa');
		$ar['sobre'] = array('route'=>'sobre', 'controller'=>'ControllerPageSobre','action'=>'renderSobre');
		$ar['showform'] = array('route'=>'showform', 'controller'=>'ControllerForm','action'=>'renderForm');
		$ar['form'] = array('route'=>'form', 'controller'=>'ControllerForm','action'=>'mostraDados');

		/*ROTAS ADM*/
		$ar['principalAdm'] = array('route'=>'principalAdm', 'controller'=>'ControllerPagePrincipalAdm','action'=>'renderPrincipalAdm');

		//START
		$this->setRoutes($ar);
	}
	/*OBS: O Arquivo está buscando nas pastas public e admin, (app/views ...)
		   altere e/ou acrescente conforme a necessidade.*/

}
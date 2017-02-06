<?php
namespace app\controllers;
use vendor\brPagesRotas\RenderActions;

class ControllerPagePrincipal extends RenderActions
{
	public function renderPrincipal()
	{
		$this->data->title='HOME';
		$this->render('principal');
	}
}
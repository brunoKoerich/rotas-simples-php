<?php
namespace app\controllers;
use vendor\brPagesRotas\RenderActions;

class ControllerPageEmpresa extends RenderActions
{
	public function renderEmpresa()
	{
		$this->data->title='Empresa';
		$this->render('empresa');
	}
}
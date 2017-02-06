<?php
namespace app\controllers;
use vendor\brPagesRotas\RenderActions;

class ControllerPageSobre extends RenderActions
{
	public function renderSobre()
	{
		$this->data->title='Sobre';
		$this->render('sobre');
	}
}
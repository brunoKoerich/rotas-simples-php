<?php
namespace app\controllers;
use vendor\brPagesRotas\RenderActions;

class ControllerPagePrincipalAdm extends RenderActions
{
	public function renderPrincipalAdm()
	{
		$this->data->title='Home ADM';
		$this->renderAdm('principalAdm');
	}
}
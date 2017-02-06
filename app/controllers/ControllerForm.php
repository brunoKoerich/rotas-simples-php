<?php
namespace app\controllers;
use vendor\brPagesRotas\RenderActions;

class ControllerForm extends RenderActions
{
	public function renderForm()
	{
		//$this->data->title='Formulário';
		$this->render('form');
	}
	
	// Apenas para dar uma noção de como passar dados de um formulario //
	public function mostraDados()
	{
		$dadoForm = $_POST['txNome'];
		echo "Você passou o dado do formulário ao método do ControllerForm <br/>
			  capturado: nome = {$dadoForm}";
		//- poderia chamar um model e passar os dados,
		//- depois pegar o retorno e atribuir a view...
	}
}
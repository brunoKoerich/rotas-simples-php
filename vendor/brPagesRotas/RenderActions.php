<?php
namespace vendor\brPagesRotas;

class RenderActions
{

	protected $data;
	
	function __construct()
	{
		$this->data = new \stdClass;

	}

	public function render($action)
	{
		require_once "app/views/public/includes/header.php";
		include_once 'app/views/public/'.$action.'.phtml';
		require_once "app/views/public/includes/footer.php";
	}

	public function renderAdm($action)
	{
		require_once "app/views/admin/includes/headerAdm.php";
		include_once 'app/views/admin/'.$action.'.phtml';
		require_once "app/views/admin/includes/footerAdm.php";
	}
}
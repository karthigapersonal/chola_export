<?php

class DefaultController extends Controller
{
	 // public $layout=false;
	public function actionIndex()
	{
		$this->layout = false;
		// echo md5(123);
		$this->render('index');
	}
}
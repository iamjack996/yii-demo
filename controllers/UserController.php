<?php

namespace app\controllers;

use app\models\UserBase;
use yii\web\Controller;

class UserController extends Controller
{

	public function actionIndex()
	{
		$request = \Yii::$app->request;
//		dd($request->get('id'));

		$sql = "select * from userBase where id = 1";
		$user = UserBase::findBySql($sql)->all();

		dd($user);

		return $this->render('index');
	}
}

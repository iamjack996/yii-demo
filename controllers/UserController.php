<?php

namespace app\controllers;

use app\models\UserBase;
use yii\web\Controller;

class UserController extends Controller
{

	public function actionIndex()
	{
		$request = \Yii::$app->request;
		$u_id = $request->get('id');

		// Read

		$sql = "select * from userBase where id = :id";
//		$user = UserBase::findBySql($sql, [':id' => $u_id])->all();

//		$user = UserBase::find()->all();
		$user = UserBase::find()->where(['id' => $u_id])->all();
//		$user = UserBase::find()->where(['between', 'id', 0, 3])->all(); // get
//		$user = UserBase::find()->where(['id' => $u_id])->one(); // first
//		$user = UserBase::findOne($u_id); // first
//		$user = UserBase::findAll([1, 2]); // get
//		$user = UserBase::find()->asArray()->all();
		dd($user->attributesw['age']);

//		foreach (UserBase::find()->batch(2) as $user) $data[] = $user;


		// Create
//		$user = new UserBase();
//		$user->account = 'test2222';
//		$user->password = 1234;
//		$user->name = '222';
//		$user->age = 22;
////		$result = $user->insert();
//		$result = $user->save();
//		print_r($result); // true or false
//		$newId = $user->attributes['id'];
//
//		dd($newId);


		// Update
//		$user = UserBase::findOne(7);
//		$user->age = 99;
////		$result = $user->update(); // 有無更新 T or F
//		$result = $user->save(); // 有無更新 T or F

//		$result = UserBase::updateAllCounters(['age' => 1], ['id' => 1]); // update age+=1 where id = 1
//		dd($result);


		// Delete
//		$user = UserBase::findOne(7);
//		$result = $user->delete();
//		$result = UserBase::deleteAll('id=:id And age>:age', [':id' => 6, ':age' => 100]); // 有無刪除 T or F
//		dd($result);


		return $this->render('index');
	}
}

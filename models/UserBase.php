<?php

namespace app\models;

use yii\db\ActiveRecord;

class UserBase extends ActiveRecord {

	public static function tableName()
	{
		return 'userBase';
	}
}

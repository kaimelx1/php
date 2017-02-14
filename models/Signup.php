<?php

namespace app\models;

use yii\base\Model;

class Signup extends Model
{

    public $username;
    public $password;

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            ['username', 'unique', 'targetClass' => 'app\models\User'],
            ['password', 'string', 'min' => 2, 'max' => 10]
        ];
    }

    public function signup()
    {
        $user = new User();
        $user->username = $this->username;
        $user->setPassword($this->password);
        $user->setAuthKey();
        return $user->save(); // true or false
    }
}

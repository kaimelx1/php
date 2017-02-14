<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $access_token
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username'], 'string', 'max' => 15],
            [['password', 'auth_key', 'access_token'], 'string', 'min' => 2, 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
        ];
    }

    /**
     * Set password action.
     *
     * @return string
     */
    public function setPassword($password)
    {
        return $this->password = md5($password);
    }

    /**
     * Set authentication key action.
     *
     * @return string
     */
    public function setAuthKey()
    {
        return $this->auth_key = md5(rand());
    }

    /**
     * Get info about all users.
     *
     * @return array
     */
    public static function getAll()
    {
        $data = self::find()->all();
        
        return $data;
    }

    /**
     * Get info about one user.
     *
     * @return array
     */
    public static function getOne($id)
    {
        $data = self::find()->where(['id' => $id])->one();

        return $data;
    }
}

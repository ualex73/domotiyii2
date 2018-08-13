<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $fullname
 * @property integer $admin
 * @property string $comments
 * @property string $lastlogin
 * @property string $emailaddress
 * @property string $cookie
 * @property integer $options1
 * @property string $tfasecret
 * @property integer $tfaenabled
 */
class Users extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin', 'tfaenabled'], 'boolean'],
            [['comments'], 'string'],
            [['options1'], 'integer'],
            [['username', 'cookie'], 'string', 'max' => 64],
            [['password'], 'string', 'max' => 128],
            [['fullname', 'lastlogin', 'emailaddress'], 'string', 'max' => 32],
            [['tfasecret'], 'string', 'max' => 16],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'fullname' => Yii::t('app', 'Fullname'),
            'admin' => Yii::t('app', 'Admin'),
            'comments' => Yii::t('app', 'Comments'),
            'lastlogin' => Yii::t('app', 'Lastlogin'),
            'emailaddress' => Yii::t('app', 'Emailaddress'),
            'cookie' => Yii::t('app', 'Cookie'),
            'options1' => Yii::t('app', 'Options1'),
            'tfasecret' => Yii::t('app', 'Tfasecret'),
            'tfaenabled' => Yii::t('app', 'Tfaenabled'),
        ];
    }
}

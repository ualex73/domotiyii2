<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $zipcode
 * @property string $city
 * @property string $country
 * @property string $phoneno
 * @property string $mobileno
 * @property string $email
 * @property string $cidphone
 * @property string $cidmobile
 * @property string $birthday
 * @property integer $holidaycard
 * @property string $comments
 * @property string $firstname
 * @property string $surname
 * @property integer $callnr
 * @property integer $type
 * @property string $firstseen
 * @property string $lastseen
 */
class Contacts extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['birthday', 'firstseen', 'lastseen'], 'safe'],
            [['holidaycard'], 'boolean'],
            [['comments'], 'string'],
            ['name','required'],
            [['callnr', 'type'], 'integer'],
            [['name', 'cidphone', 'cidmobile'], 'string', 'max' => 64],
            [['address', 'city', 'country', 'phoneno', 'mobileno', 'email', 'firstname', 'surname'], 'string', 'max' => 32],
            [['zipcode'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'address' => Yii::t('app', 'Address'),
            'zipcode' => Yii::t('app', 'Zipcode'),
            'city' => Yii::t('app', 'City'),
            'country' => Yii::t('app', 'Country'),
            'phoneno' => Yii::t('app', 'Phoneno'),
            'mobileno' => Yii::t('app', 'Mobileno'),
            'email' => Yii::t('app', 'Email'),
            'cidphone' => Yii::t('app', 'Cidphone'),
            'cidmobile' => Yii::t('app', 'Cidmobile'),
            'birthday' => Yii::t('app', 'Birthday'),
            'holidaycard' => Yii::t('app', 'Holidaycard'),
            'comments' => Yii::t('app', 'Comments'),
            'firstname' => Yii::t('app', 'Firstname'),
            'surname' => Yii::t('app', 'Surname'),
            'callnr' => Yii::t('app', 'Callnr'),
            'type' => Yii::t('app', 'Type'),
            'firstseen' => Yii::t('app', 'Firstseen'),
            'lastseen' => Yii::t('app', 'Lastseen'),
        ];
    }
}

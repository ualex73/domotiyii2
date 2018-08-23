<?php

namespace app\models;

use cebe\markdown\block\HtmlTrait;
use Yii;

/**
 * This is the model class for table "sslcertificates".
 *
 * @property integer $id
 * @property string $name
 * @property string $certificate
 * @property string $private
 * @property string $client
 * @property string $description
 */
class Sslcertificates extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sslcertificates';
    }

//    public static function getSSLCertificates() {
//        return Html::listData(Sslcertificates::findAll(['order' => 'name ASC'], 'id', 'name'));
//    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 64],
            [['certificate', 'private', 'client'], 'string', 'max' => 128],
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
            'certificate' => Yii::t('app', 'Certificate'),
            'private' => Yii::t('app', 'Private'),
            'client' => Yii::t('app', 'Client'),
            'description' => Yii::t('app', 'Description'),
        ];
    }
}

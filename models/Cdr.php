<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cdr".
 *
 * @property string $calldate
 * @property string $clid
 * @property string $src
 * @property string $dst
 * @property string $dcontext
 * @property string $channel
 * @property string $dstchannel
 * @property string $lastapp
 * @property string $lastdata
 * @property integer $duration
 * @property integer $billsec
 * @property string $disposition
 * @property integer $amaflags
 * @property string $accountcode
 * @property string $userfield
 * @property string $uniqueid
 * @property integer $id
 */
class Cdr extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cdr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['calldate'], 'safe'],
            [['duration', 'billsec', 'amaflags'], 'integer'],
            [['clid', 'src', 'dst', 'dcontext', 'channel', 'dstchannel', 'lastapp', 'lastdata'], 'string', 'max' => 80],
            [['disposition'], 'string', 'max' => 45],
            [['accountcode'], 'string', 'max' => 20],
            [['userfield'], 'string', 'max' => 255],
            [['uniqueid'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'calldate' => Yii::t('app', 'Calldate'),
            'clid' => Yii::t('app', 'Clid'),
            'src' => Yii::t('app', 'Src'),
            'dst' => Yii::t('app', 'Dst'),
            'dcontext' => Yii::t('app', 'Dcontext'),
            'channel' => Yii::t('app', 'Channel'),
            'dstchannel' => Yii::t('app', 'Dstchannel'),
            'lastapp' => Yii::t('app', 'Lastapp'),
            'lastdata' => Yii::t('app', 'Lastdata'),
            'duration' => Yii::t('app', 'Duration'),
            'billsec' => Yii::t('app', 'Billsec'),
            'disposition' => Yii::t('app', 'Disposition'),
            'amaflags' => Yii::t('app', 'Amaflags'),
            'accountcode' => Yii::t('app', 'Accountcode'),
            'userfield' => Yii::t('app', 'Userfield'),
            'uniqueid' => Yii::t('app', 'Uniqueid'),
            'id' => Yii::t('app', 'ID'),
        ];
    }
}

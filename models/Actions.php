<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actions".
 *
 * @property integer $id
 * @property string $name
 * @property integer $type
 * @property string $description
 * @property string $param1
 * @property string $param2
 * @property string $param3
 * @property string $param4
 * @property string $param5
 */
class Actions extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'integer'],
            [['name','type'],'required'],
            [['description', 'param1', 'param2', 'param3', 'param4', 'param5'], 'string'],
            [['name'], 'string', 'max' => 64],
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
            'type' => Yii::t('app', 'Type'),
            'description' => Yii::t('app', 'Description'),
            'param1' => Yii::t('app', 'Param1'),
            'param2' => Yii::t('app', 'Param2'),
            'param3' => Yii::t('app', 'Param3'),
            'param4' => Yii::t('app', 'Param4'),
            'param5' => Yii::t('app', 'Param5'),
        ];
    }

    /**
     * Define action names
     */
    private $actionnames = array(
        '1' => 'Set Device Value',
        '2' => 'Set Globalvar',
        '3' => 'Send e-mail',
        '4' => 'Speak Text',
        '5' => 'Execute Cmd',
        '6' => 'Send Tweet',
        '7' => 'Send SMS',
        '8' => 'Send IRTrans',
        '9' => 'Play Sound',
        '10' => 'Write Log Entry',
        '11' => 'Display LED Msg',
        '12' => 'AV Control',
        '13' => 'Timer Delay',
        '14' => 'Notify Send',
        '15' => 'Script',
        '16' => 'JSON Post/Get',
        '17' => 'Send Prowl PushMsg',
        '18' => 'Send NMA PushMsg',
        '19' => 'Send Pushover PushMsg',
        '20' => 'Send Pushbullet PushMsg',
        '21' => 'Soft Dimming',
        '22' => 'Send UDP Message',
        '23' => 'Publish MQTT Message'
    );

    /**
     * @return array with all actiontypes texts
     */
    public function getAllActionTypes() {
        $translated = $this->actionnames;
        foreach ($translated as $i => $d)
            $translated[$i] = Yii::t('app', $d);
        return $translated;
    }

    /**
     * @return actionname for $action
     */
    public function getActionText($action) {
        return isset($this->actionnames[$action]) ? Yii::t('app',$this->actionnames[$action]) : null;
    }

    /**
     * @return device name from his id
     */
    public function getDeviceName($id) {
        $dev = Devices::find()->where(['id'=>1])->one();
        return ($dev===NULL?"":$dev->name);
    }

}

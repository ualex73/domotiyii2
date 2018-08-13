<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $name
 * @property integer $log
 * @property string $firstrun
 * @property string $lastrun
 * @property string $comments
 * @property integer $trigger_id
 * @property integer $condition1_id
 * @property string $operand
 * @property integer $condition2_id
 * @property integer $rerunenabled
 * @property integer $rerunvalue
 * @property string $reruntype
 * @property integer $category_id
 */
class Events extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enabled', 'log', 'rerunenabled'], 'boolean'],
            [['firstrun', 'lastrun'], 'safe'],
            [['comments'], 'string'],
            [['trigger_id', 'condition1_id', 'condition2_id', 'rerunvalue', 'category_id'], 'integer'],
            [['name'], 'string', 'max' => 64],
            [['operand', 'reruntype'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'enabled' => Yii::t('app', 'Enabled'),
            'name' => Yii::t('app', 'Name'),
            'log' => Yii::t('app', 'Log'),
            'firstrun' => Yii::t('app', 'Firstrun'),
            'lastrun' => Yii::t('app', 'Lastrun'),
            'comments' => Yii::t('app', 'Comments'),
            'trigger_id' => Yii::t('app', 'Trigger ID'),
            'condition1_id' => Yii::t('app', 'Condition1 ID'),
            'operand' => Yii::t('app', 'Operand'),
            'condition2_id' => Yii::t('app', 'Condition2 ID'),
            'rerunenabled' => Yii::t('app', 'Rerunenabled'),
            'rerunvalue' => Yii::t('app', 'Rerunvalue'),
            'reruntype' => Yii::t('app', 'Reruntype'),
            'category_id' => Yii::t('app', 'Category ID'),
        ];
    }
}

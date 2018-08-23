<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events_actions".
 *
 * @property integer $event
 * @property integer $action
 * @property integer $order
 * @property integer $delay
 */
class EventsActions extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events_actions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event', 'action', 'order', 'delay'], 'required'],
            [['event', 'action', 'order', 'delay'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'event' => Yii::t('app', 'Event'),
            'action' => Yii::t('app', 'Action'),
            'order' => Yii::t('app', 'Order'),
            'delay' => Yii::t('app', 'Delay'),
        ];
    }
}

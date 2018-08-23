<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "graph_data".
 *
 * @property integer $id
 * @property integer $graph_id
 * @property string $graph_name
 * @property integer $graph_max
 * @property integer $graph_min
 * @property integer $graph_last
 * @property integer $graph_avg
 * @property integer $graph_value_max
 * @property integer $graph_value_avg
 * @property integer $graph_value_min
 * @property integer $graph_value_max_color
 * @property integer $graph_value_avg_color
 * @property integer $graph_value_min_color
 * @property string $graph_line_type
 * @property string $graph_rrddsname
 * @property integer $graph_color
 * @property integer $graph_trend
 * @property integer $graph_trend_value
 * @property integer $graph_timeshift
 * @property integer $graph_timeshift_value
 * @property integer $graph_operation
 * @property string $graph_operation_operator
 * @property integer $graph_operation_value
 * @property string $graph_devicename
 * @property integer $ds_id
 */
class GraphData extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'graph_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['graph_id', 'graph_name', 'graph_value_max_color', 'graph_value_avg_color', 'graph_value_min_color', 'graph_rrddsname', 'graph_trend', 'graph_trend_value', 'graph_timeshift', 'graph_timeshift_value', 'graph_operation', 'graph_operation_operator', 'graph_operation_value', 'graph_devicename', 'ds_id'], 'required'],
            [['graph_id', 'graph_value_max_color', 'graph_value_avg_color', 'graph_value_min_color', 'graph_color', 'graph_trend_value', 'graph_timeshift_value', 'graph_operation_value', 'ds_id'], 'integer'],
            [['graph_max', 'graph_min', 'graph_last', 'graph_avg', 'graph_value_max', 'graph_value_avg', 'graph_value_min', 'graph_trend', 'graph_timeshift', 'graph_operation'], 'boolean'],
            [['graph_name', 'graph_rrddsname', 'graph_devicename'], 'string', 'max' => 32],
            [['graph_line_type'], 'string', 'max' => 10],
            [['graph_operation_operator'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'graph_id' => Yii::t('app', 'Graph ID'),
            'graph_name' => Yii::t('app', 'Graph Name'),
            'graph_max' => Yii::t('app', 'Graph Max'),
            'graph_min' => Yii::t('app', 'Graph Min'),
            'graph_last' => Yii::t('app', 'Graph Last'),
            'graph_avg' => Yii::t('app', 'Graph Avg'),
            'graph_value_max' => Yii::t('app', 'Graph Value Max'),
            'graph_value_avg' => Yii::t('app', 'Graph Value Avg'),
            'graph_value_min' => Yii::t('app', 'Graph Value Min'),
            'graph_value_max_color' => Yii::t('app', 'Graph Value Max Color'),
            'graph_value_avg_color' => Yii::t('app', 'Graph Value Avg Color'),
            'graph_value_min_color' => Yii::t('app', 'Graph Value Min Color'),
            'graph_line_type' => Yii::t('app', 'Graph Line Type'),
            'graph_rrddsname' => Yii::t('app', 'Graph Rrddsname'),
            'graph_color' => Yii::t('app', 'Graph Color'),
            'graph_trend' => Yii::t('app', 'Graph Trend'),
            'graph_trend_value' => Yii::t('app', 'Graph Trend Value'),
            'graph_timeshift' => Yii::t('app', 'Graph Timeshift'),
            'graph_timeshift_value' => Yii::t('app', 'Graph Timeshift Value'),
            'graph_operation' => Yii::t('app', 'Graph Operation'),
            'graph_operation_operator' => Yii::t('app', 'Graph Operation Operator'),
            'graph_operation_value' => Yii::t('app', 'Graph Operation Value'),
            'graph_devicename' => Yii::t('app', 'Graph Devicename'),
            'ds_id' => Yii::t('app', 'Ds ID'),
        ];
    }
}

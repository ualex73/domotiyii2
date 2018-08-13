<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "graphs".
 *
 * @property integer $id
 * @property string $name
 * @property integer $enabled
 * @property string $comments
 * @property string $graph_title
 * @property integer $graph_height
 * @property integer $graph_width
 * @property integer $color_background
 * @property integer $color_canvas
 * @property integer $color_shadea
 * @property integer $color_shadeb
 * @property integer $color_font
 * @property integer $color_grid
 * @property integer $color_majorgrid
 * @property integer $color_frame
 * @property integer $color_axis
 * @property integer $color_arrow
 * @property string $unit
 * @property integer $logarithmic_scale
 * @property integer $date
 * @property string $grid_type
 * @property string $groups
 */
class Graphs extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'graphs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'graph_title', 'graph_height', 'graph_width', 'color_background', 'color_canvas', 'color_shadea', 'color_shadeb', 'color_font', 'color_grid', 'color_majorgrid', 'color_frame', 'color_axis', 'color_arrow', 'unit', 'date', 'grid_type'], 'required'],
            [['enabled', 'logarithmic_scale', 'date'], 'boolean'],
            [['graph_height', 'graph_width', 'color_background', 'color_canvas', 'color_shadea', 'color_shadeb', 'color_font', 'color_grid', 'color_majorgrid', 'color_frame', 'color_axis', 'color_arrow'], 'integer'],
            [['name', 'comments', 'graph_title', 'grid_type'], 'string', 'max' => 32],
            [['unit'], 'string', 'max' => 10],
            [['groups'], 'string', 'max' => 128],
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
            'enabled' => Yii::t('app', 'Enabled'),
            'comments' => Yii::t('app', 'Comments'),
            'graph_title' => Yii::t('app', 'Graph Title'),
            'graph_height' => Yii::t('app', 'Graph Height'),
            'graph_width' => Yii::t('app', 'Graph Width'),
            'color_background' => Yii::t('app', 'Color Background'),
            'color_canvas' => Yii::t('app', 'Color Canvas'),
            'color_shadea' => Yii::t('app', 'Color Shadea'),
            'color_shadeb' => Yii::t('app', 'Color Shadeb'),
            'color_font' => Yii::t('app', 'Color Font'),
            'color_grid' => Yii::t('app', 'Color Grid'),
            'color_majorgrid' => Yii::t('app', 'Color Majorgrid'),
            'color_frame' => Yii::t('app', 'Color Frame'),
            'color_axis' => Yii::t('app', 'Color Axis'),
            'color_arrow' => Yii::t('app', 'Color Arrow'),
            'unit' => Yii::t('app', 'Unit'),
            'logarithmic_scale' => Yii::t('app', 'Logarithmic Scale'),
            'date' => Yii::t('app', 'Date'),
            'grid_type' => Yii::t('app', 'Grid Type'),
            'groups' => Yii::t('app', 'Groups'),
        ];
    }
}

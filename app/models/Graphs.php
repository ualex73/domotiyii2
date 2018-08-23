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
        return 'yii_graphs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'type'], 'required'],
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
            'type'=> Yii::t('app','Type')
        ];
    }
    public function getChartTypes()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(0=>'None', 1=>'Bar chart', 2=>'Line chart', 3=>'Gauge');
    }

    private $graphtype = array(
        '0' => 'None',
        '1' => 'Bar Graph',
        '2' => 'Line Graph',
        '3' => 'Gauge Widget',
    );

    /**
     * @return graphname for $graph
     */
    public function getGraphType($graph) {
        return isset($this->graphtype[$graph]) ? Yii::t('app',$this->graphtype[$graph]) : null;
    }

    /*
      This functions returns an array with the devicevalue details.
     */
    public function getDeviceValues() {

        // Create sql to get the devicevalue details.
        // We only get enabled devices and the log option must be enabled on the device_value!
        $sql = "select d.id as DeviceID,
				d.name,
				dv.id as DeviceValueID,
				dv.valuenum,
				dv.value,
				concat( d.name, ' - ', dv.valuenum , ' - ' , dv.value) as Description
			FROM domotiga.devices d
			inner join domotiga.device_values dv on d.id = dv.device_id 
			where d.enabled = -1
			and dv.log = -1";

        // execute query
        $list = Yii::$app->db->createCommand($sql)->queryAll();

        $rs = array();
        foreach ($list as $item) {
            $rs[$item['DeviceValueID']] = $item['Description'];
        }
        $rs[0] = 'None';
        ksort($rs);

        return $rs;
    }
    public static function getChartDetails($deviceid, $valuenum, $charttype) {
        // Create sql to get the chart details
        if ($charttype == 1) {
            $sql = "select dv.valuerrddsname as chartname,
			dvl.value as chartvalue,
			dv.device_id as device
			from device_values dv
			inner join device_values_log dvl 
				on dv.device_id = dvl.device_id 
				and dv.valuenum = dvl.valuenum
			where dv.device_id = " . $deviceid . "
			and dv.valuenum = " . $valuenum . "
			group by dv.valuerrddsname,
			dvl.value";
        } else {
            $sql = "select now()";
        }

        // execute query
        $list = Yii::$app->db->createCommand($sql)->queryAll();
        print_r($list);die;
        $rs = array();
        foreach ($list as $item) {
            $row = array(
                'chartname' => $item['chartname'],
                'chartvalue' => $item['chartvalue'],
                'device' => $item['device']
            );
            $rs[] = $row;
        }
        return $rs;
    }

    public function getLocation($name) {
        // Create all the yiiGraphs
        $sql = "SELECT l.id FROM locations l WHERE l.name ='" . $name . "';";

        // execute query
        $list = Yii::$app->db->createCommand($sql)->queryAll();

        $rs = array();
        foreach ($list as $item) {
            $rs[] = $item['id'];
        }
        return $rs;
    }
}

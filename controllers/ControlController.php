<?php
namespace app\controllers;
use app\models\Cdr;
use app\models\Devices;
use app\models\DeviceValues;
use app\models\DeviceValuesLog;
use Yii;
use yii\data\ActiveDataProvider;

class ControlController extends \yii\web\Controller {

    public $mobile_page = FALSE;

    /**
     * Default filter for access rules
     * */
    public function filters() {
        return array(
            'accessControl',
        );
    }

    public function init() {
        parent::init();
        set_time_limit(30);
    }

    public function actionTable() {
        $type = Yii::$app->request->get('type');
        $location = Yii::$app->request->get('location');
        $res = Devices::find();
        if ($type == 'Control') {
            $res->andFilterWhere(['enabled'=>'-1']);
            $res->andFilterWhere(['hide'=>'0']);
            $res->andWhere(['OR','switchable' => -1, 'dimable' => -1]);
        } else if ($type == 'All') {
            $res->andWhere(['enabled'=>'-1']);
            $res->andWhere('hide is FALSE');
        } else if ($type == 'Sensors') {
            $res->andWhere('enabled is TRUE');
            $res->andWhere('hide is FALSE');
            $res->andWhere(['switchable' => 0, 'dimable' => 0]);
        }

        if ($location !== 'All') {
            $res->with = 'location';
            $res->andWhere(['name'=>$location]);
        }
        $results = $res->all();
        $tab = [];


        foreach ($results as $obj) {

            $row = array(
                $obj->id,
                str_replace('"', "'",$obj->officon),
                $obj->name,
                $obj->location->name,
                $this->getActions($obj),
                $obj->deviceValue1->value,
                $obj->deviceValue2->value,
                $obj->deviceValue3->value,
                $obj->deviceValue4->value,
                $obj['lastchanged'],
            );

            $tab[] = $row;
        }
        if (!is_null(Yii::$app->request->get('ajax'))) {
            $data = array('aaData' => $tab);
            die($this->renderPartial('jsonData', array('data' => $data), TRUE));
        }
        else
            return $this->render('table', array('data' => $tab));
    }

    public function actionList() {

        $date = yii::$app->request->get('date');
        $type = Yii::$app->request->get('type');
        $location = Yii::$app->request->get('location');
        $res = Devices::find();
        if ($type == 'Control') {
            $res->andWhere(['enabled'=>'-1']);
            $res->andWhere(['hide'=>'0']);
            $res->andWhere(['switchable' => -1, 'dimable' => -1]);
        } else if ($type == 'All') {
            $res->andWhere(['enabled'=>'-1']);
            $res->andWhere('hide is FALSE');
        } else if ($type == 'Sensors') {
            $res->andWhere('enabled is TRUE');
            $res->andWhere('hide is FALSE');
            $res->andWhere(array('switchable' => 0, 'dimable' => 0));
        }

        if ($location !== 'All') {
            $res->joinWith('location');
            $res->andWhere(['locations.name'=>$location]);
        }

        $results = $res->all();
        $maxdate = '';
        $tab = array();
        foreach ($results as $obj) {
            $row = array(

                'id' => $obj->id,
                'icon' => str_replace('"', "'", $obj->officon),
                'name' => $obj->name,
                'location' => $obj->location->name,
                'commands' => $this->getActions($obj),
                'val1'=>$obj->deviceValue1->value,
                'val2'=>$obj->deviceValue2->value,
                'val3'=>$obj->deviceValue3->value,
                'val4'=>$obj->deviceValue4->value,
                'lastchanged' => $obj->lastchanged,
            );
            if ($maxdate < $obj->lastchanged)
                $maxdate = $obj->lastchanged;
            $tab[] = $row;
        }
        if ($maxdate == '')
            $maxdate = $date;

        if (!is_null(Yii::$app->request->get('ajax'))) {
            $data = ['tab' => $tab, 'maxdate' => $maxdate];
            die($this->renderPartial('jsonData', array('data' => $data), TRUE));
        }
        else
           return  $this->render('list', ['data' => $tab]);
    }

    public function actionListLongPoll() {
        $date = yii::$app->request->get('date');

//        $crit = $this->getFilter();
        if ($date !== NULL) {
            $crit->addCondition("t.lastchanged > :date");
            $crit->params[':date'] = $date;
        }
        $nb = 0;
        while (true) {
            $nb++;
            $maxdate = '';
            $res = Devices::model()->findAll($crit);
            $tab = array();
            foreach ($res as $obj) {
                $row = array(
                    'id' => $obj->id,
                    'icon' => str_replace('"', "'", $obj->icon),
                    'name' => $obj->name,
                    'location' => $obj->locationtext,
                    'commands' => $this->getActions($obj),
                    'val1' => CHtml::value($obj, 'deviceValue1.value'),
                    'val2' => CHtml::value($obj, 'deviceValue2.value'),
                    'val3' => CHtml::value($obj, 'deviceValue3.value'),
                    'val4' => CHtml::value($obj, 'deviceValue4.value'),
                    'lastchanged' => $obj->lastchanged,
                );
                if ($maxdate < $obj->lastchanged)
                    $maxdate = $obj->lastchanged;
                $tab[] = $row;
            }
            if ($maxdate == '')
                $maxdate = $date;
            if (($maxdate !== $date && count($tab) > 0) || $nb > 20) {
                $data = array('tab' => $tab, 'maxdate' => $maxdate);
                die($this->renderPartial('jsonData', array('data' => $data), TRUE));
            }
            else
                sleep(1);
        }
    }

    private function getFilter() {
        $type = yii::$app->request->get('type');
        $location = yii::$app->request->get(['location']);
        // add conditions that should always apply here
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->query->andWhere();

        if ($type == 'Control') {
//            $query->andFilterWhere(['<>', 'role', $this->role]);
            $crit->andWhere('enabled is TRUE');
            $crit->andWhere('hide is FALSE');
            $crit->addColumnCondition(array('switchable' => -1, 'dimable' => -1), 'OR');
        } else if ($type == 'All') {
            $crit->andWhere('enabled is TRUE');
            $crit->andWhere('hide is FALSE');
        } else if ($type == 'Sensors') {
            $crit->andWhere('enabled is TRUE');
            $crit->andWhere('hide is FALSE');
            $crit->addColumnCondition(array('switchable' => 0, 'dimable' => 0));
        }
//        if ($location !== 'All') {
//            $crit->with = 'l_location';
//            $crit->addCondition("l_location.name='$location'");
//        }
//        $crit = new CDbCriteria();
//        $type = yii::$app->request->getParam('type', 'Control');
//        $location = yii::$app->request->getParam('location', 'All');
//        $crit->order = 't.name ASC';
//        if ($type == 'Control') {
//            $crit->addCondition('enabled is TRUE');
//            $crit->addCondition('hide is FALSE');
//            $crit->addColumnCondition(array('switchable' => -1, 'dimable' => -1), 'OR');
//        } else if ($type == 'All') {
//            $crit->addCondition('enabled is TRUE');
//            $crit->addCondition('hide is FALSE');
//        } else if ($type == 'Sensors') {
//            $crit->addCondition('enabled is TRUE');
//            $crit->addCondition('hide is FALSE');
//            $crit->addColumnCondition(array('switchable' => 0, 'dimable' => 0));
//        }
//        if ($location !== 'All') {
//            $crit->with = 'l_location';
//            $crit->addCondition("l_location.name='$location'");
//        }
//        return $crit;
    }

    protected function getActions($obj) {
        if (isset($obj->deviceValue1->value)) {
            $tmp = str_replace('Dim ', '', $obj->deviceValue1->value);
            if ($tmp == 'Off')
                $tmp = 0; else
            if ($tmp == 'On')
                $tmp = 100;
            $valueOne = (!is_numeric($tmp) ? 0 : $tmp);
            $dimmer = '<div class="slider-container" style="text-align:center;margin:0px;"><input type="text" class="slider" value="" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="' . $valueOne . '" data-slider-orientation="horizontal" data-device="' . $obj->id . '" data-slider-selection="after" data-slider-tooltip="hide">&nbsp;<span style="font-weigth:bold;"></span></div>';
            $space = '<div class="fixSpace"></div>';
            $buttons = '<button type="button" name="but" onClick="btAction(event,this)" data-action="Off" data-device="' . $obj->id . '" class="btn btn-primary btn-mini">Off</button>&nbsp;<button type="button" onClick="btAction(event,this)" data-action="On" data-device="' . $obj->id . '" class="btn btn-primary btn-mini">On</button>';
            if ($obj->SPdevice) {
                $comma = FALSE;
                $tmp = $obj->deviceValue1->value;
                if (strpos($tmp, 'SP') !== FALSE)
                    $tmp = str_replace('SP ', '', $tmp);

                $buff = '<button type="button" name="but" class="btSetPoint btMoins">-</button>'
                    . '<input type="text" class="inputSetPoint" value="' . $tmp . '">'
                    . '<button type="button" class="btSetPoint btPlus">+</button>'
                    . '&nbsp;&nbsp;<button type="button" data-device="' . $obj->id . '" class="btn btn-primary btn-mini btSetPoint">Set</button>';
                return $buff;
            }
            if ($obj->switchable == -1) {
                return $space . $buttons;
            } else if ($obj->dimable == -1)
                return $dimmer . $buttons;
            else
                return "";
        } else {
            return "";
        }
    }
}

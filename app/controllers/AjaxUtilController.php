<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Devices;
use app\models\Globalvars;;
use Yii;
class AjaxUtilController extends Controller {

    /**
     * Default filter for access rules
     * */
    public function filters() {
        return array(
            'accessControl',
        );
    }

    public function actionGetDeviceListSelect() {
        $id = $_GET['id'];
        foreach (Devices::getDevices() as $i => $v) {
            echo "<option value=$i " . ($id == $i ? "SELECTED" : "") . ">$v";
        }
    }

    public function actionGetDeviceLastSeen() {
        $id = $_GET['id'];
        $dev = Devices::model()->findByPk($id);
        echo $dev->lastseen;
    }

    public function actionGetGlobalVarListSelect() {
        $id = $_GET['id'];
        foreach (Globalvars::model()->findAll(array('order' => 'var')) as $m) {
            echo "<option value={$m->var} " . ($m->var == $id ? "SELECTED" : "") . ">{$m->var}";
        }
    }

    private function getFilter() {
        $crit = new CDbCriteria();
        $type = yii::$app->request->get('type', 'Control');
        $location = yii::$app->request->get('location', 'All');
        $crit->order = 't.name ASC';
        if ($type == 'Control') {
            $crit->addCondition('enabled is TRUE');
            $crit->addCondition('hide is FALSE');
            $crit->addColumnCondition(array('switchable' => -1, 'dimable' => -1), 'OR');
        } else if ($type == 'All') {
            $crit->addCondition('enabled is TRUE');
            $crit->addCondition('hide is FALSE');
        } else if ($type == 'Sensors') {
            $crit->addCondition('enabled is TRUE');
            $crit->addCondition('hide is FALSE');
            $crit->addColumnCondition(array('switchable' => 0, 'dimable' => 0));
        }
        if ($location !== 'All') {
            $crit->with = 'l_location';
            $crit->addCondition("l_location.name='$location'");
        }
        return $crit;
    }

    public function actionLastChanged() {
        $req= Devices::find();
        $type = Yii::$app->request->get('type');
        $location = Yii::$app->request->get('location');
        if ($type == 'Control') {
            $req->andWhere(['enabled'=>'-1']);
            $req->andWhere(['hide'=>'0']);
            $req->andWhere(['switchable' => -1, 'dimable' => -1]);
        } else if ($type == 'All') {
            $req->andWhere(['enabled'=>'-1']);
            $req->andWhere(['hide'=>'0']);
        } else if ($type == 'Sensors') {
            $req->andWhere(['enabled'=>'-1']);
            $req->andWhere(['hide'=>'0']);
            $req->andWhere(['switchable' => 0, 'dimable' => 0]);
        }

        if ($location !== 'All') {
            $req->joinWith('location');
            $req->andWhere(['locations.name'=>$location]);
        }

        $results = $req->all();
        if ($results === NULL)
            die('?');
        $lastChanged = $results['lastchanged'];
        echo $lastChanged;
        \Yii::$app->end();
    }

    public function actionUpdateSession() {
        //TODO: dynamic will be better !!
        $name = 'allValues';
        $value = Yii::$app->request->get('allValues');
        if ($value === NULL) {
            $name = 'fullScreen';
            $value = Yii::$app->request->get('fullScreen');
        }
        if ($value == 0) {
            unset(Yii::$app->session[$name]);
        } else {
            Yii::$app->session[$name] = $value;
        }
        die('OK');
    }

    public function actionSetDevice() {
        $device = Yii::$app->request->get('device');
        $action = strip_tags(Yii::$app->request->get('action'));
        if (is_null($device) || is_null($action)) {
            return json_encode(array("jsonrpc" => "2.0", "result" => false, "id" => 1));;
        }
        $result = doJsonRpc('{"jsonrpc": "2.0", "method": "device.set", "params": {"device_id": ' . $device . ', "value": "' . $action . '"}, "id": 1}');
        giveJsonBack($result);
    }

}

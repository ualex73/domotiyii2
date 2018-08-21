<?php

namespace app\controllers;

use app\components\CustomController;
use app\models\SettingsCul;
use Yii;
use yii\helpers\Url;
use yii\web\ServerErrorHttpException;
use yii\data\ArrayDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;

use app\components\Util;
use app\models\Plugins;

class SettingsController extends CustomController
{
    /**
     *
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCul() {
        $model = SettingsCul::model()->findByPk(1);

        if (isset($_POST['SettingsCul'])) {
            $model->attributes = $_POST['SettingsCul'];
            if ($model->validate()) {
                // form inputs are valid, save and restart
                $this->do_save_restart($model, 'cul');
            }
        }
        return $this->render('cul', array('model' => $model));
    }
    public function actionIndexModule() {

        $boolstring='';
        //FIXME : replace with db lookup for names
        $listModules = array();
        $listModules[] = 'astro';
        $listModules[] = 'bwiredmap';
        $listModules[] = 'broadcastudp';
        $listModules[] = 'callerid';
        $listModules[] = 'devicediscover';
        $listModules[] = 'email';
        $listModules[] = 'gmail';
        $listModules[] = 'jsonrpc';
        $listModules[] = 'main';
        $listModules[] = 'mqtt';
        $listModules[] = 'nma';
        $listModules[] = 'p2000';
        $listModules[] = 'xively';
        $listModules[] = 'prowl';
        $listModules[] = 'pushover';
        $listModules[] = 'pushbullet';
        $listModules[] = 'pvoutput';
        $listModules[] = 'serverstats';
        $listModules[] = 'smartvisuserver';
        $listModules[] = 'sound';
        $listModules[] = 'telnetserver';
        $listModules[] = 'temperaturnu';
        $listModules[] = 'thermostat';
        $listModules[] = 'tvguide';
        $listModules[] = 'twitter';
        $listModules[] = 'voicetext';
        $listModules[] = 'weatherunderground';
        $listModules[] = 'xmlrpc';

        //FIXME: perhaps use static arrays if dynamic listing of model *.php is a trouble 
        $pref = '../models/Settings';
        $rawData = array();
        $listTables = Yii::$app->db->getSchema()->getTableNames();
        $filter = Yii::$app->request->get('filter', 'Enabled');

        foreach (glob($pref . '*.php') as $filename) {
            //echo $filename.'<br>';
            //continue ;

            $filename = str_replace($pref, "", $filename);
            $filename = str_replace(".php", "", $filename);
            $d1 = $filename;

            $modelName = 'Settings' . $filename;

            $class =  '\app\models\\'.$modelName;

            $model =  new $class();

            $modelAlias = $model->tableName();

            if (!in_array(strtolower($d1), $listModules))
                continue;
            if (isset($model) && !empty($model) && in_array($modelAlias, $listTables)) {
                $modelRecord = $model->findOne(['id'=>1]);
                if ($model->hasAttribute('enabled')) {
                    if ($modelRecord->enabled !== "0")
                        $d2 = "Enabled";
                    else
                        $d2 = "Disabled";
                }
                else
                    $d2 = "-";
            } else {
                $d2 = "Error : Table not found ($modelAlias)";
                continue; //ignore when not finding table
            }
            $d3 = array();
            $values = $modelRecord->getAttributes();
            
            foreach (array_keys($values) as $l) {
                if ($l !== 'enabled' && $l !== 'id' && $l !== 'password' && $l !== 'debug')
                    $d3[] = "<b>$l</b>=" . $values[$l];
                if ($l == 'password')
                    $d3[] = "<b>$l</b>=" . "*****";
                if ($l == 'debug') {
                    $boolstring = ($values[$l]) ? 'true' : 'false';
                    $d3[] = "<b>$l</b>=" . $boolstring;
                }
            }

            $d3 = implode(', ', $d3);
            if ($filter != 'all' && $filter != $d2)
                continue;
            $d2 = yii::t('app', $d2);
            $line = array(

                "name" => $d1,
                "status" => $d2,
                "information" => $d3
            );
            $rawData[] = $line;
        }
        $arrayDataProvider = new ArrayDataProvider([
            'allModels' => $rawData,
            'key'=>'name',
            'id'=>'name',
            'sort' => [
                'attributes' => ['name'],
            ],
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);


        return $this->render('indexModules',['dataProvider'=>$arrayDataProvider]);
    }
    public function actionIndexPlugin() {

        $boolstring='';
        //FIXME : replace with db lookup for names
        $listPlugins = array();
        $listPlugins[] = 'asterisk';
        $listPlugins[] = 'bluetooth';
        $listPlugins[] = 'buienradar';
        $listPlugins[] = 'ctx35';
        $listPlugins[] = 'cul';
        $listPlugins[] = 'currentcost';
        $listPlugins[] = 'conrad8relay';
        $listPlugins[] = 'denon';
        $listPlugins[] = 'digitemp';
        $listPlugins[] = 'dmxplayer';
        $listPlugins[] = 'dsc';
        $listPlugins[] = 'ezcontrol';
        $listPlugins[] = 'fritzbox';
        $listPlugins[] = 'genericio';
        $listPlugins[] = 'gps';
        $listPlugins[] = 'hddtemp';
        $listPlugins[] = 'homematic';
        $listPlugins[] = 'iport';
        $listPlugins[] = 'ipx800';
        $listPlugins[] = 'irman';
        $listPlugins[] = 'irtrans';
        $listPlugins[] = 'iviewer';
        $listPlugins[] = 'jeelabs';
        $listPlugins[] = 'jerome';
        $listPlugins[] = 'k8055';
        $listPlugins[] = 'kmtronicudp';
        $listPlugins[] = 'knx';
        $listPlugins[] = 'ledmatrix';
        $listPlugins[] = 'lgtv';
        $listPlugins[] = 'lirc';
        $listPlugins[] = 'meteohub';
        $listPlugins[] = 'mochad';
        $listPlugins[] = 'modbus';
        $listPlugins[] = 'mysensors';
        $listPlugins[] = 'ncid';
        $listPlugins[] = 'networkdetect';
        $listPlugins[] = 'omniksol';
        $listPlugins[] = 'onkyo';
        $listPlugins[] = 'opentherm';
        $listPlugins[] = 'openzwave';
        $listPlugins[] = 'owfs';
        $listPlugins[] = 'oww';
        $listPlugins[] = 'philipshue';
        $listPlugins[] = 'pioneer';
        $listPlugins[] = 'plcbus';
        $listPlugins[] = 'plugwise';
        $listPlugins[] = 'pwrctrl';
        $listPlugins[] = 'razberry';
        $listPlugins[] = 'rflink';
        $listPlugins[] = 'rfxcomrx';
        $listPlugins[] = 'rfxcomtrx';
        $listPlugins[] = 'rfxcomtx';
        $listPlugins[] = 'rfxcomxpl';
        $listPlugins[] = 'rrdtool';
        $listPlugins[] = 'sharptv';
        $listPlugins[] = 'shell';
        $listPlugins[] = 'smartmeter';
        $listPlugins[] = 'sms';
        $listPlugins[] = 'squeezeserver';
        $listPlugins[] = 'temp08';
        $listPlugins[] = 'toon';
        $listPlugins[] = 'unipi';
        $listPlugins[] = 'ups';
        $listPlugins[] = 'velbus';
        $listPlugins[] = 'videoserver';
        $listPlugins[] = 'viera';
        $listPlugins[] = 'visca';
        $listPlugins[] = 'visonic';
        $listPlugins[] = 'weeder';
        $listPlugins[] = 'wirelesstags';
        $listPlugins[] = 'wiringpi';
        $listPlugins[] = 'x10cmd';
        $listPlugins[] = 'xpl';

        //FIXME: perhaps use static arrays if dynamic listing of model *.php is a trouble 
        $pref = '../models/Settings';
        $rawData = array();
        $listTables = yii::$app->db->getSchema()->getTableNames();
        $filter = yii::$app->request->get('filter', 'Enabled');
        foreach (glob($pref . '*.php') as $filename) {
            $filename = str_replace($pref, "", $filename);
            $filename = str_replace(".php", "", $filename);
            $d1 = $filename;
            $modelName = 'Settings' . $filename;

            $class =  '\app\models\\'.$modelName;

            $model =  new $class();
            $modelAlias = $model->tableName();
            if (!in_array(strtolower($d1), $listPlugins))
                continue;

            if (isset($model) && !empty($model) && in_array($modelAlias, $listTables)) {
                $modelRecord = $model->findOne(['id'=>1]);
                if ($model->hasAttribute('enabled')) {
                    if ($modelRecord->enabled !== "0")
                        $d2 = "Enabled";
                    else
                        $d2 = "Disabled";
                }
                else
                    $d2 = "-";
            } else {
                $d2 = "Error : Table not found ($modelAlias)";
                continue; //ignore when not finding table
            }
            $d3 = array();
            $values = $modelRecord->getAttributes();
            foreach (array_keys($values) as $l) {
                if ($l !== 'enabled' && $l !== 'id' && $l !== 'password' && $l !== 'debug')
                    $d3[] = "<b>$l</b>=" . $values[$l];
                if ($l == 'password')
                    $d3[] = "<b>$l</b>=" . "*****";
                if ($l == 'debug') {
                    $boolstring = ($values[$l]) ? 'true' : 'false';
                    $d3[] = "<b>$l</b>=" . $boolstring;
                }
            }

            $d3 = implode(', ', $d3);
            if ($filter != 'all' && $filter != $d2)
                continue;
            $d2 = yii::t('app', $d2);
            $line = array(
                "name" => $d1,
                "status" => $d2,
                "information" => $d3
            );

            $rawData[] = $line;
        }

        $arrayDataProvider = new ArrayDataProvider([
            'allModels' => $rawData,
            'key'=>'name',
            'id'=>'name',
            'sort' => [
                'attributes' => ['name'],
            ],
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        return $this->render('indexPlugins', array('data' => $arrayDataProvider));
    }


}


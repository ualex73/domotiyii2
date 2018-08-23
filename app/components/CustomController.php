<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */

namespace app\components;

use Yii;
use yii\filters\AccessControl;

class CustomController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                //'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        //'actions' => ['logout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    protected function do_save($model) {
        if (!$model->save()) {
            Yii::$app->session->setFlash('error', Yii::t('app', 'Saving settings failed!'));
        } else {
            Yii::$app->session->setFlash('success', Yii::t('app', 'Settings saved.'));
        }
    }

    protected function do_save_restart($model, $plugin) {
        $save_res = $model->save();
        $json_res = doJsonRpc(array('jsonrpc' => '2.0', 'method' => 'plugin.restart', 'params' => array('name' => $plugin), 'id' => 1));

        if ($save_res && $json_res->result) {
            Yii::$app->session->setFlash('success', Yii::t('app', 'Saved settings, module restarted.'));
        } else if ($save_res && !$json_res->result) {
            Yii::$app->session->setFlash('error', Yii::t('app', 'Settings saved, module restart failed!'));
        } else if (!$save_res && $json_res->result) {
            Yii::$app->session->setFlash('error', Yii::t('app', 'Saving settings failed, module restarted!'));
        }
    }
    protected function actionSendTestTweet() {
        $res = doJsonRpc(array('jsonrpc' => '2.0', 'method' => 'twitter.send', 'params' => array('msg' => 'This is a test Tweet!'), 'id' => 1));
        if ($res) {
            if (isset($res->result) && $res->result) {
                Yii::$app->session->setFlash('success', Yii::t('app', 'Sent test tweet.'));
            } else {
                Yii::$app->session->setFlash('error', Yii::t('app', 'Sending a test tweet failed!'));
            }
        }
    }
    protected function actionSendTestEmail() {
        $res = doJsonRpc(array('jsonrpc' => '2.0', 'method' => 'email.send', 'params' => array('msg' => 'If you read this, e-mail support is working!',
            'subject' => 'Test e-mail'), 'id' => 1));
        if ($res) {
            if (isset($res->result) && $res->result) {
                Yii::$app->session->setFlash('success', Yii::t('app', 'Sent test e-mail.'));
            } else {
                Yii::$app->session->setFlash('error', Yii::t('app', 'Sending a test e-mail failed!'));
            }
        }
    }

    protected function actionSendNmaTest()
    {
        $res = doJsonRpc(array('jsonrpc' => '2.0', 'method' => 'nma.send', 'params' => array('msg' => 'This is a test Msg!'), 'id' => 1));
        if ($res) {
            if (isset($res->result) && $res->result) {
                Yii::$app->session->setFlash('success', Yii::t('app', 'Sent test pushmsg.'));
            } else {
                Yii::$app->session->setFlash('error', Yii::t('app', 'Sending a test pushmsg failed!'));
            }
        }
    }

    protected function actionSendTestProwl() {
        $res = doJsonRpc(array('jsonrpc' => '2.0', 'method' => 'prowl.send', 'params' => array('msg' => 'This is a test Msg!'), 'id' => 1));
        if ($res) {
            if (isset($res->result) && $res->result) {
                Yii::$app->session->setFlash('success', Yii::t('app', 'Sent test pushmsg.'));
            } else {
                Yii::$app->session->setFlash('error', Yii::t('app', 'Sending a test pushmsg failed!'));
            }
        }
    }

    public function actionSendTestPushover() {
        $res = doJsonRpc(array('jsonrpc' => '2.0', 'method' => 'pushover.send', 'params' => array('msg' => 'This is a test Msg!'), 'id' => 1));
        if ($res) {
            if (isset($res->result) && $res->result) {
                Yii::$app->session->setFlash('success', Yii::t('app', 'Sent test pushmsg.'));
            } else {
                Yii::$app->session->setFlash('error', Yii::t('app', 'Sending a test pushmsg failed!'));
            }
        }
    }

    public function actionSendTestPushbullet() {
        $res = doJsonRpc(array('jsonrpc' => '2.0', 'method' => 'pushbullet.send', 'params' => array('msg' => 'This is a test Msg!'), 'id' => 1));
        if ($res) {
            if (isset($res->result) && $res->result) {
                Yii::$app->session->setFlash('success', Yii::t('app', 'Sent test pushmsg.'));
            } else {
                Yii::$app->session->setFlash('error', Yii::t('app', 'Sending a test pushmsg failed!'));
            }
        }
    }
    public function getChartDetails($deviceid, $valuenum, $charttype) {
print_r("if");die;
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


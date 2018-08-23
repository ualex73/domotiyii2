<?php

namespace app\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\ServerErrorHttpException;
use yii\data\ArrayDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;

use app\components\Util;
use app\models\Plugins;

class SettingsController extends \app\components\Controller
{
    /**
     *
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAstro()
    {
        return $this->doSettings('app\models\SettingsAstro');
        $model = new \app\models\SettingsAstro();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
               // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('astro', [
            'model' => $model,
        ]);
    }

    /**
     *
     */
    public function actionCul()
    {
        return $this->doSettings('app\models\SettingsCul');
    }

    public function actionRfxcomtrx()
    {
        return $this->doSettings('app\models\SettingsRfxcomtrx');
    }

    /**
     * Generic function for most/all settings_* tables
     * the $modelName is in the format 'app\models\SettingsXXX'
     * the 'XXX' is taken as pluginName and as viewName
     * restart=false is only for specific modules like main/email/etc
     */
    private function doSettings($modelName, $restart = True)
    {

        // Map this model to the alias used in the code
        class_alias($modelName, 'SettingsEntry');

        // Determine the pluginname for this action, result is in lowercase
        // The pluginName is also used as view name e.g. 'views/settings/XXX.php'
        $pluginName = strtolower(substr($modelName, strrpos($modelName, 'Settings') + 8));

        // Try to find the pluginname of this model
        $plugin = Plugins::find()->where(['name' => $pluginName])->one();

        // Throw an error when we can't find the entry in the plugin table
        if (!$plugin || empty($plugin->maxinstances)) { throw new ServerErrorHttpException("Plugin name not '".$pluginName."' found in table 'plugins'"); }

        // Check if max instance is zero or negative, then set the max instances to a very high number
        if ($plugin->maxinstances <= 0) {
             $plugin->maxinstances = PHP_INT_MAX;
        }

        // Set the breadcrumbs for the Settings
        $this->view->title = Yii::$app->name.' - Settings '.$plugin->name;;
        //$this->view->params['breadcrumbs'] = [['label' => 'CUL', 'url' => 'indexPlugins'], $plugin->name];
        $this->view->params['breadcrumbs'][] = ['label' => 'CULX', 'url' => 'indexPlugins'];
        $this->view->params['breadcrumbs'][] = $plugin->name;

        // Check for a POST request, save values in existing or new record
        if (Yii::$app->request->isPost) {

            // Determine classname, without namespace, we also add '\\' preventing an issue if there is no proper namespace 
            $className = '\\'.\SettingsEntry::className();
            $className = substr($className, strrpos($className, '\\')+1);

            // Get the id and lookup the record in the database
            $id = Yii::$app->request->post($className)['id'];
            $model = \SettingsEntry::findOne($id);

            // Record not found, create a new record
            if (!$model) {
                $model = new \SettingsEntry();
            } 

            // Validate the data and save it into the database
            if ($model->load(Yii::$app->request->post())) {
                if ($model->validate()) {

                    // parameters are validated, now try to save them
                    if ($model->save()) {

                        if ($restart) {
                            $resjson = Util::JsonRpcClient('plugin.restart', ['name' => $pluginName]);

                            // Check for result, otherwise it is an error
                            if (isset($resjson->result)) {
                                if ($resjson->result) {
                                    Yii::$app->session->setFlash('success', Yii::t('app', 'Saved settings, ').Yii::t('app', $plugin->type).Yii::t('app', ' restarted.'));
                                } else {
                                    // We go a proper JSON-RPC response, but the restart failed
                                    Yii::$app->session->setFlash('error', Yii::t('app', 'Settings saved, ').Yii::t('app', $plugin->type).Yii::t('app', ' restart failed!'));
                                }
                            } else {
                                // No JSON-RPC connection or a JSON-RPC error
                                Yii::$app->session->setFlash('error', Yii::t('app', 'Settings saved, ').Yii::t('app', $plugin->type).Yii::t('app', ' restart failed!').' '.$resjson->error);
                            }

                        } else {
                            Yii::$app->session->setFlash('success', Yii::t('app', 'Saved settings.'));
                        }

                    } else {
                        Yii::$app->session->setFlash('error', Yii::t('app', 'Saving settings failed!'));
                    }
                }
            }
        }

        // Create the instancelist for the dropdown menu
        if ($plugin->maxinstances == 1) {
            $instancelist = null;
        } else {

            // Find all settings_* entries, except the id=0. We only retrieve the 'id' values.
           $instancelist = [];

            // Find all settings_* entries, except the id=0. We only retrieve the 'id' values.
           foreach(\SettingsEntry::find()->select('id')->where(['>=', 'id', 1])->orderBy(['id' => SORT_ASC])->asArray()->all() as $record) {
               $instancelist[$record['id']] = Yii::t('app', 'Instance') . " #" . $record['id'];
           };

        }

        if (Yii::$app->request->isGet) {

            // Only allow id if maxinstance is not 1
            if ($plugin->maxinstances == 1) {
                $id = 1;
            } else {
                // Check for possible id supplied in the GET
                $id = Yii::$app->request->get('id', 1);

                // id needs to be numeric and in our maxinstance range
                if (is_numeric($id)) {

                    // id=0 is a special case, it will find the next available instance
                    if ($id == 0) {

                        // Don't allow us to go over the maximum instance count
                        if (($plugin->maxinstances > 1) && ($plugin->maxinstances < count($instancelist))) {
                            Yii::$app->session->setFlash('warning', Yii::t('app', 'Maximum number of ').Yii::t('app', $plugin->type).Yii::t('app', ' instances reached.'));
                            $id = 1;
                        } else {
                            for ($count = 1; $count < $plugin->maxinstances; $count++) {
                                if (! isset($instancelist[$count])) { break; }
                            }

                            if ($count > $plugin->maxinstances) {
                                // Strangly we went over our maximum, shouldn't happen
                                Yii::$app->session->setFlash('error', Yii::t('app', 'Maximum number of ').Yii::t('app', $plugin->type).Yii::t('app', ' instances reached.'));
                                $id = 1;
                            } else {
                                $id = $count;
                            }
                        }

                        // If a flash message has been set, we should NOT do a redirect. The flash message will be 'lost'.
                        if (count(Yii::$app->session->getAllFlashes()) == 0) {
                          // Do a redirect to the new id in the URL, otherwise the browsers URL looks strange and with a refresh it can go wrong
                          $this->redirect(Url::to(['']).'?id='.$id);
                        }
                    }
                } else {
                    $id = 1;
                }
            }

            // Try to find the record with id
            $model = \SettingsEntry::findOne($id);

            // If the record isn't find, we create a new record and assign the id to it
            // This record is based on id=0, which always need to exist
            if (!$model) {
                $model = \SettingsEntry::findOne(0);
                if (!$model) { throw new ServerErrorHttpException("Settings table '".\SettingsEntry::tableName()."' is missing the mandatory id=0."); }

                // Overrule primary key of the new record
                $model->id = $id;

                // This is a new record, manually set the isNewRecord
                $model->isNewRecord = true;

                // Add the instance id to our new list, but we need to sort again
                if ($plugin->maxinstances!=1) {
                    $instancelist[$model->id] = Yii::t('app', 'Instance')." #".$model->id;
                    ksort($instancelist);
                }
            }
        }

        // only add create instance if maxinst!=1 and < maxinstance value
        if ($plugin->maxinstances!=1) {
            $instancelist['0'] = Yii::t('app', 'Create Instance');
        }

        // Return the rendered view of this model and instancelist
        return $this->render($pluginName, ['model' => $model, 'instancelist' => $instancelist]);
    }

    public function actionSerialport()
    {

/*
Fields:
Serial Device
/dev/serial/by-id
in use by
*/

$resultData = [
    ['serialport' => '/dev/ttyUSB0', 'by-id' => '/dev/by-id/usb0', 'inuseby' => 'rfxcom'],
    ['serialport' => '/dev/ttyUSB1', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB2', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB3', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB4', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB5', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB6', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB7', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB8', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB9', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB0', 'by-id' => '/dev/by-id/usb0', 'inuseby' => 'rfxcom'],
    ['serialport' => '/dev/ttyUSB11', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB12', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB3', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB4', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB5', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB6', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB7', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB8', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
    ['serialport' => '/dev/ttyUSB9', 'by-id' => '/dev/by-id/usb1', 'inuseby' => 'z-wave'],
];

$dataProvider = new ArrayDataProvider([
        'key'=>'serialport',
        'allModels' => $resultData,
'pagination' => [
        'pageSize' => 10,
    ],
/*
        'sort' => [
            'attributes' => ['serialport'],
        ],
*/
]);

            $something = GridView::widget([
                'dataProvider' => $dataProvider,
                    'columns' => [
                        [
                            'label' => 'Select',
                            'format' => 'raw',
                            'value' => function($model, $key, $index, $column) {
                                return Html::button(Yii::t('app','Select'), ['value' => $model['serialport'], 'class' => 'btn btn-primary btn-xs', 'onclick'=>'approveWeekly(value)']);
                            }
                        ],
                        'serialport',
                        'by-id'
                    ]]);


$model = null;
return $this->renderAjax('_serialport', [
                'model' => $model,
                'dataProvider' => $dataProvider,
                'something' => $something,
        ]);
    }


}


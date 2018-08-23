<?php
namespace app\controllers;
use app\components\LogDataProvider;
use yii\data\ArrayDataProvider;
use yii\web\Controller;
use Yii;
class LogsController extends Controller
{
        private $logfile;

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{

            if (strpos(Yii::$app->params['basePathDomotiGa'], 'changethis')) {
                Yii::$app->session->setFlash('error', Yii::t('app', 'Please set the basePathDomotiGa config parameter!'));
            }

            $log = Yii::$app->request->get('log');
            $date = date('Y-m');

            if (isset($log) && !empty($log)) {
                switch ($log) {
                    case 'mainserver':
                        $logfile = 'logs/server-main-'.$date.'.log'; 
                        break;
                    case 'speakserver':
                        $logfile = 'logs/server-speak-'.$date.'.log'; 
                        break;
                    case 'debugserver':
                        $logfile = 'logs/server-debug-'.$date.'.log'; 
                        break;
                    case 'main':
                        $logfile = 'logs/main-'.$date.'.log'; 
                        break;
                    case 'speak':
                        $logfile = 'logs/speak-'.$date.'.log'; 
                        break;
                    case 'debug':
                        $logfile = 'logs/debug-'.$date.'.log'; 
                        break;
                    case 'domozwave':
                        $logfile = 'logs/domozwave-'.$date.'.log'; 
                        break;
                    case 'openzwave':
                        $logfile = 'wrappers/domozwave/OZW_Log.txt'; 
                        break;
                    case 'razberry':
                        $logfile = 'logs/razberry.log';
                        break;
                    default:
                        $logfile = 'logs/server-main-'.$date.'.log';
                        break;
                } 
            } else {
                $logfile = 'logs/server-main-'.$date.'.log';
            }

	    // renders the view file 'protected/views/logs/index.php'
	    // using the default layout 'protected/views/layouts/main.php

            $dataProvider = new LogDataProvider($logfile, [
                'pagination' => [
                    'pageSize' => Yii::$app->params['pagesizeLogs'],
                ],
            ]);
            return $this->render('index', ['dataProvider'=>$dataProvider, 'logName'=>$dataProvider->getLogName()]);
	}
}

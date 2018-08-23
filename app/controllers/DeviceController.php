<?php

namespace app\controllers;

use Yii;
use app\models\Devices;
use app\models\search\DeviceSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DeviceController implements the CRUD actions for Devices model.
 */
class DeviceController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Devices models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DeviceSearch();
        $model=new Devices();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $type = Yii::$app->getRequest()->get('type');
        $res = Devices::find();
        if (isset($type) && !empty($type)) {
            if ($type == "sensors") {

                $searchModel->switchable = 0;
                $searchModel->dimable = 0;
                $searchModel->enabled = -1;
                $res->andWhere(['switchable'=>0]);
                $res->andWhere(['dimable'=>0]);
                $res->andWhere(['enabled'=> -1]);

            } elseif ($type == "dimmers") {
                $model->dimable = -1;
                $model->enabled = -1;
                $res->andWhere(['dimable'=>-1]);
                $res->andWhere(['enabled'=> -1]);

            } elseif ($type == "switches") {
                $model->switchable = -1;
                $model->enabled = -1;
                $res->andWhere(['switchable'=>1]);
                $res->andWhere(['enabled'=> 1]);
            } elseif ($type == "hidden") {
                $model->hide = -1;
                $model->enabled = -1;
                $res->andWhere(['hide'=>1]);
                $res->andWhere(['enabled'=> 1]);
            } elseif ($type == "disabled") {
                $model->enabled = 1;
                $res->andWhere(['enabled'=>0]);
            }
            $dataProvider = new ActiveDataProvider([
                'query' => $res,
            ]);
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Devices model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Devices model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Devices();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Devices model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Devices model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Devices model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Devices the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Devices::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

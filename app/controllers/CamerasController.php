<?php

namespace app\controllers;

use Yii;
use app\models\DeviceCameras;
use app\models\search\CamerasSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CamerasController implements the CRUD actions for DeviceCameras model.
 */
class CamerasController extends Controller
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
     * Lists all DeviceCameras models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = DeviceCameras::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $model=new DeviceCameras();
//        $model->unset('attribute'); // clear any default values

        if(isset($_GET['Cameras']))
        {
            $model->attributes=$_GET['Cameras'];

            if (!empty($model->name)) $query->andFilterWhere(['name' => $model->name ]);
            if (!empty($model->description)) $query->andFilterWhere(['description' => $model->description ]);
            if (!empty($model->type)) $query->andFilterWhere(['description' => $model->type ]);
        }

        $type = Yii::$app->getRequest()->get('type');

        // It is beter to see all enabled cameras first.
        if (!isset($type))
        {
            $model->enabled=-1;
            $query->andWhere('enabled IS TRUE');
        }

        if (isset($type) && !empty($type))
        {
            if ($type == "enabled")
            {
                $model->enabled=-1;
                $query->andWhere('enabled IS TRUE');
            }
            if ($type == "disabled")
            {
                $model->enabled=0;
                $query->andWhere('enabled IS FALSE');
            }
        }
        $searchModel = new CamerasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'model'=>$model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DeviceCameras model.
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
     * Creates a new DeviceCameras model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DeviceCameras();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DeviceCameras model.
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
     * Deletes an existing DeviceCameras model.
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
     * Finds the DeviceCameras model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return DeviceCameras the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DeviceCameras::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

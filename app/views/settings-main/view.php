<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsMain */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Mains'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-main-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'sleeptime:datetime',
            'flushtime:datetime',
            'debug',
            'logbuffer',
            'authentication',
            'startpage',
            'debugevents',
            'debugdevices',
            'debugenergy',
            'debugplugin',
            'debugglobalvar',
            'hometoppanel',
            'homeleftpanel',
            'homerightpanel',
            'homebottompanel',
            'autodevicecreate',
            'logallvalueupdates',
            'logprefix',
        ],
    ]) ?>

</div>

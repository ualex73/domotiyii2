<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsMain */

$this->title = Yii::t('app', 'Update Settings Main: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Main');
?>
<div class="settings-main-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

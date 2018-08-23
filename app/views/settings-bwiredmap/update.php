<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsBwiredmap */

$this->title = Yii::t('app', 'Update Settings Bwiredmap: ' . $model->title, [
    'nameAttribute' => '' . $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Bwiredmap');
?>
<div class="settings-bwiredmap-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

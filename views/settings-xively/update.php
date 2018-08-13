<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsXively */

$this->title = Yii::t('app', 'Update Settings Xively: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Xively');
?>
<div class="settings-xively-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

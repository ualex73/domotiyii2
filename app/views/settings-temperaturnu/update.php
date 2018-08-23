<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsTemperaturnu */

$this->title = Yii::t('app', 'Update Settings Temperaturnu: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Temperaturnu');
?>
<div class="settings-temperaturnu-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

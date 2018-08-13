<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsOww */

$this->title = Yii::t('app', 'Update Settings Oww: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' =>'OneWireWeather', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="settings-oww-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

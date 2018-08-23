<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsSound */

$this->title = Yii::t('app', 'Update Settings Sound: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Sound');
?>
<div class="settings-sound-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsVideoserver */

$this->title = Yii::t('app', 'Update Settings Videoserver: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Videoserver');
?>
<div class="settings-videoserver-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

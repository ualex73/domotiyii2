<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsGmail */

$this->title = Yii::t('app', 'Update Settings Gmail: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Gmail');
?>
<div class="settings-gmail-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

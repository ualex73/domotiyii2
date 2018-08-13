<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsCallerid */

$this->title = Yii::t('app', 'Update Settings Callerid: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Callerid');
?>
<div class="settings-callerid-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

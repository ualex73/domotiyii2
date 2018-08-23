<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsCurrentcost */

$this->title = Yii::t('app', 'Update Settings Currentcost: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Modules'), 'url' => ['settings/index-module']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Currentcost');
?>
<div class="settings-currentcost-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

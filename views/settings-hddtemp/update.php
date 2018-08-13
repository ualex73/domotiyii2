<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsHddtemp */

$this->title = Yii::t('app', 'Update Settings Hddtemp: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Hddtemp');
?>
<div class="settings-hddtemp-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

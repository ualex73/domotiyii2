<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsPlcbus */

$this->title = Yii::t('app', 'PLCBUS', [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interfaces'), 'url' => ['settings/index-plugin']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Plcbus');
?>
<div class="settings-plcbus-update">

    <legend><?= Html::encode($this->title) ?></legend>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

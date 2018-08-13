<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsModbus */

$this->title = Yii::t('app', 'Create Settings Modbus');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Modbuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-modbus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

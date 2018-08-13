<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsKnx */

$this->title = Yii::t('app', 'Create Settings Knx');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Knxes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-knx-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

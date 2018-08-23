<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsSmartmeter */

$this->title = Yii::t('app', 'Create Settings Smartmeter');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Smartmeters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-smartmeter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

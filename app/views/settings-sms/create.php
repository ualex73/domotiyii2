<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsSms */

$this->title = Yii::t('app', 'Create Settings Sms');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Sms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-sms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsBuienradar */

$this->title = Yii::t('app', 'Create Settings Buienradar');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Buienradars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-buienradar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsUps */

$this->title = Yii::t('app', 'Create Settings Ups');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Ups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-ups-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

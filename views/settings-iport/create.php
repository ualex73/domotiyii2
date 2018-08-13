<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsIport */

$this->title = Yii::t('app', 'Create Settings Iport');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Iports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-iport-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

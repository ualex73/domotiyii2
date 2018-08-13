<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsPlugwise */

$this->title = Yii::t('app', 'Create Settings Plugwise');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Plugwises'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-plugwise-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

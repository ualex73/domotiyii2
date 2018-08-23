<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsLgtv */

$this->title = Yii::t('app', 'Create Settings Lgtv');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Lgtvs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-lgtv-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsGenericio */

$this->title = Yii::t('app', 'Create Settings Genericio');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Genericios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-genericio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

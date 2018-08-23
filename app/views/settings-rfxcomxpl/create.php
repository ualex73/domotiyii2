<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsRfxcomxpl */

$this->title = Yii::t('app', 'Create Settings Rfxcomxpl');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Rfxcomxpls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-rfxcomxpl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

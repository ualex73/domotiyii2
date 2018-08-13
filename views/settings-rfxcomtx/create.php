<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsRfxcomtx */

$this->title = Yii::t('app', 'Create Settings Rfxcomtx');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Rfxcomtxes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-rfxcomtx-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

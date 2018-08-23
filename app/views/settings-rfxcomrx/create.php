<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsRfxcomrx */

$this->title = Yii::t('app', 'Create Settings Rfxcomrx');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Rfxcomrxes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-rfxcomrx-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

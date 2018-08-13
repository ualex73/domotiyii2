<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsRfxcomtrx */

$this->title = Yii::t('app', 'Create Settings Rfxcomtrx');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Rfxcomtrxes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-rfxcomtrx-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

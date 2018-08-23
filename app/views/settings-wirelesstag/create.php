<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsWirelesstags */

$this->title = Yii::t('app', 'Create Settings Wirelesstags');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Wirelesstags'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-wirelesstags-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

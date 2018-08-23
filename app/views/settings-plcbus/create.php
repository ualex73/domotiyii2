<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsPlcbus */

$this->title = Yii::t('app', 'Create Settings Plcbus');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Plcbuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-plcbus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

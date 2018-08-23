<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsTemperaturnu */

$this->title = Yii::t('app', 'Create Settings Temperaturnu');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Temperaturnus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-temperaturnu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

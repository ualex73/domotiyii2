<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsOpentherm */

$this->title = Yii::t('app', 'Create Settings Opentherm');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Opentherms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-opentherm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

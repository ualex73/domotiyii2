<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsSmartvisuserver */

$this->title = Yii::t('app', 'Create Settings Smartvisuserver');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Smartvisuservers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-smartvisuserver-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

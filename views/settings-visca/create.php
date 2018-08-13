<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsVisca */

$this->title = Yii::t('app', 'Create Settings Visca');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Viscas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-visca-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

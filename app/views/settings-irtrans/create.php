<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsIrtrans */

$this->title = Yii::t('app', 'Create Settings Irtrans');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Irtrans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-irtrans-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

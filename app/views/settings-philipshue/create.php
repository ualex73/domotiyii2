<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsPhilipshue */

$this->title = Yii::t('app', 'Create Settings Philipshue');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Philipshues'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-philipshue-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

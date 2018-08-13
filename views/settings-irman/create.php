<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsIrman */

$this->title = Yii::t('app', 'Create Settings Irman');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Irmen'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-irman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

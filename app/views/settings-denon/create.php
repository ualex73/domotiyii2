<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsDenon */

$this->title = Yii::t('app', 'Create Settings Denon');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Denons'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-denon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsDmxplayer */

$this->title = Yii::t('app', 'Create Settings Dmxplayer');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Dmxplayers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-dmxplayer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

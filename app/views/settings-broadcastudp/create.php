<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsBroadcastudp */

$this->title = Yii::t('app', 'Create Settings Broadcastudp');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Broadcastudps'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-broadcastudp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

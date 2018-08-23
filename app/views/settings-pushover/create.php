<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsPushover */

$this->title = Yii::t('app', 'Create Settings Pushover');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Pushovers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-pushover-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

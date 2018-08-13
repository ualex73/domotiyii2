<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsPushbullet */

$this->title = Yii::t('app', 'Create Settings Pushbullet');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Pushbullets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-pushbullet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

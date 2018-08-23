<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsTvguide */

$this->title = Yii::t('app', 'Create Settings Tvguide');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Tvguides'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-tvguide-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

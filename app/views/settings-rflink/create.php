<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsRflink */

$this->title = Yii::t('app', 'Create Settings Rflink');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Rflinks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-rflink-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

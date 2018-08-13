<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsRrdtool */

$this->title = Yii::t('app', 'Create Settings Rrdtool');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Rrdtools'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-rrdtool-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

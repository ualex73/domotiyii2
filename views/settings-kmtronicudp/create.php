<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsKmtronicudp */

$this->title = Yii::t('app', 'Create Settings Kmtronicudp');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Kmtronicudps'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-kmtronicudp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

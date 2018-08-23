<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsOpenzwave */

$this->title = Yii::t('app', 'Create Settings Openzwave');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Openzwaves'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-openzwave-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

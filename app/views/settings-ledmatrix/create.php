<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsLedmatrix */

$this->title = Yii::t('app', 'Create Settings Ledmatrix');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Ledmatrices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-ledmatrix-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

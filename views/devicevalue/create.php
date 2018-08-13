<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Devicevalues */

$this->title = Yii::t('app', 'Create Devicevalues');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Devicevalues'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="devicevalues-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

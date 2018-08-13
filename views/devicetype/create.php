<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Devicetypes */

$this->title = Yii::t('app', 'Create Devicetypes');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Devicetypes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="devicetypes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

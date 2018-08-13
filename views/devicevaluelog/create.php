<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Devicevalueslog */

$this->title = Yii::t('app', 'Create Devicevalueslog');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Devicevalueslogs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="devicevalueslog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

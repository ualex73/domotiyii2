<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Floors */

$this->title = Yii::t('app', 'Create Floors');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Floors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="floors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

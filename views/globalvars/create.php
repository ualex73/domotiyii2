<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Globalvars */

$this->title = Yii::t('app', 'Create Globalvars');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Globalvars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="globalvars-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

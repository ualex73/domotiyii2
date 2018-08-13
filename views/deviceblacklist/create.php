<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Deviceblacklist */

$this->title = Yii::t('app', 'Create Deviceblacklist');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Deviceblacklists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deviceblacklist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

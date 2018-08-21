<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cdr */

$this->title = Yii::t('app', 'Create Cdr');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cdrs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cdr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

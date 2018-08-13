<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Scenes */

$this->title = Yii::t('app', 'Create Scenes');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Scenes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scenes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

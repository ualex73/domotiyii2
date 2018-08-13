<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sslcertificates */

$this->title = Yii::t('app', 'Create Sslcertificates');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sslcertificates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sslcertificates-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

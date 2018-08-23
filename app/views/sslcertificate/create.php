<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sslcertificates */

$this->title = Yii::t('app', 'Create Sslcertificates');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sslcertificates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sslcertificates-create">
    <jumbotron>
        <div>
            <a href="../sslcertificate/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../sslcertificate/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
               </div>
    </jumbotron>
    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

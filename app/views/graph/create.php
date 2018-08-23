<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Graphs */

$this->title = Yii::t('app', 'Create Graphs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Graphs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="graphs-create">
    <jumbotron>
        <div>
            <a href="../graph/index" class="btn btn-default"><span class="fa fa-list-alt"></span> List</a>
            <a href="../graph/create" class="btn btn-success"><span class="fa fa-plus"></span> Create</a>
        </div>
    </jumbotron>
<!--    <div class="search-form" style="display: none">-->
<!--        --><?php
//        $model= new \app\models\Graphs();
//        echo $this->render('_search',['model'=>$model]
//        ); ?>
<!--    </div>-->
    <h3><?= Html::encode($this->title) ?></h3>
    <hr>
    <p style="background-color: lightblue;padding:10px"><b>Available graph types are:</b></br><b>Barchart:</b> Displays a graph with bars, it shows a count of the values over time.</br><b>Gauge:</b> It shows the last logged values.</br><b>Linechart:</b> It shows all logged values over time.</br></br>You can only use device values which have the option 'log' enabled, and have 'units' defined.
    <br/></p>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 6/21/2018
 * Time: 5:29 PM
 */
use yii\grid\GridView;
$this->title = Yii::t('app', 'Log Files');
$this->params['breadcrumbs'][] = $this->title;
?>
<ul class="nav nav-tabs" role="tablist">
        <li><a class="main-button" href="index?log=mainserver">Main (Server)</a>
        </li>
        <li><a class="trigger-button" href="index?log=speakserver">Speak (Server)</a></li>
        <li><a class="condition-button" href="index?log=debugserver">Debug (Server)</a></li>
        <li><a class="action-button" href="index?log=main">Main</a></li>
        <li><a class="option-button" href="index?log=speak">Speak</a></li>
    <li><a class="option-button" href="index?log=debug">Debug</a></li>
    <li><a class="option-button" href="index?log=domozwave">DomoZwave</a></li>
    <li><a class="option-button" href="index?log=openzwave">Open-Zwave</a></li>
    <li><a class="option-button" href="index?log=razberry">Razberry</a></li>


    </ul>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
    'columns' => [
//        ['class' => 'yii\grid\SerialColumn'],

//            'id',
[
        'attribute'=>'logName',
    'label'=>$logName
],

        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>
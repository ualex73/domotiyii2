<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\SettingsRfxcomtxSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Settings Rfxcomtxes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-rfxcomtx-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Settings Rfxcomtx'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'enabled',
            'tcphost',
            'tcpport',
            'type',
            //'serialport',
            //'baudrate',
            //'relayenabled',
            //'handshake',
            //'relayport',
            //'disablex10',
            //'enablearc',
            //'enableharrison',
            //'enablekoppla',
            //'rfxmitter',
            //'debug',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
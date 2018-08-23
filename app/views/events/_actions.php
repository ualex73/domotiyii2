<?php if(is_null($model->id)): ?>
<h4><?php echo yii::t('app','This tab can\'t be used while the event is not created and saved !'); ?></h4>
<?php else: ?>
<h4><?php echo yii::t('app','Be careful changes to this table are immediately saved!'); ?></h4>
<?php
/* @var $this DevicesController */
/* @var $model Devices */
$dp = new \app\models\Events();
    $provider = new \yii\data\ActiveDataProvider([
        'query' => $dp,
        'pagination' => [
            'pageSize' => 20,
        ],
    ]);?>
    <?= \yii\grid\GridView::widget([
        'dataProvider' => $provider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'description',
//            'firstrun',
            'order',
            'delay',
            //'condition1_id',
            //'operand',
            //'condition2_id',
            //'rerunenabled',
            //'rerunvalue',
            //'reruntype',
            //'category_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

<legend><?php echo yii::t('app', 'Available Actions'); ?></legend>
<script>
    function btAction(but) {
        var idEvent = $(but).data('idEvent');
        var idAction = $(but).data('idAction');
        var type = $(but).data('type');
        if (type === 'add') {
            $.get('<?php echo Yii::app()->request->baseUrl ?>/EventsActions/create',
                    {EventsActions: {event: idEvent, action: idAction,  delay: 0}},
                    function(data) {
//                        alert(data);
                        $.fn.yiiGridView.update('all-eventsActions-grid');
                    });
        } else {
            $.get('<?php echo Yii::app()->request->baseUrl ?>/EventsActions/delete',
                    {eventid: idEvent, actionid: idAction},
                    function(data) {
//                        alert(data);
                        $.fn.yiiGridView.update('all-eventsActions-grid');
                    });
        }
        return false;
    }
</script>
<?php endif; ?>

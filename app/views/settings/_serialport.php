<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;
/*
use kartik\grid\GridView; 
*/
use yii\grid\GridView;
?>
    <?php $form = ActiveForm::begin([ 'enableClientValidation' => true]); ?>

        <?php Pjax::begin(['enablePushState' => false, 'id' => 'serialport-pjax']); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                    'columns' => [
                        [
                            'label' => 'Select',
                            'format' => 'raw',
                            'value' => function($model, $key, $index, $column) { 
                                return Html::button(Yii::t('app','Select'), ['value' => $model['serialport'], 'class' => 'btn btn-primary btn-xs', 'onclick'=>'approveWeekly(value)']);
                            }
                        ],
                        'serialport',
                        'by-id'
                    ]]);
            ?>

        <?php Pjax::end(); ?>

    <?php ActiveForm::end(); 
?>

<?php
$this->registerJs(<<<JS
        $(document).on('ready pjax:success', function() {
//alert('alex3');
            });
JS
);
?>


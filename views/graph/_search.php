<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\GraphSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="graphs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'enabled') ?>

    <?= $form->field($model, 'comments') ?>

    <?= $form->field($model, 'graph_title') ?>

    <?php // echo $form->field($model, 'graph_height') ?>

    <?php // echo $form->field($model, 'graph_width') ?>

    <?php // echo $form->field($model, 'color_background') ?>

    <?php // echo $form->field($model, 'color_canvas') ?>

    <?php // echo $form->field($model, 'color_shadea') ?>

    <?php // echo $form->field($model, 'color_shadeb') ?>

    <?php // echo $form->field($model, 'color_font') ?>

    <?php // echo $form->field($model, 'color_grid') ?>

    <?php // echo $form->field($model, 'color_majorgrid') ?>

    <?php // echo $form->field($model, 'color_frame') ?>

    <?php // echo $form->field($model, 'color_axis') ?>

    <?php // echo $form->field($model, 'color_arrow') ?>

    <?php // echo $form->field($model, 'unit') ?>

    <?php // echo $form->field($model, 'logarithmic_scale') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'grid_type') ?>

    <?php // echo $form->field($model, 'groups') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

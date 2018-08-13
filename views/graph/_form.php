<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Graphs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="graphs-form col-md-offset-1 col-md-4">

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]

    ]);  ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enabled')->textInput() ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'graph_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'graph_height')->textInput() ?>

    <?= $form->field($model, 'graph_width')->textInput() ?>

    <?= $form->field($model, 'color_background')->textInput() ?>

    <?= $form->field($model, 'color_canvas')->textInput() ?>

    <?= $form->field($model, 'color_shadea')->textInput() ?>

    <?= $form->field($model, 'color_shadeb')->textInput() ?>

    <?= $form->field($model, 'color_font')->textInput() ?>

    <?= $form->field($model, 'color_grid')->textInput() ?>

    <?= $form->field($model, 'color_majorgrid')->textInput() ?>

    <?= $form->field($model, 'color_frame')->textInput() ?>

    <?= $form->field($model, 'color_axis')->textInput() ?>

    <?= $form->field($model, 'color_arrow')->textInput() ?>

    <?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logarithmic_scale')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'grid_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'groups')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-9">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>

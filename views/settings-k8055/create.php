<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsK8055 */

$this->title = Yii::t('app', 'Create Settings K8055');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings K8055s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-k8055-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SettingsIpx800 */

$this->title = Yii::t('app', 'Create Settings Ipx800');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Settings Ipx800s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-ipx800-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Candidates */

$this->title = 'Update Candidate: ' . $model->name;
$this->params['breadcrumbs'][] = 'Update: ' . $model->name;
?>
<div class="candidates-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

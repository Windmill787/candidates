<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\CandidatesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="candidates-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'birth_date') ?>

    <?= $form->field($model, 'years_experience') ?>

    <?php // echo $form->field($model, 'frameworks') ?>

    <?php // echo $form->field($model, 'resume') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

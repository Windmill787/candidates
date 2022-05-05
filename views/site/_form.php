<?php

use app\models\Candidates;
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Candidates */
/* @var $form yii\widgets\ActiveForm */

if ($model->birth_date) {
    $model->birth_date_string = date("d-m-Y", (int)$model->birth_date);
}
if ($model->frameworks) {
    $model->frameworks_array = explode(',', $model->frameworks);
}
?>

<div class="candidates-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'birth_date_string', ['enableAjaxValidation' => false])->widget(DatePicker::class, [
        'type' => DatePicker::TYPE_INPUT,
        'convertFormat' => true,
        'options' => [
            'placeholder' => 'Enter birth date ...',
        ],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'dd-MM-yyyy',
        ],
    ]) ?>

    <?= $form->field($model, 'years_experience')->input('number') ?>

    <?= $form->field($model, 'frameworks_array')->checkboxList(array_combine(Candidates::FRAMEWORKS, Candidates::FRAMEWORKS)) ?>

    <?php if ($model->resume): ?>
        <?= Html::a($model->resume, ['/' . Candidates::RESUME_DIR . '/' . $model->resume], ['target' => '_blank', 'title' => 'Переглянути']) ?>
    <?php endif; ?>

    <?= $form->field($model, 'resume_file')->fileInput() ?>

    <?= $form->field($model, 'comment')->textarea(['maxlength' => true, 'rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

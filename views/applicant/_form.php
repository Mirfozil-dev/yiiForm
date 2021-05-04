<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ApplicantDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicant-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->radioList(['male','female']) ?>

    <?= $form->field($model, 'birth_date')->widget(\yii\jui\DatePicker::className(), [
      'options' => ['class' => 'form-control'],
    ]); ?>

    <?= $form->field($model, 'marital_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pinfl_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'district')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mahalla')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postal')->textInput() ?>

    <?= $form->field($model, 'physical_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telephone')->input('tel') ?>

    <?= $form->field($model, 'email')->input('email') ?>

    <?= $form->field($model, 'baby_benefit')->checkbox([], false) ?>

    <?= $form->field($model, 'child_benefit')->checkbox([], false) ?>

    <?= $form->field($model, 'low_income_benefit')->checkbox([], false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

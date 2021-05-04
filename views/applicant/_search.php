<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ApplicantDetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicant-details-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'full_name') ?>

    <?= $form->field($model, 'sex') ?>

    <?= $form->field($model, 'birth_date') ?>

    <?= $form->field($model, 'marital_status') ?>

    <?php // echo $form->field($model, 'pinfl_status') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'district') ?>

    <?php // echo $form->field($model, 'mahalla') ?>

    <?php // echo $form->field($model, 'postal') ?>

    <?php // echo $form->field($model, 'physical_address') ?>

    <?php // echo $form->field($model, 'telephone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'baby_benefit') ?>

    <?php // echo $form->field($model, 'child_benefit') ?>

    <?php // echo $form->field($model, 'low_income_benefit') ?>

    <?php // echo $form->field($model, 'date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

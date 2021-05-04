<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ApplicantDetails */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Applicant Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="applicant-details-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'full_name',
            'sex',
            'birth_date',
            'marital_status',
            'pinfl_status',
            'region',
            'district',
            'mahalla',
            'postal',
            'physical_address',
            'telephone',
            'email:email',
            'baby_benefit',
            'child_benefit',
            'low_income_benefit',
            'date',
        ],
    ]) ?>

</div>

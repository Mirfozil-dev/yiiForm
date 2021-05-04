<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ApplicantDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Applicant Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-details-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Applicant Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'full_name',
//            'sex',
//            'birth_date',
//            'marital_status',
//            'pinfl_status',
            'region',
            'district',
            'mahalla',
//            'postal',
//            'physical_address',
//            'telephone',
//            'email:email',
//            'baby_benefit',
//            'child_benefit',
//            'low_income_benefit',
//            'date',
            [
                'class' => 'yii\grid\ActionColumn',
                'headerOptions' => ['style' => 'width:6%']
            ],
        ],
    ]); ?>


</div>

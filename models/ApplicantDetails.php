<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * This is the model class for table "applicant_details".
 *
 * @property int $id
 * @property string $full_name
 * @property string $sex
 * @property string $birth_date
 * @property string $marital_status
 * @property string $pinfl_status
 * @property string $region
 * @property string $district
 * @property string $mahalla
 * @property int $postal
 * @property string $physical_address
 * @property string $telephone
 * @property string $email
 * @property int $baby_benefit
 * @property int $child_benefit
 * @property int $low_income_benefit
 * @property string $date
 */
class ApplicantDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'applicant_details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'sex', 'birth_date', 'marital_status', 'pinfl_status', 'region', 'district', 'mahalla', 'postal', 'physical_address', 'telephone', 'email', 'baby_benefit', 'child_benefit', 'low_income_benefit'], 'required'],
            [[ 'date'], 'safe'],
            [['postal', 'baby_benefit', 'child_benefit', 'low_income_benefit'], 'integer'],
            [['full_name'], 'string', 'max' => 250],
            [['sex'], 'string', 'max' => 10],
            [['birth_date'], 'string', 'max' => 20],
            [['marital_status', 'pinfl_status', 'region', 'district', 'mahalla', 'physical_address'], 'string', 'max' => 100],
            [['telephone'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'sex' => 'Sex',
            'birth_date' => 'Birth Date',
            'marital_status' => 'Marital Status',
            'pinfl_status' => 'Pinfl Status',
            'region' => 'Region',
            'district' => 'District',
            'mahalla' => 'Mahalla',
            'postal' => 'Postal',
            'physical_address' => 'Physical Address',
            'telephone' => 'Telephone',
            'email' => 'Email',
            'baby_benefit' => 'Baby Benefit',
            'child_benefit' => 'Child Benefit',
            'low_income_benefit' => 'Low Income Benefit',
            'date' => 'Date',
        ];
    }
}

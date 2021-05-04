<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ApplicantDetails;

/**
 * ApplicantDetailsSearch represents the model behind the search form of `app\models\ApplicantDetails`.
 */
class ApplicantDetailsSearch extends ApplicantDetails
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'postal', 'baby_benefit', 'child_benefit', 'low_income_benefit'], 'integer'],
            [['full_name', 'sex', 'birth_date', 'marital_status', 'pinfl_status', 'region', 'district', 'mahalla', 'physical_address', 'telephone', 'email', 'date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ApplicantDetails::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'birth_date' => $this->birth_date,
            'postal' => $this->postal,
            'baby_benefit' => $this->baby_benefit,
            'child_benefit' => $this->child_benefit,
            'low_income_benefit' => $this->low_income_benefit,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'marital_status', $this->marital_status])
            ->andFilterWhere(['like', 'pinfl_status', $this->pinfl_status])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'district', $this->district])
            ->andFilterWhere(['like', 'mahalla', $this->mahalla])
            ->andFilterWhere(['like', 'physical_address', $this->physical_address])
            ->andFilterWhere(['like', 'telephone', $this->telephone])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}

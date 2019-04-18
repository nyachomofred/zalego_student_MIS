<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Employerinfo;

/**
 * EmployerinfoSearch represents the model behind the search form of `backend\models\Employerinfo`.
 */
class EmployerinfoSearch extends Employerinfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'student_id'], 'integer'],
            [['employer_title', 'employer_name', 'campany_name', 'employer_phone', 'employer_email'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Employerinfo::find();

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
            'student_id' => $this->student_id,
        ]);

        $query->andFilterWhere(['like', 'employer_title', $this->employer_title])
            ->andFilterWhere(['like', 'employer_name', $this->employer_name])
            ->andFilterWhere(['like', 'campany_name', $this->campany_name])
            ->andFilterWhere(['like', 'employer_phone', $this->employer_phone])
            ->andFilterWhere(['like', 'employer_email', $this->employer_email]);

        return $dataProvider;
    }
}

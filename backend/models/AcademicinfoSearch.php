<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Academicinfo;

/**
 * AcademicinfoSearch represents the model behind the search form of `backend\models\Academicinfo`.
 */
class AcademicinfoSearch extends Academicinfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'student_id'], 'integer'],
            [['school_name', 'type_of_school', 'school_address', 'city_or_town', 'Year_of_completion', 'currently_enrolled_in_school'], 'safe'],
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
        $query = Academicinfo::find();

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

        $query->andFilterWhere(['like', 'school_name', $this->school_name])
            ->andFilterWhere(['like', 'type_of_school', $this->type_of_school])
            ->andFilterWhere(['like', 'school_address', $this->school_address])
            ->andFilterWhere(['like', 'city_or_town', $this->city_or_town])
            ->andFilterWhere(['like', 'Year_of_completion', $this->Year_of_completion])
            ->andFilterWhere(['like', 'currently_enrolled_in_school', $this->currently_enrolled_in_school]);

        return $dataProvider;
    }
}

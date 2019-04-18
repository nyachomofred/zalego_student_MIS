<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Personalinfo;

/**
 * PersonalinfoSearch represents the model behind the search form of `backend\models\Personalinfo`.
 */
class PersonalinfoSearch extends Personalinfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['course_period', 'payment_information','level', 'campus','intake','student_id', 'full_name', 'date_of_birth', 'gender', 'id_no', 'email', 'phone', 'alternate_phone', 'citizenship', 'marital_status', 'future_career', 'physical_address', 'religion', 'medical_condition'], 'safe'],
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
        $query = Personalinfo::find();

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
        ]);

        $query->andFilterWhere(['like', 'course_period', $this->course_period])
             ->andFilterWhere(['like', 'campus', $this->campus])
             ->andFilterWhere(['like', 'intake', $this->intake])
            ->andFilterWhere(['like', 'payment_information', $this->payment_information])
            ->andFilterWhere(['like', 'student_id', $this->student_id])
            ->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'date_of_birth', $this->date_of_birth])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'id_no', $this->id_no])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'level', $this->level])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'alternate_phone', $this->alternate_phone])
            ->andFilterWhere(['like', 'citizenship', $this->citizenship])
            ->andFilterWhere(['like', 'marital_status', $this->marital_status])
            ->andFilterWhere(['like', 'future_career', $this->future_career])
            ->andFilterWhere(['like', 'physical_address', $this->physical_address])
            ->andFilterWhere(['like', 'religion', $this->religion])
            ->andFilterWhere(['like', 'medical_condition', $this->medical_condition]);

        return $dataProvider;
    }
}

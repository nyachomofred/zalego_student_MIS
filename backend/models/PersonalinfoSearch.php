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
    public $globalSearch;
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['course_period', 'payment_information','level','globalSearch', 'campus','intake','student_id', 'full_name', 'date_of_birth', 'gender', 'id_no', 'email', 'phone', 'alternate_phone', 'citizenship', 'marital_status', 'future_career', 'physical_address', 'religion', 'medical_condition'], 'safe'],
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

        $query->orFilterWhere(['like', 'course_period', $this->globalSearch])
             ->orFilterWhere(['like', 'campus', $this->globalSearch])
             ->orFilterWhere(['like', 'intake', $this->globalSearch])
            ->orFilterWhere(['like', 'payment_information', $this->globalSearch])
            ->orFilterWhere(['like', 'student_id', $this->globalSearch])
            ->orFilterWhere(['like', 'full_name', $this->globalSearch])
            ->orFilterWhere(['like', 'date_of_birth', $this->globalSearch])
            ->orFilterWhere(['like', 'gender', $this->globalSearch])
            ->orFilterWhere(['like', 'id_no', $this->globalSearch])
            ->orFilterWhere(['like', 'email', $this->globalSearch])
            ->orFilterWhere(['like', 'level', $this->globalSearch])
            ->orFilterWhere(['like', 'phone', $this->globalSearch])
            ->orFilterWhere(['like', 'alternate_phone', $this->globalSearch])
            ->orFilterWhere(['like', 'citizenship', $this->globalSearch])
            ->orFilterWhere(['like', 'marital_status', $this->globalSearch])
            ->orFilterWhere(['like', 'future_career', $this->globalSearch])
            ->orFilterWhere(['like', 'physical_address', $this->globalSearch])
            ->orFilterWhere(['like', 'religion', $this->globalSearch])
            ->orFilterWhere(['like', 'medical_condition', $this->globalSearch]);

        return $dataProvider;
    }
}

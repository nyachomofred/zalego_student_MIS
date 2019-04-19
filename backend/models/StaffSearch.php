<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Staff;

/**
 * StaffSearch represents the model behind the search form of `backend\models\Staff`.
 */
class StaffSearch extends Staff
{
    /**
     * @inheritdoc
     */
    public $globalSearch;
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['passpot', 'staff_id', 'name', 'phone', 'globalSearch','national_id', 'gender', 'role'], 'safe'],
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
        $query = Staff::find();

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

        $query->orFilterWhere(['like', 'passpot', $this->globalSearch])
            ->orFilterWhere(['like', 'staff_id', $this->globalSearch])
            ->orFilterWhere(['like', 'name', $this->globalSearch])
            ->orFilterWhere(['like', 'phone', $this->globalSearch])
            ->orFilterWhere(['like', 'national_id', $this->globalSearch])
            ->orFilterWhere(['like', 'gender', $this->globalSearch])
            ->orFilterWhere(['like', 'role', $this->globalSearch]);

        return $dataProvider;
    }
}

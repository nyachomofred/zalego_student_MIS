<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Balance;

/**
 * BalanceSearch represents the model behind the search form of `backend\models\Balance`.
 */
class BalanceSearch extends Balance
{
   
    public $globalSearch;
    public function rules()
    {
        return [
            [['id', 'student_id'], 'integer'],
            [['required_amount', 'amount_to_pay','globalSearch', 'amount_paid', 'balance'], 'safe'],
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
        $query = Balance::find();

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

        $query->orFilterWhere(['like', 'required_amount', $this->globalSearch])
            ->orFilterWhere(['like', 'amount_to_pay', $this->globalSearch])
            ->orFilterWhere(['like', 'amount_paid', $this->globalSearch])
            ->orFilterWhere(['like', 'balance', $this->globalSearch]);

        return $dataProvider;
    }
}

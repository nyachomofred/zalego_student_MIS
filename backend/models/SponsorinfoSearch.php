<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Sponsorinfo;

/**
 * SponsorinfoSearch represents the model behind the search form of `backend\models\Sponsorinfo`.
 */
class SponsorinfoSearch extends Sponsorinfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'student_id'], 'integer'],
            [['sponsor', 'sponsor_title', 'sponsor_name', 'sponsor_address', 'sponsor_phone', 'sponsor_email'], 'safe'],
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
        $query = Sponsorinfo::find();

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

        $query->andFilterWhere(['like', 'sponsor', $this->sponsor])
            ->andFilterWhere(['like', 'sponsor_title', $this->sponsor_title])
            ->andFilterWhere(['like', 'sponsor_name', $this->sponsor_name])
            ->andFilterWhere(['like', 'sponsor_address', $this->sponsor_address])
            ->andFilterWhere(['like', 'sponsor_phone', $this->sponsor_phone])
            ->andFilterWhere(['like', 'sponsor_email', $this->sponsor_email]);

        return $dataProvider;
    }
}

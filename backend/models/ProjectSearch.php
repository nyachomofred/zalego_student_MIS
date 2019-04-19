<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Project;

/**
 * ProjectSearch represents the model behind the search form of `backend\models\Project`.
 */
class ProjectSearch extends Project
{
    /**
     * @inheritdoc
     */
    public $globalSearch;
    public function rules()
    {
        return [
            [['id', 'student_id'], 'integer'],
            [['project_name', 'description', 'documentation','globalSearch', 'upload', 'date_uploaded', 'status', 'comment'], 'safe'],
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
        $query = Project::find();

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

        $query->orFilterWhere(['like', 'project_name', $this->globalSearch])
            ->orFilterWhere(['like', 'description', $this->globalSearch])
            ->orFilterWhere(['like', 'documentation', $this->globalSearch])
            ->orFilterWhere(['like', 'upload', $this->globalSearch])
            ->orFilterWhere(['like', 'date_uploaded', $this->globalSearch])
            ->orFilterWhere(['like', 'status', $this->globalSearch])
            ->orFilterWhere(['like', 'comment', $this->globalSearch]);

        return $dataProvider;
    }
}

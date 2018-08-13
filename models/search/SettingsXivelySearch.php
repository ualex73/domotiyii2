<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsXively;

/**
 * SettingsXivelySearch represents the model behind the search form of `app\models\SettingsXively`.
 */
class SettingsXivelySearch extends SettingsXively
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'feed', 'pushtime', 'debug'], 'integer'],
            [['apikey'], 'safe'],
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
        $query = SettingsXively::find();

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
            'enabled' => $this->enabled,
            'feed' => $this->feed,
            'pushtime' => $this->pushtime,
            'debug' => $this->debug,
        ]);

        $query->andFilterWhere(['like', 'apikey', $this->apikey]);

        return $dataProvider;
    }
}

<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsHomematic;

/**
 * SettingsHomematicSearch represents the model behind the search form of `app\models\SettingsHomematic`.
 */
class SettingsHomematicSearch extends SettingsHomematic
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'debug', 'model', 'tcpport'], 'integer'],
            [['tcphost', 'hmid', 'type'], 'safe'],
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
        $query = SettingsHomematic::find();

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
            'debug' => $this->debug,
            'model' => $this->model,
            'tcpport' => $this->tcpport,
        ]);

        $query->andFilterWhere(['like', 'tcphost', $this->tcphost])
            ->andFilterWhere(['like', 'hmid', $this->hmid])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}

<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsViera;

/**
 * SettingsVieraSearch represents the model behind the search form of `app\models\SettingsViera`.
 */
class SettingsVieraSearch extends SettingsViera
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'tcpport', 'refresh', 'debug'], 'integer'],
            [['tcphost'], 'safe'],
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
        $query = SettingsViera::find();

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
            'tcpport' => $this->tcpport,
            'refresh' => $this->refresh,
            'debug' => $this->debug,
        ]);

        $query->andFilterWhere(['like', 'tcphost', $this->tcphost]);

        return $dataProvider;
    }
}

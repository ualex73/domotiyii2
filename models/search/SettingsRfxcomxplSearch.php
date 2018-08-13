<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsRfxcomxpl;

/**
 * SettingsRfxcomxplSearch represents the model behind the search form of `app\models\SettingsRfxcomxpl`.
 */
class SettingsRfxcomxplSearch extends SettingsRfxcomxpl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'oldaddrfmt', 'globalx10', 'debug'], 'integer'],
            [['rxaddress', 'txaddress'], 'safe'],
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
        $query = SettingsRfxcomxpl::find();

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
            'oldaddrfmt' => $this->oldaddrfmt,
            'globalx10' => $this->globalx10,
            'debug' => $this->debug,
        ]);

        $query->andFilterWhere(['like', 'rxaddress', $this->rxaddress])
            ->andFilterWhere(['like', 'txaddress', $this->txaddress]);

        return $dataProvider;
    }
}

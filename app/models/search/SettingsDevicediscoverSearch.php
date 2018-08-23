<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsDevicediscover;

/**
 * SettingsDevicediscoverSearch represents the model behind the search form of `app\models\SettingsDevicediscover`.
 */
class SettingsDevicediscoverSearch extends SettingsDevicediscover
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'multicastport', 'listenonly', 'broadcastinterval', 'debug'], 'integer'],
            [['multicasthost'], 'safe'],
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
        $query = SettingsDevicediscover::find();

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
            'multicastport' => $this->multicastport,
            'listenonly' => $this->listenonly,
            'broadcastinterval' => $this->broadcastinterval,
            'debug' => $this->debug,
        ]);

        $query->andFilterWhere(['like', 'multicasthost', $this->multicasthost]);

        return $dataProvider;
    }
}

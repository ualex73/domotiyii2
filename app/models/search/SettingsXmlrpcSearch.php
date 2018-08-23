<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsXmlrpc;

/**
 * SettingsXmlrpcSearch represents the model behind the search form of `app\models\SettingsXmlrpc`.
 */
class SettingsXmlrpcSearch extends SettingsXmlrpc
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'httpport', 'maxconn', 'debug', 'broadcastudp'], 'integer'],
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
        $query = SettingsXmlrpc::find();

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
            'httpport' => $this->httpport,
            'maxconn' => $this->maxconn,
            'debug' => $this->debug,
            'broadcastudp' => $this->broadcastudp,
        ]);

        return $dataProvider;
    }
}

<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsJsonrpc;

/**
 * SettingsJsonrpcSearch represents the model behind the search form of `app\models\SettingsJsonrpc`.
 */
class SettingsJsonrpcSearch extends SettingsJsonrpc
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'httpport', 'maxconn', 'type', 'auth', 'debug', 'sslenabled', 'sslcertificate_id'], 'integer'],
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
        $query = SettingsJsonrpc::find();

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
            'type' => $this->type,
            'auth' => $this->auth,
            'debug' => $this->debug,
            'sslenabled' => $this->sslenabled,
            'sslcertificate_id' => $this->sslcertificate_id,
        ]);

        return $dataProvider;
    }
}

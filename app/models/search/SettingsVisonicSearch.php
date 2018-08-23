<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsVisonic;

/**
 * SettingsVisonicSearch represents the model behind the search form of `app\models\SettingsVisonic`.
 */
class SettingsVisonicSearch extends SettingsVisonic
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'autosynctime', 'forcestandardmode', 'motiontimeout', 'sensorarmstatus', 'debug', 'tcpport'], 'integer'],
            [['serialport', 'mastercode', 'downloadcode', 'tcphost', 'type'], 'safe'],
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
        $query = SettingsVisonic::find();

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
            'autosynctime' => $this->autosynctime,
            'forcestandardmode' => $this->forcestandardmode,
            'motiontimeout' => $this->motiontimeout,
            'sensorarmstatus' => $this->sensorarmstatus,
            'debug' => $this->debug,
            'tcpport' => $this->tcpport,
        ]);

        $query->andFilterWhere(['like', 'serialport', $this->serialport])
            ->andFilterWhere(['like', 'mastercode', $this->mastercode])
            ->andFilterWhere(['like', 'downloadcode', $this->downloadcode])
            ->andFilterWhere(['like', 'tcphost', $this->tcphost])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}

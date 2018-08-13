<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsCtx35;

/**
 * SettingsCtx35Search represents the model behind the search form of `app\models\SettingsCtx35`.
 */
class SettingsCtx35Search extends SettingsCtx35
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'enabled', 'polltime', 'globalx10', 'debug'], 'integer'],
            [['serialport', 'baudrate'], 'safe'],
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
        $query = SettingsCtx35::find();

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
            'polltime' => $this->polltime,
            'globalx10' => $this->globalx10,
            'debug' => $this->debug,
        ]);

        $query->andFilterWhere(['like', 'serialport', $this->serialport])
            ->andFilterWhere(['like', 'baudrate', $this->baudrate]);

        return $dataProvider;
    }
}

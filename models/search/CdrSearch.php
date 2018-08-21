<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cdr;

/**
 * CdrSearch represents the model behind the search form of `app\models\Cdr`.
 */
class CdrSearch extends Cdr
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['calldate', 'clid', 'src', 'dst', 'dcontext', 'channel', 'dstchannel', 'lastapp', 'lastdata', 'disposition', 'accountcode', 'userfield', 'uniqueid'], 'safe'],
            [['duration', 'billsec', 'amaflags', 'id'], 'integer'],
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
        $query = Cdr::find();

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
            'calldate' => $this->calldate,
            'duration' => $this->duration,
            'billsec' => $this->billsec,
            'amaflags' => $this->amaflags,
            'id' => $this->id,
        ]);
        if ($params == "noanswer" ) {
            $query->andFilterWhere(['like','disposition', "NO ANSWER"]);
        } elseif ($params == "incoming") {
            $query->andFilterWhere(['like','dcontext', "incoming"]);
        } elseif ($params == "outgoing") {
            $query->andFilterWhere(['like','dcontext', "default"]);
        }

        $query->andFilterWhere(['like', 'clid', $this->clid])
            ->andFilterWhere(['like', 'src', $this->src])
            ->andFilterWhere(['like', 'dst', $this->dst])
            ->andFilterWhere(['like', 'dcontext', $this->dcontext])
            ->andFilterWhere(['like', 'channel', $this->channel])
            ->andFilterWhere(['like', 'dstchannel', $this->dstchannel])
            ->andFilterWhere(['like', 'lastapp', $this->lastapp])
            ->andFilterWhere(['like', 'lastdata', $this->lastdata])
            ->andFilterWhere(['like', 'disposition', $this->disposition])
            ->andFilterWhere(['like', 'accountcode', $this->accountcode])
            ->andFilterWhere(['like', 'userfield', $this->userfield])
            ->andFilterWhere(['like', 'uniqueid', $this->uniqueid]);

        return $dataProvider;
    }
}

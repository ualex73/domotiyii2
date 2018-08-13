<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Devices;

/**
 * DeviceSearch represents the model behind the search form of `app\models\Devices`.
 */
class DeviceSearch extends Devices
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'instance_id', 'devicetype_id', 'location_id', 'interface_id', 'enabled', 'hide', 'tampered', 'switchable', 'dimable', 'extcode', 'x', 'y', 'floorplan_id', 'repeatstate', 'repeatperiod', 'reset', 'resetperiod', 'poll'], 'integer'],
            [['name', 'address', 'onicon', 'officon', 'dimicon', 'firstseen', 'lastseen', 'groups', 'batterystatus', 'comments', 'lastchanged', 'resetvalue'], 'safe'],
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
        $query = Devices::find();

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
            'instance_id' => $this->instance_id,
            'devicetype_id' => $this->devicetype_id,
            'location_id' => $this->location_id,
            'interface_id' => $this->interface_id,
            'firstseen' => $this->firstseen,
            'lastseen' => $this->lastseen,
            'enabled' => $this->enabled,
            'hide' => $this->hide,
            'tampered' => $this->tampered,
            'switchable' => $this->switchable,
            'dimable' => $this->dimable,
            'extcode' => $this->extcode,
            'x' => $this->x,
            'y' => $this->y,
            'floorplan_id' => $this->floorplan_id,
            'lastchanged' => $this->lastchanged,
            'repeatstate' => $this->repeatstate,
            'repeatperiod' => $this->repeatperiod,
            'reset' => $this->reset,
            'resetperiod' => $this->resetperiod,
            'poll' => $this->poll,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'onicon', $this->onicon])
            ->andFilterWhere(['like', 'officon', $this->officon])
            ->andFilterWhere(['like', 'dimicon', $this->dimicon])
            ->andFilterWhere(['like', 'groups', $this->groups])
            ->andFilterWhere(['like', 'batterystatus', $this->batterystatus])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'resetvalue', $this->resetvalue]);

        return $dataProvider;
    }
}

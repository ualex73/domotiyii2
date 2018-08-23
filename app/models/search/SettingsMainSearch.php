<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SettingsMain;

/**
 * SettingsMainSearch represents the model behind the search form of `app\models\SettingsMain`.
 */
class SettingsMainSearch extends SettingsMain
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sleeptime', 'flushtime', 'debug', 'logbuffer', 'authentication', 'debugevents', 'debugdevices', 'debugenergy', 'debugplugin', 'debugglobalvar', 'autodevicecreate', 'logallvalueupdates'], 'integer'],
            [['startpage', 'hometoppanel', 'homeleftpanel', 'homerightpanel', 'homebottompanel', 'logprefix'], 'safe'],
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
        $query = SettingsMain::find();

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
            'sleeptime' => $this->sleeptime,
            'flushtime' => $this->flushtime,
            'debug' => $this->debug,
            'logbuffer' => $this->logbuffer,
            'authentication' => $this->authentication,
            'debugevents' => $this->debugevents,
            'debugdevices' => $this->debugdevices,
            'debugenergy' => $this->debugenergy,
            'debugplugin' => $this->debugplugin,
            'debugglobalvar' => $this->debugglobalvar,
            'autodevicecreate' => $this->autodevicecreate,
            'logallvalueupdates' => $this->logallvalueupdates,
        ]);

        $query->andFilterWhere(['like', 'startpage', $this->startpage])
            ->andFilterWhere(['like', 'hometoppanel', $this->hometoppanel])
            ->andFilterWhere(['like', 'homeleftpanel', $this->homeleftpanel])
            ->andFilterWhere(['like', 'homerightpanel', $this->homerightpanel])
            ->andFilterWhere(['like', 'homebottompanel', $this->homebottompanel])
            ->andFilterWhere(['like', 'logprefix', $this->logprefix]);

        return $dataProvider;
    }
}

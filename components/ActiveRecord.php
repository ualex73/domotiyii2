<?php

/**
 * Extends the ActiveRecord with the following functionality:
 * - For Gambas compatibility, convert false=0/true=1 to false=0/true=-1 
 *   if the Model rules fine it as 'boolean'.
 *   Example rule: '[['enabled'], 'boolean'],'
 */

namespace app\components;

use Yii;

class ActiveRecord extends \yii\db\ActiveRecord
{

    public function __get($name)
    {
        foreach ($this->rules() as $rule) {
            if (is_array($rule) && isset($rule[0], $rule[1])) {
                if ($rule[1] == 'boolean') {
                    if (in_array($name, $rule[0])) {
                        return (parent::__get($name) == 0 ? 0: 1);
                    }
                }
            }
        }

        return parent::__get($name);
    }

    public function __set($name, $value)
    {
        foreach ($this->rules() as $rule) {
            if (is_array($rule) && isset($rule[0], $rule[1])) {
                if ($rule[1] == 'boolean') {
                    if (in_array($name, $rule[0])) {
                        parent::__set($name, $value == 0 ? 0 : -1);
                        return;
                    }
                }
            }
        }

        parent::__set($name, $value);
    }

}


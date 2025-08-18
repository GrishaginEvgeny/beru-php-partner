<?php

namespace Yandex\Beru\Partner\Models;

use Yandex\Common\ObjectModel;

class Instances extends ObjectModel
{
    /**
     * @param array|object $instance
     * @return $this
     */
    public function add($instance)
    {
        if (is_array($instance)) {
            $this->collection[] = new Instance($instance);
        } elseif ($instance instanceof Instance) {
            $this->collection[] = $instance;
        }
        return $this;
    }

    /**
     * @return Instance[]
     */
    public function getAll()
    {
        return $this->collection;
    }

    /**
     * @param array $items
     * @return $this
     */
    public function setAll(array $items)
    {
        $this->collection = [];
        foreach ($items as $i) {
            $this->add($i);
        }
        return $this;
    }
}

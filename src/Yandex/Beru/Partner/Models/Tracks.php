<?php

namespace Yandex\Beru\Partner\Models;

use Yandex\Common\ObjectModel;

class Tracks extends ObjectModel
{
    /**
     * @param array|object $track
     * @return $this
     */
    public function add($track)
    {
        if (is_array($track)) {
            $this->collection[] = new Track($track);
        } elseif ($track instanceof Track) {
            $this->collection[] = $track;
        }
        return $this;
    }

    /**
     * @return Track[]
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

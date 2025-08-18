<?php

namespace Yandex\Beru\Partner\Models;

use Yandex\Common\ObjectModel;

class RefundItems extends ObjectModel
{
    /**
     * @param array|object $item
     * @return RefundItems
     */
    public function add($item)
    {
        if (is_array($item)) {
            $this->collection[] = new RefundItem($item);
        } elseif (is_object($item) && $item instanceof RefundItem) {
            $this->collection[] = $item;
        }
        return $this;
    }

    /**
     * @return RefundItem[]
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

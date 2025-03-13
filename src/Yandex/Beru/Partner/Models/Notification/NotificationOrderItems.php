<?php

namespace Yandex\Beru\Partner\Models\Notification;

use Yandex\Common\ObjectModel;

class NotificationOrderItems extends ObjectModel
{
    /**
     * @param array|object $itemOrder
     *
     * @return NotificationOrderItems
     */
    public function add($itemOrder)
    {
        if (is_array($itemOrder)) {
            $this->collection[] = new NotificationOrderItem($itemOrder);
        } elseif (is_object($itemOrder) && $itemOrder instanceof NotificationOrderItem) {
            $this->collection[] = $itemOrder;
        }
        return $this;
    }

    /**
     * Get items
     *
     * @return NotificationOrderItem[]
     */
    public function getAll()
    {
        return $this->collection;
    }

    /**
     * @return NotificationOrderItem
     */
    public function current(): mixed
    {
        return parent::current();
    }
}

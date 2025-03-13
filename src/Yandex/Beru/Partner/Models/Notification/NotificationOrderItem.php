<?php

namespace Yandex\Beru\Partner\Models\Notification;

use Yandex\Common\Model;

class NotificationOrderItem extends Model
{
    /** @var int */
    protected $count;

    /** @var string */
    protected $offerId;

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return string
     */
    public function getOfferId()
    {
        return $this->offerId;
    }
}

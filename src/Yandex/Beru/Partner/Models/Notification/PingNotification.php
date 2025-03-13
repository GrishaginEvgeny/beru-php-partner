<?php

namespace Yandex\Beru\Partner\Models\Notification;

class PingNotification extends BaseNotification
{
    /** @var string */
    protected $time;

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }
}

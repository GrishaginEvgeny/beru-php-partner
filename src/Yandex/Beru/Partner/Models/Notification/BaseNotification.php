<?php

namespace Yandex\Beru\Partner\Models\Notification;

use Yandex\Common\Model;

abstract class BaseNotification extends Model
{
    /** @var string */
    protected $notificationType;

    /**
     * @return string
     */
    public function getNotificationType()
    {
        return $this->notificationType;
    }
}

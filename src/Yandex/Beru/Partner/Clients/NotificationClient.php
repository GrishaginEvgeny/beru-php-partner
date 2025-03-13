<?php

namespace Yandex\Beru\Partner\Clients;

use Yandex\Beru\Partner\Models\Notification\PingNotification;
use Yandex\Beru\Partner\Models\Notification\OrderCreatedNotification;
use Yandex\Beru\Partner\Models\Notification\OrderStatusUpdatedNotification;
use Yandex\Beru\Partner\Models\Notification\OrderCancelledNotification;
use Yandex\Beru\Partner\Models\Notification\OrderReturnCreatedNotification;

class NotificationClient extends Client
{
    /**
     * Notification ping
     *
     * @see https://yandex.ru/dev/market/partner-api/doc/ru/push-notifications/reference/sendNotification#pingnotificationdto
     * @param $response
     * @return \Yandex\Beru\Partner\Models\Notification\PingNotification
    */
    public function ping($response)
    {
        $decodedResponseBody = $this->getDecodedBody($response);

        return new PingNotification($decodedResponseBody);
    }

    /**
     * Notification order created
     *
     * @see https://yandex.ru/dev/market/partner-api/doc/ru/push-notifications/reference/sendNotification#ordercreatednotificationdto
     * @param $response
     * @return \Yandex\Beru\Partner\Models\Notification\OrderCreatedNotification
     */
    public function orderCreated($response)
    {
        $decodedResponseBody = $this->getDecodedBody($response);

        return new OrderCreatedNotification($decodedResponseBody);
    }

    /**
     * Notification order status update
     *
     * @see https://yandex.ru/dev/market/partner-api/doc/ru/push-notifications/reference/sendNotification#orderstatusupdatednotificationdto
     * @param $response
     * @return \Yandex\Beru\Partner\Models\Notification\OrderStatusUpdatedNotification
     */
    public function orderStatusUpdate($response)
    {
        $decodedResponseBody = $this->getDecodedBody($response);

        return new OrderStatusUpdatedNotification($decodedResponseBody);
    }

    /**
     * Notification order cancelled
     *
     * @see https://yandex.ru/dev/market/partner-api/doc/ru/push-notifications/reference/sendNotification#ordercancellednotificationdto
     * @param $response
     * @return \Yandex\Beru\Partner\Models\Notification\OrderCancelledNotification
     */
    public function orderCancelled($response)
    {
        $decodedResponseBody = $this->getDecodedBody($response);

        return new OrderCancelledNotification($decodedResponseBody);
    }

    /**
     * Notification order returned
     *
     * @see https://yandex.ru/dev/market/partner-api/doc/ru/push-notifications/reference/sendNotification#orderreturncreatednotificationdto
     * @param $response
     * @return \Yandex\Beru\Partner\Models\Notification\OrderReturnCreatedNotification
     */
    public function orderReturned($response)
    {
        $decodedResponseBody = $this->getDecodedBody($response);

        return new OrderReturnCreatedNotification($decodedResponseBody);
    }
}

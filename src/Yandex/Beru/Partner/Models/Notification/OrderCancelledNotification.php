<?php

namespace Yandex\Beru\Partner\Models\Notification;

class OrderCancelledNotification extends BaseNotification
{
    /**
     * @var int
     */
    protected $campaignId;

    /**
     * @var int
     */
    protected $orderId;

    /**
     * @var string
     */
    protected $cancelledAt;

    /**
     * @var NotificationOrderItems
     */
    protected $items;

    protected $mappingClasses = [
        'items' => NotificationOrderItems::class,
    ];

    /**
     * @return string
     */
    public function getCancelledAt()
    {
        return $this->cancelledAt;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @return NotificationOrderItems
     */
    public function getItems()
    {
        return $this->items;
    }
}

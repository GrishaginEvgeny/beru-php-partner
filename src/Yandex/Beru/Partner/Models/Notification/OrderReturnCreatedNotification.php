<?php

namespace Yandex\Beru\Partner\Models\Notification;

class OrderReturnCreatedNotification extends BaseNotification
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
    protected $createdAt;

    /**
     * @var NotificationOrderItems
     */
    protected $items;

    /**
     * @var int
     */
    protected $returnId;

    /**
     * @var string
     */
    protected $returnType;

    protected $mappingClasses = [
        'items' => NotificationOrderItems::class,
    ];

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
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

    /**
     * @return int
     */
    public function getReturnId()
    {
        return $this->returnId;
    }

    /**
     * @return string
     */
    public function getReturnType()
    {
        return $this->returnType;
    }
}

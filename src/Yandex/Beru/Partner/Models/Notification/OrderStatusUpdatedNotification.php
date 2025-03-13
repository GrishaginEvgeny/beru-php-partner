<?php

namespace Yandex\Beru\Partner\Models\Notification;

class OrderStatusUpdatedNotification extends BaseNotification
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
    protected $status;

    /**
     * @var string
     */
    protected $substatus;

    /**
     * @var string
     */
    protected $updatedAt;

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
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getSubstatus()
    {
        return $this->substatus;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

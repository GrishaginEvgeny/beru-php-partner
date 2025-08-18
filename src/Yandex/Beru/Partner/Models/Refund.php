<?php

namespace Yandex\Beru\Partner\Models;

use Yandex\Common\Model;

class Refund extends Model
{
    /** @var int|string|null */
    protected $id;

    /** @var int|string|null */
    protected $orderId;

    /** @var string|null */
    protected $creationDate;

    /** @var string|null */
    protected $updateDate;

    /** @var LogisticPickupPoint|null */
    protected $logisticPickupPoint;

    /** @var string|null */
    protected $shipmentRecipientType;

    /** @var string|null */
    protected $shipmentStatus;

    /** @var Amount|null */
    protected $amount;

    /** @var RefundItems|null */
    protected $items;

    /** @var string|null */
    protected $returnType;

    /** @var array */
    protected $mappingClasses = [
        'logisticPickupPoint' => LogisticPickupPoint::class,
        'amount'              => Amount::class,
        'items'               => RefundItems::class,
    ];

    /**
     * @return int|string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int|string|null $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }

    /**
     * @return int|string|null
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int|string|null $value
     * @return $this
     */
    public function setOrderId($value)
    {
        $this->orderId = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setCreationDate($value)
    {
        $this->creationDate = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setUpdateDate($value)
    {
        $this->updateDate = $value;
        return $this;
    }

    /**
     * @return LogisticPickupPoint|null
     */
    public function getLogisticPickupPoint()
    {
        return $this->logisticPickupPoint;
    }

    /**
     * @param LogisticPickupPoint|array|null $value
     * @return $this
     */
    public function setLogisticPickupPoint($value)
    {
        $this->logisticPickupPoint = is_array($value) ? new LogisticPickupPoint($value) : $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getShipmentRecipientType()
    {
        return $this->shipmentRecipientType;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setShipmentRecipientType($value)
    {
        $this->shipmentRecipientType = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getShipmentStatus()
    {
        return $this->shipmentStatus;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setShipmentStatus($value)
    {
        $this->shipmentStatus = $value;
        return $this;
    }

    /**
     * @return Amount|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Amount|array|null $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->amount = is_array($value) ? new Amount($value) : $value;
        return $this;
    }

    /**
     * @return RefundItems|null
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param RefundItems|array|null $value
     * @return $this
     */
    public function setItems($value)
    {
        $this->items = is_array($value) ? new RefundItems($value) : $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReturnType()
    {
        return $this->returnType;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setReturnType($value)
    {
        $this->returnType = $value;
        return $this;
    }
}

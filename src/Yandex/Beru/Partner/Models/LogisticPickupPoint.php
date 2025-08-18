<?php

namespace Yandex\Beru\Partner\Models;

use Yandex\Common\Model;

class LogisticPickupPoint extends Model
{
    /** @var int|string|null */
    protected $id;

    /** @var string|null */
    protected $name;

    /** @var Address|null */
    protected $address;

    /** @var string|null */
    protected $instruction;

    /** @var string|null */
    protected $type;

    /** @var int|string|null */
    protected $logisticPartnerId;

    /** @var array */
    protected $mappingClasses = [
        'address' => Address::class,
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
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }

    /**
     * @return Address|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address|array|null $value
     * @return $this
     */
    public function setAddress($value)
    {
        $this->address = is_array($value) ? new Address($value) : $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setInstruction($value)
    {
        $this->instruction = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }

    /**
     * @return int|string|null
     */
    public function getLogisticPartnerId()
    {
        return $this->logisticPartnerId;
    }

    /**
     * @param int|string|null $value
     * @return $this
     */
    public function setLogisticPartnerId($value)
    {
        $this->logisticPartnerId = $value;
        return $this;
    }
}

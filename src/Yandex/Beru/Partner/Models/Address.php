<?php

namespace Yandex\Beru\Partner\Models;

use Yandex\Common\Model;

class Address extends Model
{
    /** @var string|null */
    protected $country;

    /** @var string|null */
    protected $city;

    /** @var string|null */
    protected $street;

    /** @var string|null */
    protected $house;

    /** @var string|null */
    protected $postcode;

    /**
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setCountry($value)
    {
        $this->country = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setCity($value)
    {
        $this->city = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setStreet($value)
    {
        $this->street = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setHouse($value)
    {
        $this->house = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setPostcode($value)
    {
        $this->postcode = $value;
        return $this;
    }
}

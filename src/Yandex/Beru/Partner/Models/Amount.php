<?php

namespace Yandex\Beru\Partner\Models;

use Yandex\Common\Model;

class Amount extends Model
{
    /** @var string|float|null */
    protected $value;

    /** @var string|null */
    protected $currencyId;

    /**
     * @return string|float|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string|float|null $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setCurrencyId($value)
    {
        $this->currencyId = $value;
        return $this;
    }
}

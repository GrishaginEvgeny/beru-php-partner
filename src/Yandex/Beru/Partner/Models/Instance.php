<?php

namespace Yandex\Beru\Partner\Models;

use Yandex\Common\Model;

class Instance extends Model
{
    /** @var string|null */
    protected $status;

    /**
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setStatus($value)
    {
        $this->status = $value;
        return $this;
    }
}

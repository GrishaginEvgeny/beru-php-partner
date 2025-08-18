<?php

namespace Yandex\Beru\Partner\Models;

use Yandex\Common\Model;

class Track extends Model
{
    /** @var string|null */
    protected $trackCode;

    /**
     * @return string|null
     */
    public function getTrackCode()
    {
        return $this->trackCode;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setTrackCode($value)
    {
        $this->trackCode = $value;
        return $this;
    }
}

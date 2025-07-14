<?php

namespace Yandex\Beru\Partner\Models;

use Yandex\Common\Model;

class SetExternalOrderIdRequest extends Model
{
    protected $externalOrderId;

    /**
     * @return string
     */
    public function getExternalOrderId()
    {
        return $this->externalOrderId;
    }

    /**
     * @param string $externalOrderId
     */
    public function setExternalOrderId($externalOrderId)
    {
        $this->externalOrderId = $externalOrderId;
    }
}

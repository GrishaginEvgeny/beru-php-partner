<?php

namespace Yandex\Beru\Partner\Models\Response;

use Yandex\Common\Model;

class SetExternalOrderIdResponse extends Model
{
    protected $status;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}

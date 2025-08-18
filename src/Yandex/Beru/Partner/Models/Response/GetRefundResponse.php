<?php

namespace Yandex\Beru\Partner\Models\Response;

use Yandex\Common\Model;
use Yandex\Beru\Partner\Models\Refund;

class GetRefundResponse extends Model
{
    /** @var Refund */
    protected $result;

    /** @var array */
    protected $mappingClasses = [
        'result' => Refund::class,
    ];

    /**
     * @return Refund|null
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param Refund|array|null $value
     * @return $this
     */
    public function setResult($value)
    {
        $this->result = is_array($value) ? new Refund($value) : $value;
        return $this;
    }
}

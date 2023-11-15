<?php

namespace Yandex\Beru\Partner\Models\Response;

use Yandex\Beru\Partner\Models\Common\Errors;
use Yandex\Common\Model;

class GetOrdersStats extends Model
{
    protected $status;
    protected $result;
    protected $errors;

    protected $mappingClasses = [
        'result' => GetStatsResultOrders::class,
        'errors' => Errors::class
    ];

    /**
     * @return GetStatsResultOrders
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @
     */
    public function getErrors()
    {
        return $this->errors;
    }
}
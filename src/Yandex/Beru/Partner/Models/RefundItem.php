<?php

namespace Yandex\Beru\Partner\Models;

use Yandex\Common\Model;

class RefundItem extends Model
{
    protected $marketSku;
    protected $shopSku;
    protected $count;
    protected $instances;
    protected $tracks;
    protected $decisions;

    protected $mappingClasses = array(
        'instances' => Instances::class,
        'tracks'    => Tracks::class,
        'decisions' => RefundDecisions::class,
    );

    /**
     * @return int|string|null
     */
    public function getMarketSku()
    {
        return $this->marketSku;
    }

    /**
     * @return string|null
     */
    public function getShopSku()
    {
        return $this->shopSku;
    }

    /**
     * @return int|null
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return Instances|null
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * @return Tracks|null
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * @param int|string|null $value
     * @return $this
     */
    public function setMarketSku($value)
    {
        $this->marketSku = $value;
        return $this;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setShopSku($value)
    {
        $this->shopSku = $value;
        return $this;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function setCount($value)
    {
        $this->count = $value;
        return $this;
    }

    /**
     * @param Instances|array|null $value
     * @return $this
     */
    public function setInstances($value)
    {
        $this->instances = is_array($value) ? new Instances($value) : $value;
        return $this;
    }

    /**
     * @param Tracks|array|null $value
     * @return $this
     */
    public function setTracks($value)
    {
        $this->tracks = is_array($value) ? new Tracks($value) : $value;
        return $this;
    }

    /**
     * @return RefundDecisions|null
     */
    public function getDecisions()
    {
        return $this->decisions;
    }

    /**
     * @param RefundDecisions|array|null $value
     * @return $this
     */
    public function setDecisions($value)
    {
        $this->decisions = is_array($value) ? new RefundDecisions($value) : $value;
        return $this;
    }
}

<?php
namespace Yandex\Beru\Partner\Models;
use Yandex\Common\Model;

class RefundDecision extends Model
{
    /** @var Amount|null */
    protected $amount;

    /** @var string|null */
    protected $comment;

    /** @var int|null */
    protected $count;

    /** @var string|null */
    protected $decisionType;

    /** @var string[]|null */
    protected $images;

    /** @var Amount|null */
    protected $partnerCompensationAmount;

    /** @var string|null */
    protected $reasonType;

    /** @var int|string|null */
    protected $returnItemId;

    /** @var string|null */
    protected $subreasonType;

    protected $mappingClasses = [
        'amount' => Amount::class,
        'partnerCompensationAmount' => Amount::class,
    ];

    /**
     * @return string|null
     */
    public function getDecisionType()
    {
        return $this->decisionType;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setDecisionType($value)
    {
        $this->decisionType = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReasonType()
    {
        return $this->reasonType;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setReasonType($value)
    {
        $this->reasonType = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubreasonType()
    {
        return $this->subreasonType;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setSubreasonType($value)
    {
        $this->subreasonType = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setComment($value)
    {
        $this->comment = $value;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCount()
    {
        return $this->count;
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
     * @return Amount|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Amount|array|null $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->amount = is_array($value) ? new Amount($value) : $value;
        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param string[]|null $value
     * @return $this
     */
    public function setImages($value)
    {
        $this->images = $value;
        return $this;
    }

    /**
     * @return Amount|null
     */
    public function getPartnerCompensationAmount()
    {
        return $this->partnerCompensationAmount;
    }

    /**
     * @param Amount|array|null $value
     * @return $this
     */
    public function setPartnerCompensationAmount($value)
    {
        $this->partnerCompensationAmount = is_array($value) ? new Amount($value) : $value;
        return $this;
    }

    /**
     * @return int|string|null
     */
    public function getReturnItemId()
    {
        return $this->returnItemId;
    }

    /**
     * @param int|string|null $value
     * @return $this
     */
    public function setReturnItemId($value)
    {
        $this->returnItemId = $value;
        return $this;
    }
}



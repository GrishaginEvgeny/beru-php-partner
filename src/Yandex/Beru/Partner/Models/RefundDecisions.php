<?php
namespace Yandex\Beru\Partner\Models;
use Yandex\Common\ObjectModel;

class RefundDecisions extends ObjectModel
{
    /**
     * @param array|object $decision
     * @return RefundDecisions
     */
    public function add($decision)
    {
        if (is_array($decision)) {
            $this->collection[] = new RefundDecision($decision);
        } elseif ($decision instanceof RefundDecision) {
            $this->collection[] = $decision;
        }
        return $this;
    }

    /**
     * @return RefundDecision[]
     */
    public function getAll()
    {
        return $this->collection;
    }

    /**
     * @param array $decisions
     * @return $this
     */
    public function setAll(array $decisions)
    {
        $this->collection = [];
        foreach ($decisions as $d) {
            $this->add($d);
        }
        return $this;
    }
}



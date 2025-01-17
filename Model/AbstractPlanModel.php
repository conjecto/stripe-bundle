<?php

namespace Miracode\StripeBundle\Model;

use Miracode\StripeBundle\Annotation\StripeObjectParam;

abstract class AbstractPlanModel extends StripeModel
{
    /**
     * @StripeObjectParam
     *
     * @var bool
     */
    protected $active;

    /**
     * @StripeObjectParam
     *
     * @var int
     */
    protected $amount;

    /**
     * @StripeObjectParam
     *
     * @var int
     */
    protected $created;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $currency;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $interval;

    /**
     * @StripeObjectParam(name="interval_count")
     *
     * @var int
     */
    protected $intervalCount;

    /**
     * @StripeObjectParam
     *
     * @var bool
     */
    protected $livemode;

    /**
     * @StripeObjectParam
     *
     * @var array
     */
    protected $metadata;

    /**
     * @StripeObjectParam
     *
     * @var array
     */
    protected $tiers;

    /**
     * @StripeObjectParam(name="tiers_mode")
     *
     * @var string
     */
    protected $tiersMode;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $nickname;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $product;

    /**
     * @StripeObjectParam(name="billing_scheme")
     *
     * @var string
     */
    protected $billingScheme;

    /**
     * @StripeObjectParam(name="statement_descriptor")
     *
     * @var string
     */
    protected $statementDescriptor;

    /**
     * @StripeObjectParam(name="trial_period_days")
     *
     * @var int
     */
    protected $trialPeriodDays;

    /**
     * Get the value of active
     *
     * @return  bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * Set the value of active
     *
     * @param  bool  $active
     *
     * @return  self
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return int
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param int $created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->interval = $interval;

        return $this;
    }

    /**
     * @return int
     */
    public function getIntervalCount()
    {
        return $this->intervalCount;
    }

    /**
     * @param int $intervalCount
     *
     * @return $this
     */
    public function setIntervalCount($intervalCount)
    {
        $this->intervalCount = $intervalCount;

        return $this;
    }

    /**
     * @return bool
     */
    public function isLivemode()
    {
        return $this->livemode;
    }

    /**
     * @param bool $livemode
     *
     * @return $this
     */
    public function setLivemode($livemode)
    {
        $this->livemode = $livemode;

        return $this;
    }

    /**
     * @return array
     */
    public function getTiers()
    {
        return $this->tiers;
    }

    /**
     * @param array $tiers
     *
     * @return $this
     */
    public function setTiers($tiers)
    {
        $this->tiers = $tiers;

        return $this;
    }

    /**
     * @return string
     */
    public function getTiersMode()
    {
        return $this->tiersMode;
    }

    /**
     * @param string $tiersMode
     *
     * @return $this
     */
    public function setTiersMode($tiersMode)
    {
        $this->tiersMode = $tiersMode;

        return $this;
    }

    /**
     * @return array
     */
    public function getMetadata($key = null)
    {
        if ($key) {
            return isset($this->metadata[$key]) ? $this->metadata[$key] : null;
        }
        return $this->metadata;
    }

    /**
     * @param array $metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param string $product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillingScheme()
    {
        return $this->billingScheme;
    }

    /**
     * @param string $billingScheme
     *
     * @return $this
     */
    public function setBillingScheme($billingScheme)
    {
        $this->billingScheme = $billingScheme;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatementDescriptor()
    {
        return $this->statementDescriptor;
    }

    /**
     * @param string $statementDescriptor
     *
     * @return $this
     */
    public function setStatementDescriptor($statementDescriptor)
    {
        $this->statementDescriptor = $statementDescriptor;

        return $this;
    }

    /**
     * @return int
     */
    public function getTrialPeriodDays()
    {
        return $this->trialPeriodDays;
    }

    /**
     * @param int $trialPeriodDays
     *
     * @return $this
     */
    public function setTrialPeriodDays($trialPeriodDays)
    {
        $this->trialPeriodDays = $trialPeriodDays;

        return $this;
    }

    /**
     * @return int
     * @see https://stripe.com/docs/billing/subscriptions/tiers
     */
    public function getQuotation($units = 1)
    {
        if ($this->getBillingScheme() == "tiered") {
            switch($this->getTiersMode()) {
                case "graduated":
                    return $this->getGraduatedQuotation($units);
                default:
                    throw new \Exception("Tiers mode not implemented : " . $this->getTiersMode());
            }
        }
        return $this->amount * $units;
    }

    /**
     * @return int
     * @see https://stripe.com/docs/billing/subscriptions/tiers#graduated
     */
    private function getGraduatedQuotation($units = 1)
    {
        $total = 0;
        $prevTiers = null;
        for ($i=1; $i<=$units; $i++) {
            foreach ($this->getTiers() as $tiers) {
                if($tiers['up_to'] == null || $i <= $tiers['up_to']) {
                    $total += $tiers['unit_amount'];
                    if ($tiers['flat_amount'] !== null && $prevTiers != $tiers) {
                        $total += $tiers['flat_amount'];
                        $prevTiers = $tiers;
                    }
                    break;
                }
            }
        }
        return $total;
    }

    /**
     * @return int
     * @see https://stripe.com/docs/billing/subscriptions/tiers#volume
     */
    private function getVolumeQuotation($units = 1)
    {
        // todo
    }
}

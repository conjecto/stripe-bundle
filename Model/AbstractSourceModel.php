<?php

namespace Miracode\StripeBundle\Model;

use Miracode\StripeBundle\Annotation\StripeObjectParam;

/**
 * @Annotation
 */
abstract class AbstractSourceModel extends StripeModel
{
    /**
     * @StripeObjectParam
     *
     * @var int
     */
    protected $amount;

    /**
     * @StripeObjectParam
     *
     * @var array
     */
    protected $card;

    /**
     * @StripeObjectParam(name="client_secret")
     *
     * @var string
     */
    protected $clientSecret;

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
     * @StripeObjectParam(embeddedId="id")
     *
     * @var string
     */
    protected $customer;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $flow;

    /**
     * @StripeObjectParam
     *
     * @var boolean
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
    protected $owner;

    /**
     * @StripeObjectParam(name="statement_descriptor")
     *
     * @var string
     */
    protected $statementDescriptor;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $status;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $type;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $usage;

    /**
     * Get the value of amount
     *
     * @return  int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @param  int  $amount
     *
     * @return  self
     */
    public function setAmount(int $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get the value of card
     *
     * @return  array
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set the value of card
     *
     * @param  array  $card
     *
     * @return  self
     */
    public function setCard(array $card)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get the value of clientSecret
     *
     * @return  string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * Set the value of clientSecret
     *
     * @param  string  $clientSecret
     *
     * @return  self
     */
    public function setClientSecret(string $clientSecret)
    {
        $this->clientSecret = $clientSecret;

        return $this;
    }

    /**
     * Get the value of created
     *
     * @return  int
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set the value of created
     *
     * @param  int  $created
     *
     * @return  self
     */
    public function setCreated(int $created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get the value of currency
     *
     * @return  string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set the value of currency
     *
     * @param  string  $currency
     *
     * @return  self
     */
    public function setCurrency(string $currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get the value of customer
     *
     * @return  string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set the value of customer
     *
     * @param  string  $customer
     *
     * @return  self
     */
    public function setCustomer(string $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get the value of flow
     *
     * @return  string
     */
    public function getFlow()
    {
        return $this->flow;
    }

    /**
     * Set the value of flow
     *
     * @param  string  $flow
     *
     * @return  self
     */
    public function setFlow(string $flow)
    {
        $this->flow = $flow;

        return $this;
    }

    /**
     * Get the value of livemode
     *
     * @return  boolean
     */
    public function getLivemode()
    {
        return $this->livemode;
    }

    /**
     * Set the value of livemode
     *
     * @param  boolean  $livemode
     *
     * @return  self
     */
    public function setLivemode(boolean $livemode)
    {
        $this->livemode = $livemode;

        return $this;
    }

    /**
     * Get the value of metadata
     *
     * @return  array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set the value of metadata
     *
     * @param  array  $metadata
     *
     * @return  self
     */
    public function setMetadata(array $metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Get the value of owner
     *
     * @return  array
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set the value of owner
     *
     * @param  array  $owner
     *
     * @return  self
     */
    public function setOwner(array $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get the value of statementDescriptor
     *
     * @return  string
     */
    public function getStatementDescriptor()
    {
        return $this->statementDescriptor;
    }

    /**
     * Set the value of statementDescriptor
     *
     * @param  string  $statementDescriptor
     *
     * @return  self
     */
    public function setStatementDescriptor(string $statementDescriptor)
    {
        $this->statementDescriptor = $statementDescriptor;

        return $this;
    }

    /**
     * Get the value of status
     *
     * @return  string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @param  string  $status
     *
     * @return  self
     */
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of type
     *
     * @return  string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param  string  $type
     *
     * @return  self
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of usage
     *
     * @return  string
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Set the value of usage
     *
     * @param  string  $usage
     *
     * @return  self
     */
    public function setUsage(string $usage)
    {
        $this->usage = $usage;

        return $this;
    }
}

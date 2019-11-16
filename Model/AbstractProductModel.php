<?php

namespace Miracode\StripeBundle\Model;

use Miracode\StripeBundle\Annotation\StripeObjectParam;

abstract class AbstractProductModel extends StripeModel
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
     * @var array
     */
    protected $attributes;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $caption;

    /**
     * @StripeObjectParam
     *
     * @var int
     */
    protected $created;

    /**
     * @StripeObjectParam(name="deactivate_on")
     *
     * @var array
     */
    protected $deactivateOn;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $description;

    /**
     * @StripeObjectParam
     *
     * @var array
     */
    protected $images;

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
     * @var string
     */
    protected $name;

    /**
     * @StripeObjectParam(name="package_dimensions")
     *
     * @var array
     */
    protected $packageDimensions;

    /**
     * @StripeObjectParam
     *
     * @var bool
     */
    protected $shippable;

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
    protected $type;

    /**
     * @StripeObjectParam(name="unit_label")
     *
     * @var string
     */
    protected $unitLabel;

    /**
     * @StripeObjectParam
     *
     * @var int
     */
    protected $updated;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $url;

    /**
     * Get the value of active
     *
     * @return  bool
     */
    public function getActive()
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
     * Get the value of attributes
     *
     * @return  array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Set the value of attributes
     *
     * @param  array  $attributes
     *
     * @return  self
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get the value of caption
     *
     * @return  string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set the value of caption
     *
     * @param  string  $caption
     *
     * @return  self
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

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
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get the value of deactivateOn
     *
     * @return  array
     */
    public function getDeactivateOn()
    {
        return $this->deactivateOn;
    }

    /**
     * Set the value of deactivateOn
     *
     * @param  array  $deactivateOn
     *
     * @return  self
     */
    public function setDeactivateOn($deactivateOn)
    {
        $this->deactivateOn = $deactivateOn;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return  string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param  string  $description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of images
     *
     * @return  array
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set the value of images
     *
     * @param  array  $images
     *
     * @return  self
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get the value of livemode
     *
     * @return  bool
     */
    public function getLivemode()
    {
        return $this->livemode;
    }

    /**
     * Set the value of livemode
     *
     * @param  bool  $livemode
     *
     * @return  self
     */
    public function setLivemode($livemode)
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
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of packageDimensions
     *
     * @return  array
     */
    public function getPackageDimensions()
    {
        return $this->packageDimensions;
    }

    /**
     * Set the value of packageDimensions
     *
     * @param  array  $packageDimensions
     *
     * @return  self
     */
    public function setPackageDimensions($packageDimensions)
    {
        $this->packageDimensions = $packageDimensions;

        return $this;
    }

    /**
     * Get the value of shippable
     *
     * @return  bool
     */
    public function getShippable()
    {
        return $this->shippable;
    }

    /**
     * Set the value of shippable
     *
     * @param  bool  $shippable
     *
     * @return  self
     */
    public function setShippable($shippable)
    {
        $this->shippable = $shippable;

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
    public function setStatementDescriptor($statementDescriptor)
    {
        $this->statementDescriptor = $statementDescriptor;

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
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of unitLabel
     *
     * @return  string
     */
    public function getUnitLabel()
    {
        return $this->unitLabel;
    }

    /**
     * Set the value of unitLabel
     *
     * @param  string  $unitLabel
     *
     * @return  self
     */
    public function setUnitLabel($unitLabel)
    {
        $this->unitLabel = $unitLabel;

        return $this;
    }

    /**
     * Get the value of updated
     *
     * @return  int
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set the value of updated
     *
     * @param  int  $updated
     *
     * @return  self
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get the value of url
     *
     * @return  string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @param  string  $url
     *
     * @return  self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}

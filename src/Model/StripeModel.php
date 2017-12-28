<?php

namespace Miracode\StripeBundle\Model;

use Miracode\StripeBundle\Annotation\StripeObjectParam;
use Stripe\StripeObject;

class StripeModel implements StripeModelInterface
{
    /**
     * @StripeObjectParam(name="id")
     *
     * @var string
     */
    protected $stripeId;

    /**
     * Update model object from stripe data
     *
     * @param StripeObject $object
     * @return $this
     */
    public function populateFromStripeObject(StripeObject $object)
    {
        Transformer\AnnotationTransformer::transform($this, $object);

        return $this;
    }

    /**
     * Retrieve stripe object ID
     *
     * @return string
     */
    public function getStripeId()
    {
        return $this->stripeId;
    }

    /**
     * @param string $stripeId
     *
     * @return $this
     */
    public function setStripeId($stripeId)
    {
        $this->stripeId = $stripeId;

        return $this;
    }
}

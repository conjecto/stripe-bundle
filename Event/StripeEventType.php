<?php

namespace Aimir\StripeBundle\Event;

use Stripe\Object as StripeObject;

class StripeEventType
{
    const CHARGE_CAPTURED = 'stripe.charge.captured';
    const CHARGE_FAILED = 'stripe.charge.failed';
    const CHARGE_REFUNDED = 'stripe.charge.refunded';
    const CHARGE_SUCCEEDED = 'stripe.charge.succeeded';
    const CHARGE_UPDATED = 'stripe.charge.updated';
    const COUPON_CREATED = 'stripe.coupon.created';
    const COUPON_DELETED = 'stripe.coupon.deleted';
    const COUPON_UPDATED = 'stripe.coupon.updated';
    const CUSTOMER_CREATED = 'stripe.customer.created';
    const CUSTOMER_DELETED = 'stripe.customer.deleted';
    const CUSTOMER_UPDATED = 'stripe.customer.updated';
    const CUSTOMER_DISCOUNT_CREATED = 'stripe.customer.discount.created';
    const CUSTOMER_DISCOUNT_DELETED = 'stripe.customer.discount.deleted';
    const CUSTOMER_DISCOUNT_UPDATED = 'stripe.customer.discount.updated';
    const CUSTOMER_SOURCE_CREATED = 'stripe.customer.source.created';
    const CUSTOMER_SOURCE_DELETED = 'stripe.customer.source.deleted';
    const CUSTOMER_SOURCE_UPDATED = 'stripe.customer.source.updated';
    const CUSTOMER_SUBSCRIPTION_CREATED = 'stripe.customer.subscription.created';
    const CUSTOMER_SUBSCRIPTION_DELETED = 'stripe.customer.subscription.deleted';
    const CUSTOMER_SUBSCRIPTION_UPDATED = 'stripe.customer.subscription.updated';
    const CUSTOMER_SUBSCRIPTION_TRAIL_WILL_END = 'stripe.customer.subscription.trial_will_end';
    const INVOICE_CREATED = 'stripe.invoice.created';
    const INVOICE_PAYMENT_FAILED = 'stripe.invoice.payment_failed';
    const INVOICE_PAYMENT_SUCCEEDED = 'stripe.invoice.payment_succeeded';
    const INVOICE_UPDATED = 'stripe.invoice.updated';
    const PLAN_CREATED = 'stripe.plan.created';
    const PLAN_DELETED = 'stripe.plan.deleted';
    const PLAN_UPDATED = 'stripe.plan.updated';

    /**
     * @var StripeObject
     */
    protected $event;

    /**
     * StripeEventType constructor.
     *
     * @param StripeObject $event
     */
    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Get stripe event object
     *
     * @return StripeObject
     */
    public function getEvent()
    {
        return $this->event;
    }
}
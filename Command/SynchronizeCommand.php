<?php

namespace Miracode\StripeBundle\Command;

use Miracode\StripeBundle\Manager\ModelManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * SynchronizeCommand
 */
class SynchronizeCommand extends Command
{
    protected static $defaultName = 'miracode:stripe:synchronize';

    /**
     * @var ModelManagerInterface
     */
    protected $modelManager;


    /**
     * construct
     *
     * @param ModelManagerInterface $modelManager
     */
    public function __construct(ModelManagerInterface $modelManager)
    {
        $this->modelManager = $modelManager;
        parent::__construct();
    }

    /**
     * configure
     *
     * @return void
     */
    protected function configure()
    {
        $this
            ->setDescription('Synchronize data from Stripe')
            ->setHelp('This command allows you to synchronize data from Stripe');
    }

    /**
     * execute
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->synchronizeProducts($input, $output);
        $this->synchronizePlans($input, $output);
        $this->synchronizeCustomers($input, $output);
        $this->synchronizeSubscriptions($input, $output);
        $this->synchronizeInvoices($input, $output);
        $this->synchronizeCharges($input, $output);
    }

    /**
     * synchronizeProducts
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function synchronizeCustomers(InputInterface $input, OutputInterface $output)
    {
        $customers = \Stripe\Customer::all();
        foreach ($customers->autoPagingIterator() as $customer) {
            $this->modelManager->save($customer);
        }
        $this->modelManager->flush();
    }

    /**
     * synchronizeSubscriptions
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function synchronizeSubscriptions(InputInterface $input, OutputInterface $output)
    {
        $subscriptions = \Stripe\Subscription::all();
        foreach ($subscriptions->autoPagingIterator() as $subscription) {
            $this->modelManager->save($subscription);
        }
        $this->modelManager->flush();
    }

    /**
     * synchronizeProducts
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function synchronizeProducts(InputInterface $input, OutputInterface $output)
    {
        $products = \Stripe\Product::all();
        foreach ($products->autoPagingIterator() as $product) {
            $this->modelManager->save($product);
        }
        $this->modelManager->flush();
    }

    /**
     * synchronizePlans
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function synchronizePlans(InputInterface $input, OutputInterface $output)
    {
        $plans = \Stripe\Plan::all();
        foreach ($plans->autoPagingIterator() as $plan) {
            $this->modelManager->save($plan);
        }
        $this->modelManager->flush();
    }

    /**
     * synchronizeInvoices
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function synchronizeInvoices(InputInterface $input, OutputInterface $output)
    {
        $invoices = \Stripe\Invoice::all();
        foreach ($invoices->autoPagingIterator() as $invoice) {
            $this->modelManager->save($invoice);
        }
        $this->modelManager->flush();
    }

    /**
     * synchronizeCharges
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function synchronizeCharges(InputInterface $input, OutputInterface $output)
    {
        $charges = \Stripe\Charge::all();
        foreach ($charges->autoPagingIterator() as $charge) {
            $this->modelManager->save($charge);
        }
        $this->modelManager->flush();
    }
}

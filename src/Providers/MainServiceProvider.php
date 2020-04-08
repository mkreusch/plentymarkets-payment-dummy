<?php

namespace DummyTechName\Providers;


use DummyTechName\Helper\PaymentHelper;
use DummyTechName\Services\PaymentMethodService;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodContainer;
use Plenty\Plugin\ServiceProvider;

/**
 * Class MainServiceProvider
 * @package DummyTechName\Providers
 */
class MainServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    /**
     * Boot additional services for the payment method
     *
     * @param PaymentHelper $paymentHelper
     * @param PaymentMethodContainer $payContainer
     */
    public function boot(
        PaymentHelper $paymentHelper,
        PaymentMethodContainer $payContainer
    ) {
        $paymentHelper->createMopIfNotExists();
        $payContainer->register(PaymentMethodService::PLUGIN_KEY . '::' . PaymentMethodService::PAYMENT_KEY, PaymentMethodService::class, []);
    }
}

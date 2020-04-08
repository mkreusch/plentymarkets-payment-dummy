<?php

namespace DummyTechName\Services;

class PaymentMethodService extends \Plenty\Modules\Payment\Method\Contracts\PaymentMethodService
{
    const PLUGIN_KEY = 'dummyPluginKey';
    const PAYMENT_KEY = 'DummyTechName';
    const PAYMENT_NAME = 'Dummy Payment';

    public function isBackendSearchable(): bool
    {
        return true;
    }

    public function isBackendActive(): bool
    {
        return true;
    }

    public function isActive()
    {
        return true;
    }

    public function getBackendName(string $lang): string
    {
        return self::PAYMENT_NAME;
    }

    public function canHandleSubscriptions(): bool
    {
        return true;
    }
}

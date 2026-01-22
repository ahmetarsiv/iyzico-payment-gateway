<?php

namespace Webkul\Iyzico\Helpers;

use Iyzipay\Options;
use Webkul\Iyzico\Payment\Iyzico;

/**
 * Iyzico payment api and secret key
 */
class IyzicoApi
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected Iyzico $iyzico)
    {
        //
    }

    public function options(): Options
    {
        $options = new Options();
        $options->setApiKey($this->iyzico->getApiKey());
        $options->setSecretKey($this->iyzico->getSecretKey());
        $options->setBaseUrl($this->iyzico->getPaymentUrl());

        return $options;
    }
}

<?php

namespace Webkul\Iyzico\Payment;

use Illuminate\Support\Facades\Storage;
use Webkul\Payment\Payment\Payment;

class Iyzico extends Payment
{
    /**
     * Payment method code
     */
    protected string $code = 'iyzico';

    public function getRedirectUrl(): string
    {
        return route('iyzico.redirect');
    }

    /**
     * Check if the payment method is available
     */
    public function isAvailable(): bool
    {
        if (core()->getConfigData('sales.checkout.shopping_cart.allow_guest_checkout')) {
            return false;
        }

        return parent::isAvailable() && $this->hasValidCredentials();
    }

    /**
     * Get payment method title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->getConfigData('title') ?? trans('iyzico::app.iyzico.system.title');
    }

    /**
     * Get payment method description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->getConfigData('description') ?? trans('iyzico::app.iyzico.system.description');
    }

    /**
     * Get payment method image/logo.
     *
     * @return string|null
     */
    public function getImage(): ?string
    {
        $url = $this->getConfigData('image');

        return $url ? Storage::url($url) : asset('vendor/iyzico/images/iyzico.svg');
    }

    /**
     * Get API key from configuration.
     *
     * @return string|null
     */
    public function getApiKey(): ?string
    {
        return $this->getConfigData('api_key');
    }

    /**
     * Get secret key from configuration.
     *
     * @return string|null
     */
    public function getSecretKey(): ?string
    {
        return $this->getConfigData('secret_key');
    }

    /**
     * Check if sandbox mode is enabled.
     *
     * @return bool
     */
    public function isSandbox(): bool
    {
        return (bool) $this->getConfigData('sandbox');
    }

    /**
     * Get payment gateway URL based on environment.
     *
     * @return string
     */
    public function getPaymentUrl(): string
    {
        return $this->isSandbox()
            ? 'https://sandbox-api.iyzipay.com'
            : 'https://api.iyzipay.com';
    }

    /**
     * Validate merchant credentials.
     *
     * @return bool
     */
    public function hasValidCredentials(): bool
    {
        return ! empty($this->getApiKey()) && ! empty($this->getSecretKey());
    }
}

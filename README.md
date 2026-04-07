<p align="center"><a href="https://codenteq.com" target="_blank"><img src="src/Resources/assets/images/iyzico.svg" width="288"></a></p>

# Iyzico Payment Gateway
[![License](https://poser.pugx.org/codenteq/iyzico-payment-gateway/license)](https://github.com/codenteq/iyzico-payment-gateway/blob/master/LICENSE)
[![Total Downloads](https://poser.pugx.org/codenteq/iyzico-payment-gateway/d/total)](https://packagist.org/packages/codenteq/iyzico-payment-gateway)

## 1. Introduction:

Install this package now to receive secure payments in your online store. Iyzico offers an easy and secure payment gateway.

## 2. Requirements:

* **PHP**: 8.2 or higher.
* **Bagisto**: v2.*
* **Composer**: 1.6.5 or higher.

## 3. Installation:

- Run the following command
```
composer require codenteq/iyzico-payment-gateway
```

- Publish the assets using the command below
```
php artisan vendor:publish --tag=iyzico-assets
```

> WARNING <br>
> Go to `/admin/configuration/sales/payment_methods`, find Iyzico, and enter your API Key and Secret Key.

> That's it, now just execute the project on your specified domain.

## Installation without composer:

- To ensure that your custom shipping method package is properly integrated into the Bagisto application, you need to register your service provider. This can be done by adding it to the `bootstrap/providers.php` file in the Bagisto root directory.

```
Webkul\Iyzico\Providers\IyzicoServiceProvider::class,
```

- Goto composer.json file and add following line under 'psr-4'

```
"Webkul\\Iyzico\\": "packages/Webkul/Iyzico/src"
```

- Run these commands below to complete the setup

```
composer dump-autoload
```

> WARNING <br>
> Go to `/admin/configuration/sales/payment_methods`, find Iyzico, and enter your API Key and Secret Key.

> That's it, now just execute the project on your specified domain.

## How to contribute
Iyzico Payment Gateway is always open for direct contributions. Contributions can be in the form of design suggestions, documentation improvements, new component suggestions, code improvements, adding new features or fixing problems. For more information please check our [Contribution Guideline document.](https://opensource.codenteq.com/contributor-covenant-code-of-conduct/)

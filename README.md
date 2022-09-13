# SG PayNow QR Code

Singapore Paynow QR Code generator for PHP.


## Usage Instructions

**1. Install via composer**
```
$ composer require gearosv2/paynow
```

**2. Publish the assets**
```
$ php artisan vendor:publish --provider="gearosv2\Paynow\PaynowServiceProvider" --tag=public --force
```

**3. Add the using**
```php
use gearosv2\Paynow\Facades\Paynow;
```

**4. Create PayNow QR Code**

As encoded base64image

*Dynamic*
```php
Paynow::generateDynamic(
    100.00,
    false,
    "O123456",
    (new DateTime())->modify("+ 1 hour"),
    "Clothing Company Pte Ltd",
    "SG",
    "Singapore",
    "2020111104G",
    null,
    true
);
```
As paynow string
```php
Paynow::generateDynamic(
    100.00,
    false,
    "O123456",
    (new DateTime())->modify("+ 1 hour"),
    "Clothing Company Pte Ltd",
    "SG",
    "Singapore",
    "2020111104G",
    null,
    false
);
```

*Static*
```php
Paynow::generateStatic(
    "Clothing Company Pte Ltd",
    "SG",
    "Singapore",
    "2020111104G",
    null,
    true
);
```
As paynow string
```php
Paynow::generateStatic(
    "Clothing Company Pte Ltd",
    "SG",
    "Singapore",
    "2020111104G",
    null,
    false
);
```
## Potential usecases:

Dynamically generating payment QR codes on e-commerce or donation pages that allow tracking of payments via reference codes.

Can be used in conjunction with Bank APIs to detect resolved payments.



## To do

Incorporate QR generation into the PaynowQR class with logo / branding options



## Credits

Original code referenced from:
https://github.com/ThunderQuoteTeam/PaynowQR

See also:

Developed by Chris West (https://www.christophermwest.co.uk/)

Was looking around for various ways to implement dynamic SGQR codes for payment over PHP, however couldn't find any that worked.

Feel free to report any issues and feature requests!

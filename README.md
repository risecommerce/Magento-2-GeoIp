# Risecommerce Magento 2 GEO IP Auto Language Switcher using Free GEOIP2 Databases

The [Magento 2 GEO IP Auto Language Switcher using Free GEOIP2 Databases](https://risecommerce.com/store/magento2-auto-language-switcher.html) automatically changes store language based on location using free GEOIP2 databases.

For more details about this extension, visit the [Magento 2 GEO IP Auto Language Switcher using Free GEOIP2 Databases](https://risecommerce.com/store/magento2-auto-language-switcher.html).

If you're looking to enhance your Magento store further, consider hiring a [dedicated Magento developer](https://risecommerce.com/hire-dedicated-magento-developer.html).

For support or inquiries, please visit our [contact page](https://risecommerce.com/contact).

## Support: 
version - 1.0.1

## How to install Extension

Method I)

1. Download the archive file.
2. Unzip the file
3. Create a folder [Magento_Root]/app/code/Risecommerce/GeoIp
4. Drop/move the unzipped files to directory '[Magento_Root]/app/code/Risecommerce/GeoIp'

Method II)

Using Composer

composer require risecommerce/magento-2-geoip:1.0.1

### Enable Extension:
- php bin/magento module:enable Risecommerce_GeoIp
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush

### Disable Extension:
- php bin/magento module:disable Risecommerce_GeoIp
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush

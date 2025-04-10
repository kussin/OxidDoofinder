# Kussin | Doofinder Connector for OXID eShop 6.0 (BWC Version)

Kussin | Doofinder Connector for OXID eShop Kussin | Doofinder Connector for OXID eShop replaces OXID eShop search bar 
with a search bar from [Doofinder](https://www.doofinder.com/).

**NOTE:** It also installs [Kussin | OXID 6 FACT Finder Export Queue](https://github.com/kussin/OxidFactFinderExportQueue) for Doofinder XML exports.

**The following configuration options are available:**

1. [`installationId`](https://github.com/kussin/OxidDoofinder/blob/main/modules/kussin/doofinder/views/blocks/base_js.tpl#L11) - Doofinder Installation ID
2. [`zone`](https://github.com/kussin/OxidDoofinder/blob/main/modules/kussin/doofinder/views/blocks/base_js.tpl#L12) - Doofinder Zone

## Requirement

1. OXID eSales CE/PE/EE v6.0.x
2. PHP 5.6 or newer

## Installation Guide

### Initial Installation

To install the module, please execute the following commands in OXID eShop root directory:

   ```bash
   composer config repositories.kussin_doofinder vcs https://github.com/kussin/OxidDoofinder.git
   composer require kussin/doofinder --no-update
   composer clearcache
   composer update --no-interaction
   vendor/bin/oe-console oe:module:install-configuration source/modules/kussin/doofinder/
   vendor/bin/oe-console oe:module:apply-configuration
   ```

**NOTE:** If you are using VCS like GIT for your project, you should add the following path to your `.gitignore` file:
`/source/modules/kussin/`

## User Guide

[User Guide](USER_GUIDE.md)

## Bugtracker and Feature Requests

Please use the [Github Issues](https://github.com/kussin/OxidDoofinder/issues) for bug reports and feature requests.

## Support

Kussin | eCommerce und Online-Marketing GmbH<br>
Fahltskamp 3<br>
25421 Pinneberg<br>
Germany

Fon: +49 (4101) 85868 - 0<br>
Email: info@kussin.de

## Licence

[End-User Software License Agreement](LICENSE.md)

## Copyright

&copy; 2006-2025 Kussin | eCommerce und Online-Marketing GmbH
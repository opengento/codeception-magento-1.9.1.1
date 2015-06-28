# Frontend tests on Magento with Codeception

## Introduction 

The tests located in the tests directory work with a default Magento CE installation with sample data installed.
The idea is that if you have a custom project you will duplicate those tests in a separate directory and make the necessary adjustments so that the tests pass with your custom theme, extensions and custom modifications.

If you develop new generic tests, please contribute them back to this project by either coming to a Magento Hackathon and requesting write access to this repository or by forking it and submitting a pull request.

## Two Repositories

* 1 repository for common Codeception configuration witch not depend on Magento version.
* 1 repository for each Magento version (here is 1.9.1.1)

## Install

* Install [NodeJS](INSTALL_NODEJS.md)
* Install [PhantomJS](INSTALL_PHANTOMJS.md)
* Run PhantomJS `phantomjs --webdriver=4444 &`
* Configure your [`composer.json` file](CONFIGURE_COMPOSER.md)
* Install [compressed Sample data 1.9.1.0](https://github.com/Vinai/compressed-magento-sample-data)
* Install Magento 1.9.1.1
* Run tests `$ vendor/bin/codecept run --debug -c htdocs --env local`


If you want, for each test you run, Codeception can get `data/dump.sql` and restore it above your current local DB.
Dump is located in `tests/_data/dump.sql`

## How to create new tests

### Cest files and public methods

Tests are located in Cest files.
For exemple: `tests/acceptance/CheckoutCest.php`
You method have to begin with the word `test`.

You can add:

* More method
* New Cest files

### Write a test

See [Codeception documentation](http://codeception.com/docs/04-AcceptanceTests) to use simple assertions.

Useful methods:

* `$I->waitForElement('.cssClass');`
* `$I->seeElement('.cssClass');`
* `$I->click('.cssClass');`
* `$I->fillField('.cssClass');`

### Use Page Pattern

Pages are located in Page files.
For example: `tests/acceptance/_pages/HomePage.php`

The idea is to use always a Page method in Cest files.
You never have to write tests directly in Cest files.

A Page object have always the same 2 methods:

* `MyPage::moveTo`: click (or fill fields) to go to your page
* `MyPage::amOn`: check if you are on the good page


### Add you own patterns

You can add your own pattern in `tests/acceptance/_boostrap.php`.

Example with an Action Pattern: `\Codeception\Util\Autoload::registerSuffix('Action', __DIR__.DIRECTORY_SEPARATOR.'_actions');`


### 

## License

[GNU General Public License, version 3 (GPLv3)](./LICENCE)

## Developers

Here are people responsible for this project:

* Frédéric Martinez: [FredericMartinez (Github)](https://github.com/FredericMartinez), [@FredMartinez (Twitter)](https://twitter.com/FredMartinez)

# Frontend tests on Magento with Codeception

## Introduction 

The tests located in the tests directory work with a default Magento CE installation with sample data installed.
The idea is that if you have a custom project you will duplicate those tests in a separate directory and make the necessary adjustments so that the tests pass with your custom theme, extensions and custom modifications.

If you develop new generic tests, please contribute them back to this project by either coming to a Magento Hackathon and requesting write access to this repository or by forking it and submitting a pull request.

## 2 Repositories

1 repository for common Codeception configuration witch not depend on Magento version.
1 repository for each Magento version (here is 1.9.1.1)

## Usage

* Install [NodeJS](INSTALL_NODEJS.md)
* Install [PhantomJS](INSTALL_PHANTOMJS.md)
* Run PhantomJS `phantomjs --webdriver=4444 &`
* Configure your [`composer.json` file](CONFIGURE_COMPOSER.md)
* Install Magento 1.9.1.1
* Install Sample data
* Run tests `vendor/bin/codecept --debug`

For each test you run, Codeception get `data/dump.sql` and restore it above your current local DB.


## License

[GNU General Public License, version 3 (GPLv3)](./LICENCE)

## Developers

Here are people responsible for this project:

* Pierre Martin: [real34 (Github)](https://github.com/real34), [@pierremartin (Twitter)](https://twitter.com/pierremartin)

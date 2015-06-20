# codeception-magento-1.9.1.1

## Installation

0/ Install Composer

1/ Install NodeJS

2/ Install PhantomJS

3/ Run PhantomJS

```
phantomjs --webdriver=4444 &
```

4/ Create `composer.json` :

```
{
    "repositories": [
        {
            "type": "vcs",
            "url":  "git@github.com:PH2M/codeception-magento-1.9.1.1.git"
        },
        {
            "type": "vcs",
            "url":  "git@github.com:PH2M/codeception-magento.git"
        }
    ],

    "require": {
        "PH2M/codeception-magento": "dev-master",
        "PH2M/codeception-magento-1.9.1.1": "dev-master"
    },
	
    "extra":{
        "magento-root-dir": "htdocs/"
    }
}

```


5/ Run composer install
```
composer install
```

6/ Configure codeception

```
cp tests/acceptance.suite.yml.template tests/acceptance.suite.xml
cp tests/acceptance/AcceptanceTester.php.template tests/acceptance/AcceptanceTester.php
cp tests/_support/AcceptanceHelper.php.template tests/_support/AcceptanceHelper.php
```

7/ Set base URL in `tests/acceptance.suite.yml.template`

# Utilisation

Run Codeception tests :

```
vendor/bin/codecept --debug
```
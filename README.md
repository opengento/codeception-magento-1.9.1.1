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
$ composer install
```

6/ Run Codeception tests

```
vendor/bin/codecept --debug
```
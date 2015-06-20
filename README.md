# codeception-magento-1.9.1.1


## How to use
```
$ nano composer.json
```

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
```
$ composer install
```
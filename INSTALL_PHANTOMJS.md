# PhantomJS installation

We could install PhantomJS by your own (ie: Follow official website instructions http://phantomjs.org/).

But we hightly recommand to use this script:
```
https://gist.github.com/talpa/16db1b8cfd3148364e19
```

Note:

* Edit this script if you haven't a 64 bits OS
* You can check another package on https://bitbucket.org/ariya/phantomjs/downloads/

Verification:

```
phantomjs -v
```

# Usage

You have to run PhantomJS on 4444 port:

```
phantomjs --webdriver=4444 &
```

You will get a message like that:

```
PhantomJS is launching GhostDriver...
[INFO  - 2015-06-27T17:15:49.575Z] GhostDriver - Main - running on port 4444
```
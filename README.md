This is a very basic tool for using the Offwave scanner

Install
=======

0. Clone project in your directory of choice

    git clone https://github.com/octopuce/offwave-scan ~/tmp/offwave-scan

1. Install the offwave library dependancy with git

    cd ~/tmp/offwave-scan
	git submodule init
	git submodule update

2. Add the path to check in config.php, one array line per path to check
   cp config.php.default config.php
   find /var/www -type d -not -iname "\.*" -type d -maxdepth 2 -mindepth 1 -exec echo "\"{}\"," >> config.php \;

OR

run the `generator.sh` script and answer the questions:
* What PATH do you want to scan ? (ex: /var/www/):
* minimum depth for the scan? (ex: 0)
* maximum depth for the scan? (ex: 3)

3. Launch `scan.php` :

```php
php scan.php
```

OR something like that:

```bash
php scan.php > offwave-log.txt
cat offwave-log.txt |grep -iE "wordpress|joomla|drupal|spip|phpmyadmin|phpbb"
```


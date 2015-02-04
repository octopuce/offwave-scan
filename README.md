Install
=======

1. Install offwave dependancy
	git submodule init
	git submodule update

2. Edit config.php
	One array line per path to check

OR

run the `generator.sh` script and answer the questions:
* What PATH do you want to scan ? (ex: /var/www/):
* minimum depth for the scan? (ex: 0)
* maximum depth for the scan? (ex: 3)

3. After generator.sh stop, you can launch `scan.php` :

```php
php scan.php
```

OR something like that:

```bash
php scan.php > offwave-log.txt
cat offwave-log.txt |grep -iE "wordpress|joomla|drupal|spip|phpmyadmin|phpbb"
```
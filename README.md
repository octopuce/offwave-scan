This is a very basic tool for using the Offwave scanner

Install
=======

# Clone project in your directory of choice

```bash
git clone https://github.com/octopuce/offwave-scan ~/tmp/offwave-scan
```

#  Install the offwave library dependancy with git

```bash
cd ~/tmp/offwave-scan
git submodule init
git submodule update
```

# Add the path to check in config.php, one array line per path to check

```bash
cp config.php.sample config.php
find /var/www -type d -maxdepth 3 -mindepth 1 -exec echo "\"{}\"," >> config.php \;
```

OR

run the `generator.sh` script and answer the questions:
* What PATH do you want to scan ? (ex: /var/www/):
* minimum depth for the scan? (ex: 0)
* maximum depth for the scan? (ex: 3)

# Launch `scan.php` :

```php
php scan.php
```

OR something like that:

```bash
php scan.php > offwave-log.txt
```

And

```
cat offwave-log.txt |grep -iE "wordpress|joomla|drupal|spip|phpmyadmin|phpbb"
```

or

```
cat offwave-log.txt |grep -v ";;;"
```

read -p "What PATH do you want to scan ? (ex: /var/www/): " WD
read -p "minimum depth for the scan? (ex: 1) " MinD
read -p "maximum depth for the scan? (ex: 3) " MaxD

echo $WD;
echo '<?php $pathList = array(' > config.php;
/usr/bin/find $WD -maxdepth $MinD -maxdepth $MaxD -not -iname "\.*" -type d  -exec echo "\"{}\"," >> config.php \; 

echo ');' >> config.php

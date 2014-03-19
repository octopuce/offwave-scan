if [ -z $1 ] ; then
    echo "[!] Error : missing search path";
    exit 1;
fi;
WD=`realpath $1`;
echo $WD;
echo '<?php $pathList = array(' > config.php;
/usr/bin/find $WD -not -iname "\.*" -type d -maxdepth 1 -exec echo "\"{}\"," >> config.php \; 

echo ');' >> config.php

<?php

set_include_path(".:./offwave/lib:" . get_include_path());
if (!is_file(__DIR__ . "/config.php")) {
    die("missing config.php file!");
}

include("config.php");

function __autoload($className) {
    $ds = DIRECTORY_SEPARATOR;
    $className = strtr($className, '_', $ds);
    $paths = explode(PATH_SEPARATOR, get_include_path());
    foreach ($paths as $dir) {
        $file = "{$dir}{$ds}{$className}.php";
        if (is_readable($file)) {
            require_once $file;
            return;
        }
    }
    throw new Exception("Sorry, {$className} is nowhere to be found in ".get_include_path());
}

$Scanner = new Offwave_Scanner();

foreach ($pathList as $path) {

    $result = $Scanner->scan($path);
    if (isset($result[$path]) && count($result[$path])) {
        foreach($result[$path] as $webappData){
            echo "{$path};{$webappData["application"]};{$webappData["version"]};\n";
        }
    } else {
        echo "{$path};;;\n";
    }
}



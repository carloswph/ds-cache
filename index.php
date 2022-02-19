<?php
error_reporting(-1);

require __DIR__ . '/vendor/autoload.php';

use Ds\Cache\Cache;
use Ds\Cache\Enum;

$rt = new Cache(Enum::Vector);
var_dump($rt);
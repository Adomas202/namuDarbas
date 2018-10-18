<?php
require_once __DIR__ . '/vendor/autoload.php';

use Nfq\Akademija\Not_Typed;
use Nfq\Akademija\Soft;
use Nfq\Akademija\Strict;

echo "calculateHomeWorkSum: ".calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;

echo "Nfq\Akademija\Not_Typed\calculateHomeWorkSum:".Not_Typed\calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;

echo "Nfq\Akademija\Soft\calculateHomeWorkSum:".Soft\calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;

echo "Nfq\Akademija\Strict\calculateHomeWorkSum:".Strict\calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;
?>
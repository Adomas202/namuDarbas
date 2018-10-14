<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
require_once __DIR__ . '/vendor/autoload.php';

echo "calculateHomeWorkSum: ".calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;

echo "</br>Nfq\Akademija\Not_Typed\calculateHomeWorkSum: ".Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;

echo "</br>Nfq\Akademija\Soft\calculateHomeWorkSum: ".Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;

echo "</br>Nfq\Akademija\Strict\calculateHomeWorkSum: ".Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;
?>
</body>
</html>
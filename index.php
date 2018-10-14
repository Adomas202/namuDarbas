<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include './src/functions.php';
include './src/functions_strict.php';

echo calculateHomeWorkSum(3, 4, '1'); #po root namespace;
echo "<br>";
echo Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3, 2.2, '1'); #po Nfq\Akademija\Not_Typed namespace;
echo "<br>";
echo Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1'); #po Nfq\Akademija\Soft namespace;
echo "<br>";
echo Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1'); #po Nfq\Akademija\Strict namespace su declare(strict_types=1) direktyva;
?>
</body>
</html>
<?php
declare(strict_types=1);

namespace Nfq\Akademija\Strict {

    function calculateHomeWorkSum(...$numbers)
    {
        return calculateHomeWorkSumCall(...$numbers);
    }

    function calculateHomeWorkSumCall(int ...$numbers): int
    {
        return array_sum($numbers);
    }
}
<?php

namespace mespinosaz\Algorithms\DynamicConnectivity\Helper;

use mespinosaz\Algorithms\DynamicConnectivity\ConnectivityAlgorithmInterface;

class BulkConnector
{
    public function connect(ConnectivityAlgorithmInterface $algorithm, $string)
    {
        $pairs = explode(' ', $string);

        foreach ($pairs as $pair) {
            list($p, $q) = explode('-', $pair);
            $algorithm->connect($p, $q);
        }
    }
}

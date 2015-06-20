<?php

namespace mespinosaz\Algorithms\DynamicConnectivity\Helper;

use mespinosaz\Algorithms\DynamicConnectivity\ConnectivityAlgorithmInterface;

class BulkConnector
{
    /**
     * @param ConnectivityAlgorithmInterface $algorithm
     * @param string $connections
     */
    public function connect(ConnectivityAlgorithmInterface $algorithm, $connections)
    {
        $pairs = explode(' ', $connections);

        foreach ($pairs as $pair) {
            list($p, $q) = explode('-', $pair);
            $algorithm->connect($p, $q);
        }
    }
}

<?php

namespace mespinosaz\Algorithms\DynamicConnectivity;

interface ConnectivityAlgorithmInterface
{
    /**
     * @param int $p
     * @param int $q
     * @return bool
     */
    public function areConnected($p, $q);

    /**
     * @param int $p
     * @param int $q
     */
    public function connect($p, $q);
}

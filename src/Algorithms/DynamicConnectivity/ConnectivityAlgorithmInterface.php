<?php

namespace mespinosaz\Algorithms\DynamicConnectivity;

interface ConnectivityAlgorithmInterface
{
    public function areConnected($p, $q);
    public function connect($p, $q);
}

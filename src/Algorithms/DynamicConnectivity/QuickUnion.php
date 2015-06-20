<?php

namespace mespinosaz\Algorithms\DynamicConnectivity;

class QuickUnion extends AbstractConnectivityAlgorithm implements ConnectivityAlgorithmInterface
{
    protected function obtainRoot($p)
    {
        while ($p != $this->nodes[$p]) {
            $p = $this->nodes[$p];
        }

        return $p;
    }

    public function areConnected($p, $q)
    {
        return $this->obtainRoot($p) === $this->obtainRoot($q);
    }

    public function connect($p, $q)
    {
        $rootP = $this->obtainRoot($p);
        $rootQ = $this->obtainRoot($q);
        $this->nodes[$rootP] = $rootQ;
    }
}

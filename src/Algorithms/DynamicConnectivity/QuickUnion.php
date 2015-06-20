<?php

namespace mespinosaz\Algorithms\DynamicConnectivity;

class QuickUnion extends AbstractConnectivityAlgorithm implements ConnectivityAlgorithmInterface
{
    /**
     * @param int $p
     * @return int
     */
    protected function obtainRoot($p)
    {
        while ($p != $this->nodes[$p]) {
            $p = $this->nodes[$p];
        }

        return $p;
    }

    /**
     * {@inheritdoc}
     */
    public function areConnected($p, $q)
    {
        return $this->obtainRoot($p) === $this->obtainRoot($q);
    }

    /**
     * {@inheritdoc}
     */
    public function connect($p, $q)
    {
        $rootP = $this->obtainRoot($p);
        $rootQ = $this->obtainRoot($q);
        $this->nodes[$rootP] = $rootQ;
    }
}

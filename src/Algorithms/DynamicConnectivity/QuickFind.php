<?php

namespace mespinosaz\Algorithms\DynamicConnectivity;

class QuickFind extends AbstractConnectivityAlgorithm implements ConnectivityAlgorithmInterface
{
    public function areConnected($p, $q)
    {
        return $this->nodes[$p] == $this->nodes[$q];
    }

    public function connect($p, $q)
    {
        $pid = $this->nodes[$p];
        $qid = $this->nodes[$q];

        for ($position = 0; $position < count($this->nodes); $position++) {
            if ($this->nodes[$position] == $pid) {
                $this->nodes[$position] = $qid;
            }
        }
    }
}

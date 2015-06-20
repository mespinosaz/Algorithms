<?php

namespace mespinosaz\Algorithms\DynamicConnectivity;

class WeightedQuickUnion extends QuickUnion
{
    private $nodeSize;

    public function __construct($numberOfNodes)
    {
        parent::__construct($numberOfNodes);
        $this->nodeSize = array();
        for ($position = 0; $position < $numberOfNodes; $position++) {
            $this->nodeSize[$position] = 1;
        }
    }

    public function connect($p, $q)
    {
        $rootP = $this->obtainRoot($p);
        $rootQ = $this->obtainRoot($q);

        if ($rootP == $rootQ) {
            return;
        }

        if ($this->nodeSize[$rootP] < $this->nodeSize[$rootQ]) {
            $this->nodes[$rootP] = $rootQ;
            $this->nodeSize[$rootQ] += $this->nodeSize[$rootP];
        } else {
            $this->nodes[$rootQ] = $rootP;
            $this->nodeSize[$rootP] += $this->nodeSize[$rootQ];
        }
    }
}

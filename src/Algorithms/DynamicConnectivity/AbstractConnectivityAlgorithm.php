<?php

namespace mespinosaz\Algorithms\DynamicConnectivity;

abstract class AbstractConnectivityAlgorithm
{
    /**
     * @var array
     */
    protected $nodes;

    /**
     * @param int $numberOfNodes
     */
    public function __construct($numberOfNodes)
    {
        $this->nodes = array();
        for ($position = 0; $position < $numberOfNodes; $position++) {
            $this->nodes[$position] = $position;
        }
    }

    public function showState()
    {
        foreach ($this->nodes as $id) {
            echo $id . ' ';
        }

        echo "\n";
    }
}

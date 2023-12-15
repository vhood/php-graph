<?php

namespace Vhood\Graph;

interface AdjacencyListArray
{
    /**
     * @return AdjacencyListNode[]
     */
    public function nodes(): array;
}

<?php

namespace Vhood\Graph;

interface AdjacencyListNodeFields
{
    /**
     * @return AdjacencyListNodeField[]
     */
    public function fields(): array;
}

<?php

namespace Vhood\Graph;

interface LoadedFields
{
    /**
     * @return AdjacencyListNodeField[]|MaterializedPathNodeField[]|NestedSetNodeField[]|HashTableNodeField[]
     */
    public function fields(): array;
}

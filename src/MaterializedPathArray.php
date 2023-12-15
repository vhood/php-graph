<?php

namespace Vhood\Graph;

interface MaterializedPathArray
{
    /**
     * @return MaterializedPathNode[]
     */
    public function nodes(): array;
}

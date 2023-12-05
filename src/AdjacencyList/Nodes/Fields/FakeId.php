<?php

declare(strict_types=1);

namespace Vhood\Graph\AdjacencyList\Nodes\Fields;

class FakeId implements Id
{
    /**
     * @return array<string,int>
     */
    public function asArray(): array
    {
        return ['id' => 1];
    }
}

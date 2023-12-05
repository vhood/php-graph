<?php

declare(strict_types=1);

namespace Vhood\Graph\AdjacencyList\Nodes\Fields;

class FakeParentId implements ParentId
{
    /**
     * @return array<string,int>
     */
    public function asArray(): array
    {
        return ['parent_id' => 0];
    }
}

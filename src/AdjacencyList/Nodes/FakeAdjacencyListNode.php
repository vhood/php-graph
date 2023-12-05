<?php

declare(strict_types=1);

namespace Vhood\Graph\AdjacencyList\Nodes;

use Vhood\Graph\AdjacencyListNode;

class FakeAdjacencyListNode implements AdjacencyListNode
{
    /**
     * @return array<string,mixed>
     */
    public function asArray(): array
    {
        return [
            'id' => 1,
            'parent_id' => 0,
            'key' => 'value',
        ];
    }
}

<?php

declare(strict_types=1);

namespace Vhood\Graph\AdjacencyList;

use Vhood\Graph\AdjacencyList;
use Vhood\Graph\AdjacencyListArray;
use Vhood\Graph\AdjacencyListNode;

class FakeAdjacencyList implements AdjacencyList
{
    /**
     * @param AdjacencyListArray $array
     * @return static
     */
    public function fromArray(AdjacencyListArray $array): static
    {
        return $this;
    }

    /**
     * @param AdjacencyListNode ...$nodes
     * @return static
     */
    public function withAddedNodes(AdjacencyListNode ...$nodes): static
    {
        return $this;
    }

    /**
     * @param AdjacencyListNode ...$nodes
     * @return static
     */
    public function withRemovedNodes(AdjacencyListNode ...$nodes): static
    {
        return $this;
    }

    /**
     * @return array<int,array<string,mixed>>
     */
    public function asArray(): array
    {
        return [
            [
                'id' => 1,
                'parent_id' => 0,
                'field' => 'value',
            ],
            [
                'id' => 2,
                'parent_id' => 1,
                'field' => 'value',
            ],
        ];
    }
}

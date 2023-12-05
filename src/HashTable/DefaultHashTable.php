<?php

declare(strict_types=1);

namespace Vhood\Graph\HashTable;

use Vhood\Graph\HashTable;
use Vhood\Graph\HashTableNode;

final class DefaultHashTable implements HashTable
{
    /** @var HashTableNode[] */
    private readonly array $nodes;

    /**
     * @param HashTableNode ...$nodes
     */
    public function __construct(HashTableNode ...$nodes)
    {
        $this->nodes = $nodes;
    }

    /**
     * @return array<int,array<int|string,mixed>>
     */
    public function asArray(): array
    {
        return array_map(fn(HashTableNode $node) => $node->asArray(), $this->nodes);
    }
}

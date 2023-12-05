<?php

declare(strict_types=1);

namespace Vhood\Graph\HashTable\Nodes\Fields;

use Vhood\Graph\HashTableNode;

final class DefaultChildren implements Children
{
    /** @var HashTableNode[] */
    private readonly array $children;

    /**
     * @param string $key
     * @param HashTableNode ...$children
     */
    public function __construct(
        private readonly string $key,
        HashTableNode ...$children
    ) {
        $this->children = $children;
    }

    /**
     * @return array<string,array<int|string,mixed>>
     */
    public function asArray(): array
    {
        return [$this->key => array_map(fn(HashTableNode $node) => $node->asArray(), $this->children)];
    }
}

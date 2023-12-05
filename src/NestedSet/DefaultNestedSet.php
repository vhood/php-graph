<?php

declare(strict_types=1);

namespace Vhood\Graph\NestedSet;

use Vhood\Graph\NestedSet;
use Vhood\Graph\NestedSetNode;

final class DefaultNestedSet implements NestedSet
{
    /** @var NestedSetNode[] */
    private readonly array $nodes;

    /**
     * @param NestedSetNode ...$nodes
     */
    public function __construct(NestedSetNode ...$nodes)
    {
        $this->nodes = $nodes;
    }

    /**
     * @return array<int,array<int|string,mixed>>
     */
    public function asArray(): array
    {
        return array_map(fn(NestedSetNode $node) => $node->asArray(), $this->nodes);
    }
}

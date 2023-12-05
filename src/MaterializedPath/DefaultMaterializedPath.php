<?php

declare(strict_types=1);

namespace Vhood\Graph\MaterializedPath;

use Vhood\Graph\MaterializedPath;
use Vhood\Graph\MaterializedPathNode;

final class DefaultMaterializedPath implements MaterializedPath
{
    /** @var MaterializedPathNode[] */
    private readonly array $nodes;

    /**
     * @param MaterializedPathNode ...$nodes
     */
    public function __construct(MaterializedPathNode ...$nodes)
    {
        $this->nodes = $nodes;
    }

    /**
     * @return array<int,array<int|string,mixed>>
     */
    public function asArray(): array
    {
        return array_map(fn(MaterializedPathNode $node) => $node->asArray(), $this->nodes);
    }
}

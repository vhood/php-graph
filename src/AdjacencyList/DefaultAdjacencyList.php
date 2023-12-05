<?php

declare(strict_types=1);

namespace Vhood\Graph\AdjacencyList;

use Vhood\Graph\AdjacencyList;
use Vhood\Graph\AdjacencyList\Exceptions\NodeNotFoundException;
use Vhood\Graph\AdjacencyListNode;

final class DefaultAdjacencyList implements AdjacencyList
{
    /** @var AdjacencyListNode[] */
    private readonly array $nodes;

    /**
     * @param AdjacencyListNode ...$nodes
     */
    public function __construct(AdjacencyListNode ...$nodes)
    {
        $this->nodes = $nodes;
    }

    /**
     * @param AdjacencyListNode ...$nodes
     * @return static
     */
    public function withAddedNodes(AdjacencyListNode ...$nodes): static
    {
        return new static(...array_merge($this->nodes, $nodes));
    }

    /**
     * @param AdjacencyListNode ...$nodes
     * @return static
     *
     * @throws NodeNotFoundException
     */
    public function withRemovedNodes(AdjacencyListNode ...$nodes): static
    {
        $indexes = $this->nodeIndexes(...$nodes);

        return new static(
            ...array_filter($this->nodes, fn(string $key) => !in_array((int)$key, $indexes, true), ARRAY_FILTER_USE_KEY)
        );
    }

    /**
     * @return array<int,array<int|string,mixed>>
     */
    public function asArray(): array
    {
        return array_map(fn(AdjacencyListNode $node) => $node->asArray(), $this->nodes);
    }

    /**
     * @param AdjacencyListNode ...$nodes
     * @return array<int>
     *
     * @throws NodeNotFoundException
     */
    private function nodeIndexes(AdjacencyListNode ...$nodes): array
    {
        return array_map(
            function(AdjacencyListNode $node) {
                if ($index = array_search($node, $this->nodes, false) === false) {
                    throw new NodeNotFoundException();
                }

                return (int)$index;
            },
            $nodes
        );
    }
}

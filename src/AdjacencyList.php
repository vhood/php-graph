<?php

declare(strict_types=1);

namespace Vhood\Graph;

interface AdjacencyList extends AsArray
{
    public function withAddedNodes(AdjacencyListNode ...$nodes): static;

    public function withRemovedNodes(AdjacencyListNode ...$nodes): static;
}

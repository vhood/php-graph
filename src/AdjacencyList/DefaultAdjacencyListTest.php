<?php

declare(strict_types=1);

namespace Vhood\Graph\AdjacencyList;

use PHPUnit\Framework\TestCase;
use Vhood\Graph\AdjacencyList\Nodes\FakeAdjacencyListNode;

class DefaultAdjacencyListTest extends TestCase
{
    public function testConversionToArray(): void
    {
        $this->assertSame(
            [['id' => 1, 'parent_id' => 0, 'key' => 'value']],
            (new DefaultAdjacencyList(new FakeAdjacencyListNode()))->asArray(),
        );
    }

    public function testNodesAdding(): void
    {
        $this->assertSame(
            [['id' => 1, 'parent_id' => 0, 'key' => 'value']],
            (new DefaultAdjacencyList())->withAddedNodes(new FakeAdjacencyListNode())->asArray(),
        );
    }

    public function testNodesRemoving(): void
    {
        $this->assertSame(
            [],
            (new DefaultAdjacencyList(new FakeAdjacencyListNode()))->withRemovedNodes(new FakeAdjacencyListNode())->asArray(),
        );
    }
}

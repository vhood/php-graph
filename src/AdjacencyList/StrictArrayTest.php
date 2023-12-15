<?php

declare(strict_types=1);

namespace Vhood\Graph\AdjacencyList;

use PHPUnit\Framework\TestCase;
use Vhood\Graph\AdjacencyList\Nodes\DefaultAdjacencyListNode;
use Vhood\Graph\AdjacencyList\Nodes\Fields\DefaultId;
use Vhood\Graph\AdjacencyList\Nodes\Fields\DefaultParentId;
use Vhood\Graph\DefaultField;

class StrictArrayTest extends TestCase
{
    public function testEmptyNodes(): void
    {
        $this->assertSame(
            [],
            (new StrictArray([], 'id', 'parent_id'))->nodes()
        );
    }

    public function testNodesCreation(): void
    {
        $this->assertEquals(
            [new DefaultAdjacencyListNode(new DefaultId('id', 1), new DefaultParentId('parent_id', 0), new DefaultField('key', 'value'))],
            (new StrictArray([['id' => 1, 'parent_id' => 0, 'key' => 'value']], 'id', 'parent_id'))->nodes()
        );
    }
}

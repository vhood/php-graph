<?php

declare(strict_types=1);

namespace Vhood\Graph\AdjacencyList;

use PHPUnit\Framework\TestCase;
use Vhood\Graph\AdjacencyList\Nodes\DefaultAdjacencyListNode;
use Vhood\Graph\AdjacencyList\Nodes\Fields\DefaultId;
use Vhood\Graph\AdjacencyList\Nodes\Fields\DefaultParentId;
use Vhood\Graph\DefaultField;

class StrictVerbalArrayTest extends TestCase
{
    public function testEmptyNodes(): void
    {
        $this->assertSame(
            [],
            (new StrictVerbalArray([], 'id', 'parent_id'))->nodes()
        );
    }

    public function testNodesCreation(): void
    {
        $this->assertEquals(
            [new DefaultAdjacencyListNode(new DefaultId('id', 'one'), new DefaultParentId('parent_id', ''), new DefaultField('key', 'value'))],
            (new StrictVerbalArray([['id' => 'one', 'parent_id' => '', 'key' => 'value']], 'id', 'parent_id'))->nodes()
        );
    }
}

<?php

declare(strict_types=1);

namespace Vhood\Graph\AdjacencyList\Nodes;

use PHPUnit\Framework\TestCase;
use Vhood\Graph\AdjacencyList\Nodes\Fields\FakeId;
use Vhood\Graph\AdjacencyList\Nodes\Fields\FakeParentId;
use Vhood\Graph\FakeField;

final class DefaultAdjacencyListNodeTest extends TestCase
{
    public function testConversionToArray(): void
    {
        $this->assertSame(
            ['id' => 1, 'parent_id' => 0, 'key' => 'value'],
            (new DefaultAdjacencyListNode(new FakeId(), new FakeParentId(), new FakeField()))->asArray()
        );
    }
}

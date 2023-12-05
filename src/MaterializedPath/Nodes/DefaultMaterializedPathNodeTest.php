<?php

declare(strict_types=1);

namespace Vhood\Graph\MaterializedPath\Nodes;

use PHPUnit\Framework\TestCase;
use Vhood\Graph\FakeField;
use Vhood\Graph\MaterializedPath\Nodes\Fields\FakeId;
use Vhood\Graph\MaterializedPath\Nodes\Fields\FakePath;

class DefaultMaterializedPathNodeTest extends TestCase
{
    public function testConversionToArray(): void
    {
        $this->assertSame(
            ['id' => 'one', 'path' => '/one/', 'key' => 'value'],
            (new DefaultMaterializedPathNode(new FakeId(), new FakePath(), new FakeField()))->asArray()
        );
    }
}

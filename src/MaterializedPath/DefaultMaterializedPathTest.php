<?php

declare(strict_types=1);

namespace Vhood\Graph\MaterializedPath;

use PHPUnit\Framework\TestCase;
use Vhood\Graph\MaterializedPath\Nodes\FakeMaterializedPathNode;

class DefaultMaterializedPathTest extends TestCase
{
    public function testConversionToArray(): void
    {
        $this->assertSame(
            [['id' => 'one', 'path' => '/one/', 'key' => 'value']],
            (new DefaultMaterializedPath(new FakeMaterializedPathNode()))->asArray(),
        );
    }
}

<?php

declare(strict_types=1);

namespace Vhood\Graph\NestedSet;

use PHPUnit\Framework\TestCase;
use Vhood\Graph\NestedSet\Nodes\FakeNestedSetNode;

class DefaultNestedSetTest extends TestCase
{
    public function testConversionToArray(): void
    {
        $this->assertSame(
            [['lft' => 1, 'rgt' => 2, 'key' => 'value']],
            (new DefaultNestedSet(new FakeNestedSetNode()))->asArray(),
        );
    }
}

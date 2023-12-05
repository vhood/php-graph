<?php

declare(strict_types=1);

namespace Vhood\Graph\NestedSet\Nodes;

use PHPUnit\Framework\TestCase;
use Vhood\Graph\FakeField;
use Vhood\Graph\NestedSet\Nodes\Fields\FakeLeft;
use Vhood\Graph\NestedSet\Nodes\Fields\FakeRight;

class DefaultNestedSetNodeTest extends TestCase
{
    public function testConversionToArray(): void
    {
        $this->assertSame(
            ['lft' => 1, 'rgt' => 2, 'key' => 'value'],
            (new DefaultNestedSetNode(new FakeLeft(), new FakeRight(), new FakeField()))->asArray()
        );
    }
}

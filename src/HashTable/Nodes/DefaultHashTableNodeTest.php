<?php

declare(strict_types=1);

namespace Vhood\Graph\HashTable\Nodes;

use PHPUnit\Framework\TestCase;
use Vhood\Graph\FakeField;
use Vhood\Graph\HashTable\Nodes\Fields\FakeChildren;

class DefaultHashTableNodeTest extends TestCase
{
    public function testConversionToArray(): void
    {
        $this->assertSame(
            ['key' => 'value', 'children' => []],
            (new DefaultHashTableNode(new FakeChildren(), new FakeField()))->asArray()
        );
    }
}

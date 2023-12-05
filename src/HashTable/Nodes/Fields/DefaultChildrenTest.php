<?php

declare(strict_types=1);

namespace Vhood\Graph\HashTable\Nodes\Fields;

use PHPUnit\Framework\TestCase;
use Vhood\Graph\HashTable\Nodes\FakeHashTableNode;

class DefaultChildrenTest extends TestCase
{
    public function testConversionToArray(): void
    {
        $this->assertSame(
            ['children' => [['id' => 1, 'children' => [['id' => 2, 'children' => []]]]]],
            (new DefaultChildren('children', new FakeHashTableNode()))->asArray()
        );
    }

    public function testNoChildren(): void
    {
        $this->assertSame(
            ['children' => []],
            (new DefaultChildren('children'))->asArray()
        );
    }
}

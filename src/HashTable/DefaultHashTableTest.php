<?php

declare(strict_types=1);

namespace Vhood\Graph\HashTable;

use PHPUnit\Framework\TestCase;
use Vhood\Graph\HashTable\Nodes\FakeHashTableNode;

class DefaultHashTableTest extends TestCase
{
    public function testConversionToArray(): void
    {
        $this->assertSame(
            [['id' => 1, 'children' => [['id' => 2, 'children' => []]]]],
            (new DefaultHashTable(new FakeHashTableNode()))->asArray(),
        );
    }
}

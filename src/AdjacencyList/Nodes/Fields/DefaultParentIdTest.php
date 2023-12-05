<?php

declare(strict_types=1);

namespace Vhood\Graph\AdjacencyList\Nodes\Fields;

use PHPUnit\Framework\TestCase;

final class DefaultParentIdTest extends TestCase
{
    public function testConversionToArray(): void
    {
        $this->assertSame(
            ['key' => 'value'],
            (new DefaultParentId('key', 'value'))->asArray()
        );
    }
}

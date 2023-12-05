<?php

declare(strict_types=1);

namespace Vhood\Graph\AdjacencyList\Nodes\Fields;

use PHPUnit\Framework\TestCase;

final class DefaultIdTest extends TestCase
{
    public function testConversionToArray(): void
    {
        $this->assertSame(
            ['key' => 'value'],
            (new DefaultId('key', 'value'))->asArray()
        );
    }
}

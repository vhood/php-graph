<?php

declare(strict_types=1);

namespace Vhood\Graph\MaterializedPath\Nodes\Fields;

use PHPUnit\Framework\TestCase;

class DefaultIdTest extends TestCase
{
    public function testConversionToArray(): void
    {
        $this->assertSame(
            ['key' => 'value'],
            (new DefaultId('key', 'value'))->asArray()
        );
    }
}

<?php

declare(strict_types=1);

namespace Vhood\Graph\MaterializedPath\Nodes\Fields;

use PHPUnit\Framework\TestCase;

class DefaultPathTest extends TestCase
{
    public function testConversionToArray(): void
    {
        $this->assertSame(
            ['key' => 'value'],
            (new DefaultPath('key', 'value'))->asArray()
        );
    }
}

<?php

declare(strict_types=1);

namespace Vhood\Graph\NestedSet\Nodes\Fields;

use PHPUnit\Framework\TestCase;

class DefaultRightTest extends TestCase
{
    public function testConversionToArray(): void
    {
        $this->assertSame(
            ['rgt' => 2],
            (new DefaultRight('rgt', 2))->asArray()
        );
    }
}

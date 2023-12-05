<?php

declare(strict_types=1);

namespace Vhood\Graph\NestedSet\Nodes\Fields;

use PHPUnit\Framework\TestCase;

class DefaultLeftTest extends TestCase
{
    public function testConversionToArray(): void
    {
        $this->assertSame(
            ['lft' => 1],
            (new DefaultLeft('lft', 1))->asArray()
        );
    }
}

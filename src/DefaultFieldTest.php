<?php

declare(strict_types=1);

namespace Vhood\Graph;

use PHPUnit\Framework\TestCase;

class DefaultFieldTest extends TestCase
{
    public function testConversionToArray(): void
    {
        $this->assertSame(
            ['key' => 'value'],
            (new DefaultField('key', 'value'))->asArray()
        );
    }
}

<?php

declare(strict_types=1);

namespace Vhood\Graph;

use PHPUnit\Framework\TestCase;

class ArrayFieldsTest extends TestCase
{
    public function testEmptyFields(): void
    {
        $this->assertSame(
            [],
            (new ArrayFields([]))->fields()
        );
    }

    public function testFieldsCreation(): void
    {
        $this->assertEquals(
            [new DefaultField('key', 'value')],
            (new ArrayFields(['key' => 'value']))->fields()
        );
    }
}

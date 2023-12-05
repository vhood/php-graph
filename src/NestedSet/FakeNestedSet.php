<?php

declare(strict_types=1);

namespace Vhood\Graph\NestedSet;

use Vhood\Graph\NestedSet;

class FakeNestedSet implements NestedSet
{
    /**
     * @return array<int,array<string,mixed>>
     */
    public function asArray(): array
    {
        return [
            [
                'lft' => 1,
                'rgt' => 4,
                'key' => 'value 1',
            ],
            [
                'lft' => 5,
                'rgt' => 6,
                'key' => 'value 2',
            ],
            [
                'lft' => 2,
                'rgt' => 3,
                'key' => 'value 3',
            ],
        ];
    }
}

<?php

declare(strict_types=1);

namespace Vhood\Graph\HashTable;

use Vhood\Graph\HashTable;

class FakeHashTable implements HashTable
{
    /**
     * @return array<int,array<string,mixed>>
     */
    public function asArray(): array
    {
        return [
            [
                'id' => 1,
                'children' => [
                    [
                        'id' => 3,
                        'children' => [],
                    ],
                ],
            ],
            [
                'id' => 2,
                'children' => [],
            ],
        ];
    }
}

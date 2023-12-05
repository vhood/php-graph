<?php

declare(strict_types=1);

namespace Vhood\Graph\HashTable\Nodes;

use Vhood\Graph\HashTableNode;

class FakeHashTableNode implements HashTableNode
{
    /**
     * @return array<string,mixed>
     */
    public function asArray(): array
    {
        return [
            'id' => 1,
            'children' => [
                [
                    'id' => 2,
                    'children' => [],
                ],
            ],
        ];
    }
}

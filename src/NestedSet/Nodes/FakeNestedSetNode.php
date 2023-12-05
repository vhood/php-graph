<?php

declare(strict_types=1);

namespace Vhood\Graph\NestedSet\Nodes;

use Vhood\Graph\NestedSetNode;

class FakeNestedSetNode implements NestedSetNode
{
    /**
     * @return array<string,mixed>
     */
    public function asArray(): array
    {
        return [
            'lft' => 1,
            'rgt' => 2,
            'key' => 'value',
        ];
    }
}

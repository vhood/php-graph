<?php

declare(strict_types=1);

namespace Vhood\Graph\MaterializedPath\Nodes;

use Vhood\Graph\MaterializedPathNode;

class FakeMaterializedPathNode implements MaterializedPathNode
{
    /**
     * @return array<string,mixed>
     */
    public function asArray(): array
    {
        return [
            'id' => 'one',
            'path' => '/one/',
            'key' => 'value',
        ];
    }
}

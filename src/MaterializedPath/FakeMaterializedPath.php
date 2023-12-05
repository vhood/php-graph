<?php

declare(strict_types=1);

namespace Vhood\Graph\MaterializedPath;

use Vhood\Graph\MaterializedPath;

class FakeMaterializedPath implements MaterializedPath
{
    /**
     * @return array<int,array<string,mixed>>
     */
    public function asArray(): array
    {
        return [
            [
                'id' => 'one',
                'path' => '/one/',
            ],
            [
                'id' => 'two',
                'path' => '/two/',
            ],
            [
                'id' => 'three',
                'path' => '/one/three/',
            ],
        ];
    }
}

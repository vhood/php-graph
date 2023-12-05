<?php

declare(strict_types=1);

namespace Vhood\Graph\MaterializedPath\Nodes\Fields;

class FakeId implements Id
{
    /**
     * @return array<string,string>
     */
    public function asArray(): array
    {
        return ['id' => 'one'];
    }
}

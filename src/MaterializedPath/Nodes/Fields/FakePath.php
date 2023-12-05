<?php

declare(strict_types=1);

namespace Vhood\Graph\MaterializedPath\Nodes\Fields;

final class FakePath implements Path
{
    /**
     * @return array<string,string>
     */
    public function asArray(): array
    {
        return ['path' => '/one/'];
    }
}

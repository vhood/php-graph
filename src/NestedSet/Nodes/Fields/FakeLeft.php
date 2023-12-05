<?php

declare(strict_types=1);

namespace Vhood\Graph\NestedSet\Nodes\Fields;

class FakeLeft implements Left
{
    /**
     * @return array<string,int>
     */
    public function asArray(): array
    {
        return ['lft' => 1];
    }
}

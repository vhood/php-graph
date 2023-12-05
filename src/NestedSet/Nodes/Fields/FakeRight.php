<?php

declare(strict_types=1);

namespace Vhood\Graph\NestedSet\Nodes\Fields;

class FakeRight implements Right
{
    /**
     * @return array<string,int>
     */
    public function asArray(): array
    {
        return ['rgt' => 2];
    }
}

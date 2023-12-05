<?php

declare(strict_types=1);

namespace Vhood\Graph\HashTable\Nodes\Fields;

class FakeChildren implements Children
{
    /**
     * @return array<string,array<string,string>>
     */
    public function asArray(): array
    {
        return ['children' => []];
    }
}

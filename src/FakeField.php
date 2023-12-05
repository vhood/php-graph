<?php

declare(strict_types=1);

namespace Vhood\Graph;

class FakeField implements
    AdjacencyListNodeField,
    HashTableNodeField,
    MaterializedPathNodeField,
    NestedSetNodeField
{
    /**
     * @return array<string,string>
     */
    public function asArray(): array
    {
        return ['key' => 'value'];
    }
}

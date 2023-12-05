<?php

declare(strict_types=1);

namespace Vhood\Graph;

final class DefaultField implements
    AdjacencyListNodeField,
    HashTableNodeField,
    MaterializedPathNodeField,
    NestedSetNodeField
{
    /**
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function __construct(
        private readonly string $key,
        private readonly mixed $value
    ) {}

    /**
     * @return array<string,mixed>
     */
    public function asArray(): array
    {
        return [$this->key => $this->value];
    }
}

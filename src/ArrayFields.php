<?php

declare(strict_types=1);

namespace Vhood\Graph;

final class ArrayFields implements
    AdjacencyListNodeFields,
    HashTableNodeFields,
    MaterializedPathNodeFields,
    NestedSetNodeFields
{
    /**
     * @var DefaultField[]
     */
    private readonly array $collection;

    /**
     * @param array<string,string|float|int|bool|null> $fields
     */
    public function __construct(array $fields)
    {
        $collection = [];
        foreach ($fields as $key => $value) {
            $collection[] = new DefaultField($key, $value);
        }

        $this->collection = $collection;
    }

    /**
     * @return DefaultField[]
     */
    public function fields(): array
    {
        return $this->collection;
    }
}

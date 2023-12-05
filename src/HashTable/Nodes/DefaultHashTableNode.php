<?php

declare(strict_types=1);

namespace Vhood\Graph\HashTable\Nodes;

use Vhood\Graph\HashTable\Nodes\Fields\Children;
use Vhood\Graph\HashTableNode;
use Vhood\Graph\HashTableNodeField;

final class DefaultHashTableNode implements HashTableNode
{
    /** @var HashTableNodeField[] */
    private readonly array $fields;

    /**
     * @param Children $children
     * @param HashTableNodeField ...$fields
     */
    public function __construct(
        private readonly Children $children,
        HashTableNodeField ...$fields
    ) {
        $this->fields = $fields;
    }

    /**
     * @return array<string,mixed>
     */
    public function asArray(): array
    {
        return array_merge(
            array_reduce(
                array: $this->fields,
                callback: fn(array $result, HashTableNodeField $field) => array_merge($result, $field->asArray()),
                initial: [],
            ),
            $this->children->asArray(),
        );
    }
}

<?php

declare(strict_types=1);

namespace Vhood\Graph\AdjacencyList\Nodes;

use Vhood\Graph\AdjacencyList\Nodes\Fields\Id;
use Vhood\Graph\AdjacencyList\Nodes\Fields\ParentId;
use Vhood\Graph\AdjacencyListNode;
use Vhood\Graph\AdjacencyListNodeField;

final class DefaultAdjacencyListNode implements AdjacencyListNode
{
    /** @var AdjacencyListNodeField[] */
    private readonly array $fields;

    /**
     * @param Id $id
     * @param ParentId $parentId
     * @param AdjacencyListNodeField ...$fields
     */
    public function __construct(
        private readonly Id $id,
        private readonly ParentId $parentId,
        AdjacencyListNodeField ...$fields,
    ) {
        $this->fields = $fields;
    }

    /**
     * @return array<string,mixed>
     */
    public function asArray(): array
    {
        return array_reduce(
            callback: fn(array $result, AdjacencyListNodeField $field) => array_merge($result, $field->asArray()),
            array: $this->fields,
            initial: array_merge($this->id->asArray(), $this->parentId->asArray())
        );
    }
}

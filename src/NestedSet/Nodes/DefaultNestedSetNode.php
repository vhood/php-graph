<?php

declare(strict_types=1);

namespace Vhood\Graph\NestedSet\Nodes;

use Vhood\Graph\NestedSet\Nodes\Fields\Left;
use Vhood\Graph\NestedSet\Nodes\Fields\Right;
use Vhood\Graph\NestedSetNode;
use Vhood\Graph\NestedSetNodeField;

final class DefaultNestedSetNode implements NestedSetNode
{
    /** @var NestedSetNodeField[] */
    private array $fields;

    /**
     * @param Left $left
     * @param Right $right
     * @param NestedSetNodeField ...$fields
     */
    public function __construct(
        private readonly Left $left,
        private readonly Right $right,
        NestedSetNodeField ...$fields,
    ) {
        $this->fields = $fields;
    }

    /**
     * @return array<string,mixed>
     */
    public function asArray(): array
    {
        return array_reduce(
            callback: fn(array $result, NestedSetNodeField $field) => array_merge($result, $field->asArray()),
            array: $this->fields,
            initial: array_merge($this->left->asArray(), $this->right->asArray())
        );
    }
}

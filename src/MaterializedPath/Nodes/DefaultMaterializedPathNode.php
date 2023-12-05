<?php

declare(strict_types=1);

namespace Vhood\Graph\MaterializedPath\Nodes;

use Vhood\Graph\MaterializedPath\Nodes\Fields\Id;
use Vhood\Graph\MaterializedPath\Nodes\Fields\Path;
use Vhood\Graph\MaterializedPathNode;
use Vhood\Graph\MaterializedPathNodeField;

final class DefaultMaterializedPathNode implements MaterializedPathNode
{
    /** @var MaterializedPathNodeField[] */
    private readonly array $fields;

    /**
     * @param Id $id
     * @param Path $path
     * @param MaterializedPathNodeField ...$fields
     */
    public function __construct(
        private readonly Id $id,
        private readonly Path $path,
        MaterializedPathNodeField ...$fields,
    ) {
        $this->fields = $fields;
    }

    /**
     * @return array<string,mixed>
     */
    public function asArray(): array
    {
        return array_reduce(
            callback: fn(array $result, MaterializedPathNodeField $field) => array_merge($result, $field->asArray()),
            array: $this->fields,
            initial: array_merge($this->id->asArray(), $this->path->asArray())
        );
    }
}

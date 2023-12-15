<?php

declare(strict_types=1);

namespace Vhood\Graph\AdjacencyList;

use Vhood\Graph\AdjacencyList\Exceptions\FieldNotFoundException;
use Vhood\Graph\AdjacencyList\Nodes\DefaultAdjacencyListNode;
use Vhood\Graph\AdjacencyList\Nodes\Fields\DefaultId;
use Vhood\Graph\AdjacencyList\Nodes\Fields\DefaultParentId;
use Vhood\Graph\AdjacencyListArray;
use Vhood\Graph\AdjacencyListNode;
use Vhood\Graph\ArrayFields;

/**
 * use it if the array has numeric identifiers, otherwise use StrictVerbalArray
 */
final class StrictArray implements AdjacencyListArray
{
    /** @var DefaultAdjacencyListNode[] */
    private readonly array $nodes;

    /**
     * @param array<int,array<string,string|float|int|bool|null>> $array
     * @param string $idKey
     * @param string $parentIdKey
     * @return void
     *
     * @throws FieldNotFoundException
     */
    public function __construct(array $array, string $idKey, string $parentIdKey) {
        $nodes = [];

        foreach ($array as $node) {
            if (!array_key_exists($idKey, $node)) {
                throw new FieldNotFoundException('id');
            }

            if (!array_key_exists($parentIdKey, $node)) {
                throw new FieldNotFoundException('parent id');
            }

            $nodes[] = new DefaultAdjacencyListNode(
                new DefaultId($idKey, (int)$node[$idKey]),
                new DefaultParentId($parentIdKey, (int)$node[$parentIdKey]),
                ...(new ArrayFields(array_diff_key($node, array_flip([$idKey, $parentIdKey]))))->fields(),
            );
        }

        $this->nodes = $nodes;
    }

    /**
     * @return AdjacencyListNode[]
     */
    public function nodes(): array
    {
        return $this->nodes;
    }
}

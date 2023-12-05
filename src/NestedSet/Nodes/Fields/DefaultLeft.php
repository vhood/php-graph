<?php

declare(strict_types=1);

namespace Vhood\Graph\NestedSet\Nodes\Fields;

final class DefaultLeft implements Left
{
    /**
     * @param string $key
     * @param int $value
     */
    public function __construct(
        private readonly string $key,
        private readonly int $value
    ) {}

    /**
     * @return array<string,int>
     */
    public function asArray(): array
    {
        return [$this->key => $this->value];
    }
}

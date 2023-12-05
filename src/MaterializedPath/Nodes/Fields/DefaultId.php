<?php

declare(strict_types=1);

namespace Vhood\Graph\MaterializedPath\Nodes\Fields;

final class DefaultId implements Id
{
    /**
     * @param string $key
     * @param int|string $value
     */
    public function __construct(
        private readonly string $key,
        private readonly int|string $value
    ) {}

    /**
     * @return array<string,int|string>
     */
    public function asArray(): array
    {
        return [$this->key => $this->value];
    }
}

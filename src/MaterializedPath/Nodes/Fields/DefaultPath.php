<?php

declare(strict_types=1);

namespace Vhood\Graph\MaterializedPath\Nodes\Fields;

final class DefaultPath implements Path
{
    /**
     * @param string $key
     * @param string $value
     */
    public function __construct(
        private readonly string $key,
        private readonly string $value
    ) {}

    /**
     * @return array<string,string>
     */
    public function asArray(): array
    {
        return [$this->key => $this->value];
    }
}

<?php

declare(strict_types=1);

namespace Vhood\Graph\AdjacencyList\Exceptions;

use Exception;
use Throwable;

final class FieldNotFoundException extends Exception
{
    /**
     * {@inheritdoc}
     */
    public function __construct(string $field, int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct(sprintf('%s is not found', $field), $code, $previous);
    }
}

<?php

declare(strict_types=1);

namespace Vhood\Graph\NestedSet\Exceptions;

use Exception;
use Throwable;

final class NodeNotFoundException extends Exception
{
    /**
     * {@inheritdoc}
     */
    public function __construct(string $message = 'Node is not found', int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

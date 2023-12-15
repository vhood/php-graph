<?php

namespace Vhood\Graph;

interface MaterializedPathNodeFields
{
    /**
     * @return MaterializedPathNodeField[]
     */
    public function fields(): array;
}

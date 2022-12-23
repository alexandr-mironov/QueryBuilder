<?php

declare(strict_types=1);

namespace QueryBuilder\Statements;

/**
 * Interface StatementInterface
 *
 * @package QueryBuilder\Statements
 */
interface StatementInterface
{
    /**
     * @return string
     */
    public function __toString(): string;
}

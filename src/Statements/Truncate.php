<?php

declare(strict_types=1);

namespace QueryBuilder\Statements;

/**
 * Class Truncate
 *
 * @package QueryBuilder\Statements
 */
class Truncate implements StatementInterface
{
    /**
     * Truncate constructor.
     *
     * @param string $table
     */
    public function __construct(
        private string $table
    ) {

    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return "TRUNCATE $this->table";
    }
}

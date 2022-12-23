<?php

declare(strict_types=1);

namespace QueryBuilder\Statements;

/**
 * Class AlterDropColumn
 *
 * @package QueryBuilder\Statements
 */
class AlterDropColumn extends AlterOption
{
    /**
     * AlterDropColumn constructor.
     *
     * @param string $columnName
     */
    public function __construct(
        private string $columnName
    ) {

    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "DROP COLUMN {$this->columnName}";
    }
}

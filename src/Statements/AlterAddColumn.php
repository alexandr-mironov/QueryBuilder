<?php

declare(strict_types=1);

namespace QueryBuilder\Statements;

use QueryBuilder\Definitions\Column;

/**
 * Class AlterAddColumn
 *
 * @package QueryBuilder\Statements
 */
class AlterAddColumn extends AlterOption
{
    /**
     * AlterAddColumn constructor.
     *
     * @param string $columnName
     * @param Column $columnDefinition
     */
    protected function __construct(
        private string $columnName,
        private Column $columnDefinition
    ) {

    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "ADD COLUMN {$this->columnName} {$this->columnDefinition}";
    }
}

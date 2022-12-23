<?php

declare(strict_types=1);

namespace QueryBuilder\Statements;

use Entity\Table;
use QueryBuilder\Conditions\ConditionInterface;

/**
 * Class Delete
 *
 * @package QueryBuilder\Statements
 */
class Delete extends AbstractStatementWithWhere implements StatementInterface
{
    /**
     * Delete constructor.
     *
     * @param Table $table
     * @param ConditionInterface ...$conditions
     */
    public function __construct(
        private Table $table,
        ConditionInterface ...$conditions
    ) {
        foreach ($conditions as $condition) {
            $this->addWhereCondition($condition);
        }
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'DELETE FROM ' . $this->table->getName() . ' WHERE ' . $this->buildWhereStatement();
    }
}

<?php

declare(strict_types=1);

namespace QueryBuilder\MySQL;

use Entity\Table;
use QueryBuilder\BuilderInterface;
use QueryBuilder\MySQL\Statements\Insert;
use QueryBuilder\QueryBuilder as ParentQueryBuilder;

/**
 * Class QueryBuilder
 *
 * @package QueryBuilder\MySQL
 */
final class QueryBuilder extends ParentQueryBuilder implements BuilderInterface
{
    /**
     * @param Table $table
     * @param string[] $keys
     * @param string[] $updatable
     *
     * @return Insert
     */
    public function insert(Table $table, array $keys, array $updatable = []): Insert
    {
        return new Insert($table->getName(), $keys, $updatable);
    }
}

<?php

declare(strict_types=1);

namespace QueryBuilder;

use Entity\ColumnCollection;
use Entity\ConditionCollection;
use Entity\FieldCollection;
use Entity\Table;
use QueryBuilder\Conditions\ConditionInterface;
use QueryBuilder\Statements\AlterTable;
use QueryBuilder\Statements\CreateTable;
use QueryBuilder\Statements\Delete;
use QueryBuilder\Statements\DropTable;
use QueryBuilder\Statements\Insert;
use QueryBuilder\Statements\Select;

/**
 * Interface BuilderInterface
 *
 * @package QueryBuilder
 */
interface BuilderInterface
{
    /**
     * @param Table $table
     * @param string[] $keys
     * @param string[] $updatable
     *
     * @return Insert
     */
    public function insert(Table $table, array $keys, array $updatable = []): Insert;

    /**
     * @param Table $table
     * @param ConditionInterface ...$conditions
     *
     * @return Select
     */
    public function select(Table $table, ConditionInterface ...$conditions): Select;

    /**
     * @param Table $table
     * @param ConditionInterface ...$conditions
     *
     * @return Delete
     */
    public function delete(Table $table, ConditionInterface ...$conditions): Delete;

    /**
     * @param Table $table
     * @param ColumnCollection $columns
     * @param array<mixed> $options
     *
     * @return CreateTable
     */
    public function createTable(Table $table, ColumnCollection $columns, array $options = []): CreateTable;

    /**
     * @param Table $table
     * @param array<mixed> $options
     *
     * @return DropTable
     */
    public function dropTable(Table $table, array $options = []): DropTable;

    /**
     * @param Table $table
     *
     * @return AlterTable
     */
    public function alterTable(Table $table): AlterTable;
}

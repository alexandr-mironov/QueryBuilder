<?php

declare(strict_types=1);

namespace QueryBuilder\Statements;

/**
 * Class AbstractStatementWithWhere
 *
 * @package QueryBuilder\Statements
 */
abstract class AbstractStatementWithWhere
{
    use WhereTrait;
}

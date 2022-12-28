<?php

declare(strict_types=1);

namespace Test\units;

use QueryBuilder\Conditions\Between;
use QueryBuilder\Conditions\Equal;
use QueryBuilder\Conditions\Exists;
use QueryBuilder\Conditions\GreaterThen;
use QueryBuilder\Conditions\GreaterThenOrEqual;
use QueryBuilder\Conditions\In;
use QueryBuilder\Conditions\IsNotNull;
use QueryBuilder\Conditions\IsNull;
use QueryBuilder\Conditions\LessThen;
use QueryBuilder\Conditions\LessThenOrEqual;
use QueryBuilder\Exceptions\Exception;
use PHPUnit\Framework\TestCase;

class ConditionTest extends TestCase
{
    /**
     * @covers \QueryBuilder\Conditions\Between
     * @throws Exception
     */
    public function testBetween(): void
    {
        $this->assertEquals(
            "'column_name' BETWEEN 13 AND 666",
            (string)new Between(['column_name', 13, 666])
        );
    }

    /**
     * @covers \QueryBuilder\Conditions\Equal
     * @throws Exception
     */
    public function testEqual(): void
    {
        $this->assertEquals(
            "'column_name' = 13",
            (string)new Equal(['column_name', 13])
        );
        $this->assertEquals(
            "'column_name' = '13'",
            (string)new Equal(['column_name', '13'])
        );
    }

    /**
     * @covers \QueryBuilder\Conditions\Exists
     * @throws Exception
     */
    public function testExists(): void
    {
        $this->assertEquals(
            "'column_name' EXISTS",
            (string)new Exists(['column_name'])
        );
    }

    /**
     * @covers \QueryBuilder\Conditions\GreaterThen
     * @throws Exception
     */
    public function testGreaterThen(): void
    {
        $this->assertEquals(
            "'column_name' > 'value'",
            (string)new GreaterThen(['column_name', 'value'])
        );

        $this->assertEquals(
            "'column_name' > 13",
            (string)new GreaterThen(['column_name', 13])
        );
    }

    /**
     * @covers \QueryBuilder\Conditions\GreaterThenOrEqual
     * @throws Exception
     */
    public function testGreaterThenOrEqual(): void
    {
        $this->assertEquals(
            "'column_name' >= 'value'",
            (string)new GreaterThenOrEqual(['column_name', 'value'])
        );

        $this->assertEquals(
            "'column_name' >= 13",
            (string)new GreaterThenOrEqual(['column_name', 13])
        );
    }

    /**
     * @covers \QueryBuilder\Conditions\In
     * @throws Exception
     */
    public function testIn(): void
    {
        $this->assertEquals(
            "'column_name' IN ('value','0)'' OR 1=1 --',13,'''')",
            (string)new In(['column_name', ['value', "0)' OR 1=1 --", 13, "'"]])
        );
    }

    /**
     * @covers \QueryBuilder\Conditions\IsNotNull
     * @throws Exception
     */
    public function testIsNotNull(): void
    {
        $this->assertEquals(
            "'column_name' IS NOT NULL",
            (string)new IsNotNull(['column_name'])
        );
    }

    /**
     * @covers \QueryBuilder\Conditions\IsNull
     * @throws Exception
     */
    public function testIsNull(): void
    {
        $this->assertEquals(
            "'column_name' IS NULL",
            (string)new IsNull(['column_name'])
        );
    }

    /**
     * @covers \QueryBuilder\Conditions\LessThen
     * @throws Exception
     */
    public function testLessThen(): void
    {
        $this->assertEquals(
            "'column_name' < 'value'",
            (string)new LessThen(['column_name', 'value'])
        );

        $this->assertEquals(
            "'column_name' < 13",
            (string)new LessThen(['column_name', 13])
        );
    }

    /**
     * @covers \QueryBuilder\Conditions\LessThenOrEqual
     * @throws Exception
     */
    public function testLessThenOrEqual(): void
    {
        $this->assertEquals(
            "'column_name' <= 'value'",
            (string)new LessThenOrEqual(['column_name', 'value'])
        );

        $this->assertEquals(
            "'column_name' <= 13",
            (string)new LessThenOrEqual(['column_name', 13])
        );
    }
}

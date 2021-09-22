<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class DecimalToRomanTest extends TestCase
{
    public function test8(): void
    {
        $this->assertEquals(true, DecimalToRoman::isDecimalToRoman(8));
    }
}

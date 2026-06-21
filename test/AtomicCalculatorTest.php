<?php

declare (strict_types=1);

namespace test;

use App\AtomicCalculator;
use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class AtomicCalculatorTest extends TestCase
{
    #[DataProvider('provideElectronConfigurationCases')]
    public function testReturnsItProvidesElectronConfiguration(int $atomicNumber, string $expected): void
    {
        $electronConfigurationCalculator = new AtomicCalculator();

        $this->assertSame($expected, $electronConfigurationCalculator->calculateElectronConfiguration($atomicNumber));
    }

    public static function provideElectronConfigurationCases(): Generator
    {
        yield [1, '1s1'];
    }
}
<?php

use PHPUnit\Framework\TestCase;
use Merveyilmaz\BirthdayCalculation\Birthday;


class BirthdayTest extends TestCase
{
    public function test_age()
    {
        $birthday = new Birthday('2000-01-01');
        $testAge = (int) date('Y') - 2000;
        $this->assertEquals($testAge, $birthday->getAge());
    }

    public function test_days()
    {
        $birthday = new Birthday('2000-01-01');
        $now = new DateTime();
        $expected = (new DateTime('2000-01-01'))->diff($now)->days;
        $this->assertEquals($expected, $birthday->getDays());
    }
}
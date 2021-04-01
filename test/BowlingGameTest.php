<?php

use PHPUnit\Framework\TestCase;

class BowlingGameTest extends TestCase
{
    function testScoreCalculation()
    {
        $score = "XXXXXXXXXXXX";
        $expected = 300;
        $game = new BowlingGame($score);
        $actual = $game->check();
        $this->assertEquals($expected, $actual);
    }

    function testScoreCalculation2()
    {
        $score = "9-9-9-9-9-9-9-9-9-9-";
        $expected = 90;
        $game = new BowlingGame($score);
        $actual = $game->check();
        $this->assertEquals($expected, $actual);
    }

    function testScoreCalculation3()
    {
        $score = "5/5/5/5/5/5/5/5/5/5/5";
        $expected = 150;
        $game = new BowlingGame($score);
        $actual = $game->check();
        $this->assertEquals($expected, $actual);
    }
}
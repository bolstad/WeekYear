<?php
/**
 * Created by PhpStorm.
 * User: christian
 * Date: 2016-01-02
 * Time: 11:27
 */

namespace Bolstad\WeekYear;


class GuessYearTest extends \PHPUnit_Framework_TestCase
{

    public $guessYear;

    private $test_date  = "2016-01-02";
    private $test_year = 2016;
    private $test_week = 53;

    /**
     * Setup common stuff for all tests
     */
    function setUp()
    {
        // Since we are working with date stuff we *must* set a default timezone
        date_default_timezone_set("UTC");
        $this->guessYear = new \Bolstad\WeekYear\GuessYear();
        $this->guessYear->setYear($this->test_year);
        $this->guessYear->setWeek($this->test_week);
        $this->guessYear->setDate($this->test_date);
    }

    function testGetDate() {
        $this->assertEquals($this->test_date,$this->guessYear->getDate());
    }

    function testGetYear() {
        $this->assertEquals($this->test_year,$this->guessYear->getYear());
    }

    function testGetWeek() {
        $this->assertEquals($this->test_week, $this->guessYear->getWeek());
    }

    function testGetDateForMondayForWeek()
    {
        $this->assertEquals("2015-12-28",$this->guessYear->getDateForMondayForWeek());
    }

    function testGetYearForMondayForWeek()
    {
        $this->assertEquals("2015",$this->guessYear->getYearForMondayForWeek());
    }
    function testGetWeekForMondayForWeek()
    {
        $this->assertEquals(53,$this->guessYear->getWeekForMondayForWeek());
    }

}

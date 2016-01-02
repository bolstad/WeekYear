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

    /**
     * Setup common stuff for all tests
     */
    function setUp()
    {
        // Since we are working with date stuff we *must* set a default timezone
        date_default_timezone_set("UTC");
        $this->guessYear = new \Bolstad\WeekYear\GuessYear();

    }

    function testGetCurrentWeek()
    {

    }
}

<?php
/**
 * Created by PhpStorm.
 * User: christian
 * Date: 2016-01-02
 * Time: 11:23
 */

namespace Bolstad\WeekYear;


class GuessYear
{

    private $currentYear;
    private $currentWeek;

    function __construct()
    {
        $this->setWeek(date("W"));
        $this->setYear(date("Y"));
    }

    function setYear( $year ) {
        $this->currentYear = $year;;
    }

    function setWeek( $week ) {
        $this->currentWeek = $week;
    }


}
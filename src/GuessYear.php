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
    private $currentDate;

    function __construct()
    {
        $this->setWeek(date("W"));
        $this->setYear(date("Y"));
        $this->setDate(date("Y-m-d"));
    }

    // SETTERS

    /**
     * Set current year
     *
     * @param $year integer - Current year in four digits - as returned as date("Y") (e.g. '2016')
     */
    function setYear( $year ) {
        $this->currentYear = $year;;
    }

    /**
     * Set current week
     *
     * @param $week integer - Current week number - as returned by date("W") (e.g. 53)
     */
    function setWeek( $week ) {
        $this->currentWeek = $week;
    }

    /**
     * Set current date formated by ISO 8601 ( YYYY-MM-DD )
     *
     * @param $date - string, as retuned by date("Y-m-d")
     */
    function setDate( $date ) {
        $this->currentDate = $date;
    }


    // GETTERS

    /**
     * Return current date formated by ISO 8601 ( YYYY-MM-DD )
     *
     * @return string, as retuned by date("Y-m-d")
     */
    function getDate() {
        return $this->currentDate;
    }

    /**
     * Return current year in for digits
     *
     * @return integer - as returned as date("Y") (e.g. '2016')
     */
    function getYear() {
        return $this->currentYear;
    }

    /**
     * Return current week
     *
     * @return integer -- Current week number - as returned by date("W") (e.g. 53)
     */
    function getWeek() {
        return $this->currentWeek;
    }

    // Tricky week functions

    /**
     * Return the date of the monday of the current week
     *
     * @return string -  date formated by ISO 8601 ( YYYY-MM-DD )
     */
    function getDateForMondayForWeek() {
        return date("Y-m-d",strtotime("last monday", strtotime( $this->getDate())));
    }

    /**
     * Return the year of the monday of the currenty week
     *
     * @return string - year as returned by date("Y")
     */
    function getYearForMondayForWeek() {
        return date("Y",strtotime($this->getDateForMondayForWeek()));
    }


    /**
     * Return the week for the monday of the current week
     *
     *
     * @return  integer -- Current week number - as returned by date("W") (e.g. 53)
     */
    function getWeekForMondayForWeek() {
        return date("W",strtotime($this->getDateForMondayForWeek()));
    }

}
<?php

/* model/data-layer.php
 * returns data for portfolio
 *
 */

class DataLayer
{
    private $_dbh;

    function __construct($dbh)
    {
        $this->_dbh = $dbh;
    }

    /** returns an array of meeting options
     *  @return array
     */
    function getHowMet()
    {
        return array("Meetup", "Job Fair", "Class", "We haven't met yet");
    }


    /** returns an array of mailing methods
     *  @return array
     */
    function getMailingFormats()
    {
        return array("HTML", "Text");
    }
}
<?php
/* model/validate.php
 * Contains validation functions for portfolio
 *
 */

//get login credentials
require($_SERVER['HOME'] . '/logincredsportfolio.php');

class Validate
{
    private $_dataLayer;

    function __construct($dataLayer)
    {
        $this->_dataLayer = $dataLayer;
    }

    /** validUsername() returns true if username is not empty and
     * equals username in logincredspatrontracker.php
     * @param String $username
     * @return boolean
     */
    function validUsername($username, $adminUser)
    {
        return !empty($username) && $username == $adminUser;
    }

    /** validPassword() returns true if password is not empty and
     * equals password in logincredspatrontracker.php
     * @param String $password
     * @return boolean
     */
    function validPassword($password, $adminPassword)
    {
        return !empty($password) && $password == $adminPassword;
    }

    /**
     * returns true if name is not empty
     * @param $name
     * @return bool
     */
    function validName($name)
    {
        return !empty($name) && preg_match("/^[a-zA-Z ]+$/", $name);
    }

    /**
     * returns true if email entered is valid
     * @param $email
     * @return bool
     */
    function validEmail($email)
    {
        return preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email);
    }

    /**
     * returns true if how met option was selected and in array from DataLayer class
     * @param $howMet
     * @return bool
     */
    function validHowMet($howMet)
    {
        return !empty($howMet) && in_array($howMet, $this->_dataLayer->getHowMet());
    }

    /**
     * Returns true if other is not empty and is not in array in DataLayer class
     * @param $questionOther
     * @return bool
     */
    function validHowMetOther($other)
    {
        return !empty($other) && !in_array($other, $this->_dataLayer->getHowMet());
    }

    /**
     * returns true if linkedin url is valid
     * @param $linkedIn
     * @return bool
     */
    function validLinkedIn($linkedIn)
    {
        return (substr($linkedIn, 0, 5) == "https") && strpos($linkedIn, "linkedin.com");
    }

    /**
     * returns true if email format option is not empty and is in array in DataLayer class
     * @param $format
     * @return bool
     */
    function validFormat($format)
    {
        return !empty($format) && in_array($format, $this->_dataLayer->getMailingFormats());
    }
}
<?php
/**
 * Class Person creates an object for a person signing guestbook
 * @author Dana Clemmer
 */
class Person
{
    private $_fname;
    private $_lname;
    private $_job_title;
    private $_company;
    private $_linkedin;
    private $_email;
    private $_how_met;
    private $_other;
    private $_message;
    private $_mailing_list;
    private $_email_format;



    /**
     * Gets first name
     * @return String
     */
    public function getFname()
    {
        return $this->_fname;
    }

    /**
     * Sets first name
     * @param String $fname
     */
    public function setFname($fname): void
    {
        $this->_fname = $fname;
    }

    /**
     * Gets last name
     * @return String
     */
    public function getLname()
    {
        return $this->_lname;
    }

    /**
     * Sets last name
     * @param String $lname
     */
    public function setLname($lname): void
    {
        $this->_lname = $lname;
    }

    /**
     * Gets job title
     * @return String
     */
    public function getJobTitle()
    {
        return $this->_job_title;
    }

    /**
     * Sets job title
     * @param String $job_title
     */
    public function setJobTitle($job_title): void
    {
        $this->_job_title = $job_title;
    }

    /**
     * Gets company
     * @return String
     */
    public function getCompany()
    {
        return $this->_company;
    }

    /**
     * Sets company
     * @param String $company
     */
    public function setCompany($company): void
    {
        $this->_company = $company;
    }

    /**
     * Gets linkedin
     * @return String
     */
    public function getLinkedin()
    {
        return $this->_linkedin;
    }

    /**
     * Sets linkedin
     * @param String $linkedin
     */
    public function setLinkedin($linkedin): void
    {
        $this->_linkedin = $linkedin;
    }

    /**
     * Gets email
     * @return String
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * Sets email
     * @param String $email
     */
    public function setEmail($email): void
    {
        $this->_email = $email;
    }

    /**
     * Gets how met
     * @return String
     */
    public function getHowMet()
    {
        return $this->_how_met;
    }

    /**
     * Sets how met
     * @param String $how_met
     */
    public function setHowMet($how_met): void
    {
        $this->_how_met = $how_met;
    }

    /**
     * Gets other
     * @return String
     */
    public function getOther()
    {
        return $this->_other;
    }

    /**
     * Sets other
     * @param String $other
     */
    public function setOther($other): void
    {
        $this->_other = $other;
    }

    /**
     * Gets message
     * @return String
     */
    public function getMessage()
    {
        return $this->_message;
    }

    /**
     * Sets message
     * @param String $message
     */
    public function setMessage($message): void
    {
        $this->_message = $message;
    }

    /**
     * Gets mailing list
     * @return String
     */
    public function getMailingList()
    {
        return $this->_mailing_list;
    }

    /**
     * Sets mailing list
     * @param String $mailing_list
     */
    public function setMailingList($mailing_list): void
    {
        $this->_mailing_list = $mailing_list;
    }

    /**
     * Gets email format
     * @return String
     */
    public function getEmailFormat()
    {
        return $this->_email_format;
    }

    /**
     * Sets email format
     * @param String $email_format
     */
    public function setEmailFormat($email_format): void
    {
        $this->_email_format = $email_format;
    }


}

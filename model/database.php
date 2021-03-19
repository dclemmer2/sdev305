<?php

/* model/database.php
 * Contains database queries for portfolio
 *
 */

class Database
{
    private $_dbh;

    function __construct($dbh)
    {
        $this->_dbh = $dbh;
    }

    /**
     * insert query to insert person into database
     * @param $person person object passed in
     */
    function insertPerson($person)
    {
        /* INSERT QUERY */

        //Save contact info to database
        //Define the query
        $sql = "INSERT INTO guestbook(fname, lname, job_title, company, linkedin, email, how_met, other, message, 
                      mailing_list, email_format) VALUES(:fname, :lname, :job_title, :company, :linkedin, :email, :how_met, :other, :message, 
                      :mailing_list, :email_format)";

        //Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //Bind the parameters
        $statement->bindParam(':fname', $person->getFname(), PDO::PARAM_STR);
        $statement->bindParam(':lname', $person->getLname(), PDO::PARAM_STR);
        $statement->bindParam(':job_title', $person->getJobTitle(), PDO::PARAM_STR);
        $statement->bindParam(':company', $person->getCompany(), PDO::PARAM_STR);
        $statement->bindParam(':linkedin', $person->getLinkedin(), PDO::PARAM_STR);
        $statement->bindParam(':email', $person->getEmail(), PDO::PARAM_STR);
        $statement->bindParam(':how_met', $person->getHowMet(), PDO::PARAM_STR);
        $statement->bindParam(':other', $person->getOther(), PDO::PARAM_STR);
        $statement->bindParam(':message', $person->getMessage(), PDO::PARAM_STR);
        $statement->bindParam(':mailing_list', $person->getMailingList(), PDO::PARAM_STR);
        $statement->bindParam(':email_format', $person->getEmailFormat(), PDO::PARAM_STR);

        //Execute
        $statement->execute();

    }

    /**
     * query that returns rows from table
     */
    function getPeople()
    {
        /* SELECT QUERY WITH FETCHALL (gets multiple rows) */

        //Define the query
        $sql = "SELECT * FROM guestbook";

        //Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //Execute the statement
        $statement->execute();

        //Process the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    /**
     * gets person associated with passed in id
     *
     * @param $contact_id passed in id of person
     */
    function getPerson($contact_id)
    {
        /* SELECT QUERY WITH FETCH (gets one row) */

        //Define the query
        $sql = "SELECT * FROM guestbook WHERE contact_id = :contact_id";

        //Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //Bind the parameters
        $id = $contact_id;
        $statement->bindParam(':contact_id', $id, PDO::PARAM_INT);

        //Execute the statement
        $statement->execute();

        //Process the result
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        echo $row['fname'] . ", " . $row['lname'] . ", " . $row['job_title'] . ", " .
            $row['company'] . ", " . $row['linkedin'] . ", " . $row['email'] . ", " .
            $row['how_met'] . ", " . $row['other'] . ", " . $row['message'] . ", " .
            $row['mailing_list'] . ", " . $row['mail_format'];

    }



}
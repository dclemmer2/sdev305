<?php

function validName($name)
{

    return !empty($name);
}

function validEmail($email)
{
    if (((strpos($email, "@")) !== false) and ((strpos($email, ".") !== false))) {
        return true;
    }
    return false;
}

function validHowMet($howMet)
{
    if ($howMet === "none") {
        return false;
    }
    return true;
}

function validMailingList($email)
{
    if (!empty($email)) {
        return true;
    }

    return false;
}

function validLinkedIn($linkedIn)
{
    if ((substr($linkedIn, 0, 4) == "http") and (substr($linkedIn, (strlen($linkedIn) - 4)) == ".com")) {
        return true;
    }
    return false;
}

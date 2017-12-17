<?php

class accounts extends \database\collection
{
    protected static $modelName = 'account';

    //This is the function to write to find user by ID for login.
    //Don't forget to return the object see findOne in the collection class
    public static function findUserbyID($userid)
    {

    }


    public static function findUserbyemail($email)
    {

        $tableName = get_called_class();
        $sql = 'SELECT * FROM '.$tableName . ' WHERE email = ?';

        $recordSet = self::getResults($sql, $email);

        if(is_null($recordSet))
        {
            return false;
        }
        else
        {
            return $recordSet[0];
        }


    }

}
?>

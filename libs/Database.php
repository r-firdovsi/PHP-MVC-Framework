<?php

class Database extends PDO
{
    public function __construct($dsn, $username = null, $passwd = null, $options = null)
    {
        parent::__construct($dsn, $username, $passwd, $options);
    }

    public function select($table, $condition = false)
    {
        if ($condition == false):
            $query = "SELECT * FROM " . $table;
        else:
            $query = "SELECT * FROM " . $table . " WHERE " . $condition;
        endif;

        $final = $this->prepare($query);
        $final->execute();

        return $final->fetchAll();
    }
}

?>

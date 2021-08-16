<?php

// This class will manage the connection to the database
// It will be passed on the other classes who need it

// do we need to extend the config file?
class DatabaseManager
{
    // These are private: only this class needs them
    private $host;
    private $user;
    private $password;
    private $dbname;
    // This one is public, so we can use it outside of this class
    // We could also use a private variable and a getter (but let's not make things too complicated at this point)
    public $connection;

    public function __construct(string $host, string $user, string $password, string $dbname)
    {
        // Set user and password information
        $this->host= $host;
        $this->user= $user;
        $this->password= $password;
        $this->dbname= $dbname;

    }

    public function connect()
    {
        // TODO: make the connection to the database
        $this->connection = null;
    }
}
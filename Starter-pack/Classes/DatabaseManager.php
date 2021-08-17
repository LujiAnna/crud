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

    public function connect():PDO
    {
        // make the connection to the database
        // null will close the db
        // $conn = null;

        // // Create connection
        // // The connect() / mysqli_connect() function opens a new connection to the MySQL server. accelerator
        // Works only for mysql
        // $conn = new mysqli($host, $user, $password, $dbname);

        // // Check connection
        // if ($conn->connect_error) {
        //   die("Connection failed: " . $conn->connect_error);
        //   }

        // PDO will work on 12 different database systems
        // PDO is built-in  https://www.phptutorial.net/php-pdo/pdo-connecting-to-mysql/
        //   try {
        //     //   dsn - database server name
        //       $dsn = "mysql:host=$this->host;dbname=$this->dbname";
        //       $this->connection = new PDO($dsn, $this->user, $this->password);
        //     // set the PDO error mode to exception
        //     $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // //   echo "Connected successfully";
        //   } catch(PDOException $e) {
        //     echo "Connection failed: " . $e->getMessage();
        //   }

            // Connect using PDO (PHP Data Objects)
          //   dsn - database server name
          $dsn = "mysql:host=$this->host;dbname=$this->dbname";
          $this->connection = new PDO($dsn, $this->user, $this->password);
          // set return type in form of associative array
          $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
          return $this->connection; 

    }
}
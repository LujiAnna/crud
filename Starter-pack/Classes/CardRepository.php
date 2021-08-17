<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    
    public function create()
    {

    }

    // Get = read

    // Get one
    public function find()
    {

    }

    // Get all
    public function get()
    {
        // replace dummy data by real one
        // query data from table using PDO 

        // if no parameter in query
        // $sql = "SELECT * FROM bird_base";
        $sql = "SELECT comName FROM birds";

        // $sql = "SELECT idbird, comName FROM bird";
        
        // $result = $pdo->query($sql);
        // this dbmgr is one which has the pdo-dsn 
        $result = $this->databaseManager->connect()->query($sql);
        // return [
        //     ['name' => 'bird one'],
        //     ['name' => 'bird two'],
        // ];

        return $result;

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    // update = edit
    public function update()
    {

    }

    public function delete()
    {

    }

}
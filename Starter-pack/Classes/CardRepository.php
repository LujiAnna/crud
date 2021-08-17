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
        // grab this variable from post
        if (isset($_POST['find'])) {
        # Check if amount field is 0, empty, or not set at all'
            if (empty($_POST['bird'])) {
                echo " <br/> Please write bird name";
        } else {
           // TODO: pass this bird name to be found in the db
               $bird = $_POST['bird'];
                $sql = "SELECT * FROM birds WHERE comName=\"$bird\"";
                // var_dump($sql);
                // use fetch method
                $result = $this->databaseManager->connection->query($sql)->fetch();
                // var_dump($result);
                return $result;
    }
    }
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
        // TODO: change
        $result = $this->databaseManager->connection->query($sql);
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
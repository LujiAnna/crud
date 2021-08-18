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
        // grab this variable from post
        if (isset($_POST['submit'])) {
        
            // pass bird info in the db
                $comName = $_POST['comName'];
                $sciName = $_POST['sciName'];
                $idbird = $_POST['idbird'];
                $birdRange = $_POST['birdRange'];
                $idlocation = $_POST['idlocation'];
                $locationName = $_POST['locationName'];
                $locationLat = $_POST['locationLat'];
                $locationLat = $_POST['locationLon'];

                // insert into two different tables, with 1 common value
                $sql = "INSERT INTO birds (idbird, comName, sciName, birdRange, idlocation)
                 VALUES (\"$idbird\", \"$comName\", \"$sciName\",\"$birdRange\", \"$idlocation\")";
                var_dump($sql);

                $result = $this->databaseManager->connection->query($sql);
                // var_dump($result);
                // return $result;

                 // insert into two different tables, with 1 common value
                 $sql1 = "INSERT INTO locations (idlocation, locationName, locationLat, locationLon)
                 VALUES (\"$idlocation\", \"$locationName\", \"$locationLat\",\"$locationLon\")";
                var_dump($sql1);

                $result = $this->databaseManager->connection->query($sql1);
                echo 'OK';
    
    }

}

    // Get = Read

    // Get one
    // read more on fetch mode: https://www.phptutorial.net/php-pdo/php-fetch/
    // fetch a row from the result set
    public function find()
    {
        // grab this variable from post
        if (isset($_POST['find'])) {
        # Check if amount field is 0, empty, or not set at all'
            if (empty($_POST['bird'])) {
                echo " <br/> Please write bird name";
        } else {
           // pass this bird name to find its info in the db
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
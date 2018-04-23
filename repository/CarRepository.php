<?php

require_once '../lib/Repository.php';

/**
 * Das UserRepository ist zuständig für alle Zugriffe auf die Tabelle "user".
 *
 * Die Ausführliche Dokumentation zu Repositories findest du in der Repository Klasse.
 */
class CarRepository extends Repository
{
    /**
     * Diese Variable wird von der Klasse Repository verwendet, um generische
     * Funktionen zur Verfügung zu stellen.
     */
    protected $tableName = 'cars';
    protected $id = 'id';

    /**
     * Erstellt einen neuen benutzer mit den gegebenen Werten.
     *
     * Das Passwort wird vor dem ausführen des Queries noch mit dem SHA1
     *  Algorythmus gehashed.
     *
     * @param $firstName Wert für die Spalte firstName
     * @param $lastName Wert für die Spalte lastName
     * @param $email Wert für die Spalte email
     * @param $password Wert für die Spalte password
     *
     * @throws Exception falls das Ausführen des Statements fehlschlägt
     */
    /*public function create($firstName, $lastName, $email, $password)
    {
        $password = sha1($password);

        $query = "INSERT INTO $this->tableName (price, ps, topspeed, 0to100, fuel, seats, brandname, model) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('ssssssss', $firstName, $lastName, $email, $password);

        if (!$statement->execute()) {
            throw new Exception($statement->error);
        }

        return $statement->insert_id;
    }*/

    public function display()
    {
        $brandname = $_POST['brandname'];
        $model = $_POST['model'];
        $query = "SELECT password FROM $this->tableName WHERE brandname = ? AND model = ?";
        $statement = ConnectionHandler::getConnection()->prepare($query);

        $statement->bind_param('ss', $brandname, $model);

        if (!$statement->execute()) {
            throw new Exception($statement->error);
        }

        $result = $statement->get_result();

        if($result->num_rows == 0){
            return false;
        }

        $user = $result->fetch_object();
        if(password_verify($password,$user->password)){

            return true;
        }

        return false;

    }
}
<?php

require_once '../repository/CarRepository.php';
/**
 * Der Controller ist der Ort an dem es für jede Seite, welche der Benutzer
 * anfordern kann eine Methode gibt, welche die dazugehörende Businesslogik
 * beherbergt.
 *
 * Welche Controller und Funktionen muss ich erstellen?
 *   Es macht sinn, zusammengehörende Funktionen (z.B: User anzeigen, erstellen,
 *   bearbeiten & löschen) gemeinsam in einem passend benannten Controller (z.B:
 *   UserController) zu implementieren. Nicht zusammengehörende Features sollten
 *   jeweils auf unterschiedliche Controller aufgeteilt werden.
 *
 * Was passiert in einer Controllerfunktion?
 *   Die Anforderungen an die einzelnen Funktionen sind sehr unterschiedlich.
 *   Folgend die gängigsten:
 *     - Dafür sorgen, dass dem Benutzer eine View (HTML, CSS & JavaScript)
 *         gesendet wird.
 *     - Daten von einem Model (Verbindungsstück zur Datenbank) anfordern und
 *         der View übergeben, damit diese Daten dann für den Benutzer in HTML
 *         Code umgewandelt werden können.
 *     - Daten welche z.B. von einem Formular kommen validieren und dem Model
 *         übergeben, damit sie in der Datenbank persistiert werden können.
 */
class DefaultController
{
    /**
     * Die index Funktion des DefaultControllers sollte in jedem Projekt
     * existieren, da diese ausgeführt wird, falls die URI des Requests leer
     * ist. (z.B. http://my-project.local/). Weshalb das so ist, ist und wann
     * welcher Controller und welche Methode aufgerufen wird, ist im Dispatcher
     * beschrieben.
     */
    public function index()
    {

        $view = new View('default_index');
        $view->title = 'ComCar';
        $view->heading = '';
        $view->display();;

        return $view;


    }
    public function addForm(){

        $view = new View('default_index2');
        $view->heading = '';
        $view->display();;

    }
    public function addForm2(){

        $view = new View('default_index3');
        $view->heading = '';
        $view->display();;

    }
    public function doShow()
    {
            if(isset($_POST['brandname'])){
                $brandname = $_POST['brandname'];
            }
            else{
                $brandname = "";
            }
            if(isset($_POST['Model'])){
                $model = $_POST['Model'];
            }
            else {
                $model = "";
            }

        if(isset($_POST['brandname2'])){
            $brandname2 = $_POST['brandname2'];
        }
        else{
            $brandname2 = "";
        }
        if(isset($_POST['Model2'])){
            $model2 = $_POST['Model2'];
        }
        else {
            $model2 = "";
        }

        if(isset($_POST['brandname3'])){
            $brandname3 = $_POST['brandname3'];
        }
        else{
            $brandname3 = "";
        }
        if(isset($_POST['Model3'])){
            $model3 = $_POST['Model3'];
        }
        else {
            $model3 = "";
        }

        if (isset($_POST['carInfo'])) {
                $carNumber = $_POST['carInfo'];
        } else {
                $carNumber = 3;
        }
if ($carNumber == 3) {
    $view = new View('default_index3');
} else if ($carNumber == 2) {
    $view = new View('default_index2');
} else {
    $view = new View('default_index');
}
            $carRepository = new CarRepository();
            $view->car = $carRepository->display($brandname, $model);
            $view->car2 = $carRepository->display($brandname2, $model2);
            $view->car3 = $carRepository->display($brandname3, $model3);
            $view->title = 'ComCar';
            $view->heading = '';
            $view->display();


}
}

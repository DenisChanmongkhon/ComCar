<?php

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
        // In diesem Fall möchten wir dem Benutzer die View mit dem Namen
        //   "default_index" rendern. Wie das genau funktioniert, ist in der
        //   View Klasse beschrieben.
        $view = new View('default_index');
        $view->title = 'ComCar';
        $view->heading = '';
        $view->display();
        $view = str_replace("#{cars.data}", "1. Auto",$view);
        return $view;

    }

    public function execute()
    {
        $carrepository = new CarRepository();
        $view=$carrepository->display();
        return $view;


        /*foreach ($result as $i){
            echo '
        }
            <table class="table table-condensed table-bordered neutralize">
                            <tbody>
                            <tr>
                                <td><b>Brand</td>
                                <th>

                                </th>


                            </tbody>
                        </table>

                    </div>
                        <div class="panel-tail">
                            <h4>More Details</h4>
                            <input type="button" value="+" class="showmore" data-toggle="" data-target="#navbar" aria-expanded="false" aria-controls="addcar">
                            </input>
                        </div>
                    </div>'
        }*/

        if(isset($_REQUEST['brandname'])){
            $brandname = $_REQUEST['brandname'];
        }
        else{
            $place = "";
        }
        if(isset($_REQUEST['Model'])){
            $model = $_REQUEST['Model'];
        }
        else {
            $model = "";
        }



        $carrepository = new CarRepository();
        $tableresult = $carrepository->display();
        return $tableresult;
    }
}

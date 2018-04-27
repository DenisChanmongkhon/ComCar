<?php
$cars = 1;

if (isset($_POST['submit'])) {

    $selectedBrand =$car->brandname;
    $selectedModel =$car->model;

    } else {

    $selectedBrand = 'Audi';
    $selectedModel = 'RS7';

}
?>

<script>
    function addCar() {
        if (document.getElementById("entry2").style.display == "block") {
            <?php $selectedBrand3 = 'Audi';
            $selectedModel3 = 'RS7'; ?>

            document.getElementById("entry3").style.display = "block";
            document.getElementById("carInfo").value = 3;
            document.getElementById("plus").style.display = "none";

        } else {
            <?php $selectedBrand2 = 'Audi';
            $selectedModel2 = 'RS7'; ?>

            document.getElementById("entry2").style.display = "block";
            document.getElementById("carInfo").value = 2;


        }

    }

    function removeCar() {

    }
</script>

<style>#entry2{display: none;}
    #entry3{display: none;}
    #carInfo{display: none;}
</style>

<div class="container" id="completeForm">
    <form method="POST" id="form" action="/default/doShow">
        <div class="panel panel-container" id="entry1">
            <div class="panel-full">
                <div class="panel-top">
                    <select name="brandname">
                        <option <?php if($selectedBrand == 'Audi'){echo("selected");}?> value="Audi">Audi</option>
                        <option <?php if($selectedBrand == 'Lamborghini'){echo("selected");}?> value="Lamborghini">Lamborghini</option>
                        <option <?php if($selectedBrand == 'Mercedes'){echo("selected");}?> value="Mercedes">Mercedes</option>
                        <option <?php if($selectedBrand == 'Porsche'){echo("selected");}?> value="Porsche">Porsche</option>
                        <option <?php if($selectedBrand == 'Tesla'){echo("selected");}?> value="Tesla">Tesla</option>
                    </select>

                    <select name="model">
                        <option <?php if($selectedModel == 'Huracan'){echo("selected");}?>value="Huracan">Huracan</option>
                        <option <?php if($selectedModel == 'Panamera'){echo("selected");}?> value="Panamera">Panamera</option>
                        <option <?php if($selectedModel == 'RS7'){echo("selected");}?> value="RS7">RS7</option>
                        <option <?php if($selectedModel == 'Model X'){echo("selected");}?> value="Model ">Model X</option>
                        <option <?php if($selectedModel == 'AMG GT'){echo("selected");}?> value="AMG GT">AMG GT</option>
                    </select>

                    <input type="text" name="carInfo" id="carInfo" value="<?php echo $cars; ?>">

                    <?php
                    if (isset($_POST['submit'])) {
                        echo '<a data-fancybox="gallery" href=" '. $car->path .' ">
                        <a id="single_image" href=" '. $car->path .' ">
                            <img src=" '. $car->path .' " alt="" style="width:370px" />
                        </a>
                        </a>        
                </div>
                <div class="panel-body">
                    <table class="table">
                             <tbody><tr><td><b>Marke</td><th>' .$car->brandname . '</th></tr>
                                 <tr><td><b>Modell</td><th>'.$car->model .'</th></tr>
                                 <tr><td><b>Preis in $</td><th>'.$car->price.'</th></tr>
                                 <tr><td><b>PS</td><th>'.$car->ps.'</th></tr>
                                 <tr><td><b>Höchstgeschwindigkeit in km/h</td><th>'.$car->topspeed.'</th></tr>
                                 <tr><td><b>0 bis 100km/h</td><th>'.$car->ztoh.'</th></tr>
                                 <tr><td><b>Treibstoff</td><th>'.$car->fuel.'</th></tr>
                                 <tr><td><b>Anzahl Sitze</td><th>'.$car->seats.'</th></tr></tbody>
                         </table>   
                    ';
                    }
                    ?>
                </div>
            </div>
        </div>


        <div class="panel panel-container" id="entry2">
            <div class="panel-full">
                <div class="panel-top">
                    <select name="brandname2">
                        <option <?php if($selectedBrand2 == 'Audi'){echo("selected");}?> value="Audi">Audi</option>
                        <option <?php if($selectedBrand2 == 'Lamborghini'){echo("selected");}?> value="Lamborghini">Lamborghini</option>
                        <option <?php if($selectedBrand2 == 'Mercedes'){echo("selected");}?> value="Mercedes">Mercedes</option>
                        <option <?php if($selectedBrand2 == 'Porsche'){echo("selected");}?> value="Porsche">Porsche</option>
                        <option <?php if($selectedBrand2 == 'Tesla'){echo("selected");}?> value="Tesla">Tesla</option>
                    </select>
                    <select name="model2">
                        <option <?php if($selectedModel2 == 'Huracan'){echo("selected");}?>value="Huracan">Huracan</option>
                        <option <?php if($selectedModel2 == 'Panamera'){echo("selected");}?> value="Panamera">Panamera</option>
                        <option <?php if($selectedModel2 == 'RS7'){echo("selected");}?> value="RS7">RS7</option>
                        <option <?php if($selectedModel2 == 'Model X'){echo("selected");}?> value="Model ">Model X</option>
                        <option <?php if($selectedModel2 == 'AMG GT'){echo("selected");}?> value="AMG GT">AMG GT</option>
                    </select>


                    <?php
                    if (isset($_POST['submit'])) {
                        echo '<a data-fancybox="gallery" href=" '. $car2->path .' ">
                        <a id="single_image" href=" '. $car2->path .' ">
                            <img src=" '. $car2->path .' " alt="" style="width:370px" />
                        </a>
                        </a>        
                </div>
                <div class="panel-body">
                    <table class="table">
                             <tbody><tr><td><b>Marke</td><th>' .$car2->brandname . '</th></tr>
                                 <tr><td><b>Modell</td><th>'.$car2->model .'</th></tr>
                                 <tr><td><b>Preis in $</td><th>'.$car2->price.'</th></tr>
                                 <tr><td><b>PS</td><th>'.$car2->ps.'</th></tr>
                                 <tr><td><b>Höchstgeschwindigkeit in km/h</td><th>'.$car2->topspeed.'</th></tr>
                                 <tr><td><b>0 bis 100km/h</td><th>'.$car2->ztoh.'</th></tr>
                                 <tr><td><b>Treibstoff</td><th>'.$car2->fuel.'</th></tr>
                                 <tr><td><b>Anzahl Sitze</td><th>'.$car2->seats.'</th></tr></tbody>
                         </table> 
                    ';
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="panel panel-container" id="entry3">
            <div class="panel-full">
                <div class="panel-top">
                    <select name="brandname3">
                        <option <?php if($selectedBrand3 == 'Audi'){echo("selected");}?> value="Audi">Audi</option>
                        <option <?php if($selectedBrand3 == 'Lamborghini'){echo("selected");}?> value="Lamborghini">Lamborghini</option>
                        <option <?php if($selectedBrand3 == 'Mercedes'){echo("selected");}?> value="Mercedes">Mercedes</option>
                        <option <?php if($selectedBrand3 == 'Porsche'){echo("selected");}?> value="Porsche">Porsche</option>
                        <option <?php if($selectedBrand3 == 'Tesla'){echo("selected");}?> value="Tesla">Tesla</option>
                    </select>
                    <select name="model3">
                        <option <?php if($selectedModel3 == 'Huracan'){echo("selected");}?>value="Huracan">Huracan</option>
                        <option <?php if($selectedModel3 == 'Panamera'){echo("selected");}?> value="Panamera">Panamera</option>
                        <option <?php if($selectedModel3 == 'RS7'){echo("selected");}?> value="RS7">RS7</option>
                        <option <?php if($selectedModel3 == 'Model X'){echo("selected");}?> value="Model ">Model X</option>
                        <option <?php if($selectedModel3 == 'AMG GT'){echo("selected");}?> value="AMG GT">AMG GT</option>
                    </select>


                    <?php
                    if (isset($_POST['submit'])) {
                        echo '<a data-fancybox="gallery" href=" '. $car3->path .' ">
                        <a id="single_image" href=" '. $car2->path .' ">
                            <img src=" '. $car2->path .' " alt="" style="width:370px" />
                        </a>
                        </a>        
                </div>
                <div class="panel-body">
                    <table class="table">
                             <tbody><tr><td><b>Marke</td><th>' .$car3->brandname . '</th></tr>
                                 <tr><td><b>Modell</td><th>'.$car3->model .'</th></tr>
                                 <tr><td><b>Preis in $</td><th>'.$car3->price.'</th></tr>
                                 <tr><td><b>PS</td><th>'.$car3->ps.'</th></tr>
                                 <tr><td><b>Höchstgeschwindigkeit in km/h</td><th>'.$car3->topspeed.'</th></tr>
                                 <tr><td><b>0 bis 100km/h</td><th>'.$car3->ztoh.'</th></tr>
                                 <tr><td><b>Treibstoff</td><th>'.$car3->fuel.'</th></tr>
                                 <tr><td><b>Anzahl Sitze</td><th>'.$car3->seats.'</th></tr></tbody>
                         </table>
                    ';
                    }
                    ?>
                </div>
            </div>
        </div>
        <input type="submit" name="submit" class="submit" value="Select"/>
</form>


<div id="plus" class="btnArea">
    <h3 class="addcarText">Füge ein weiteres Fahrzeug hinzu</h3>
    <button class="addcomparison" id="addnewForm" onClick="addCar()">+</button>
</div>
</div>
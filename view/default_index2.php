<?php
if (isset($_POST['submit'])) {
    $selectedBrand =$car->brandname;
    $selectedModel =$car->model;
}
else{
    $selectedBrand = 'Audi';
    $selectedModel = 'RS7';
}
?>
<script type="text/javascript" src="js/script.js"></script>
<script>
    $(document).ready(function(e) {
        $("#addnewForm").click(function(e) {

            var html ="";

                $("#completeForm").append(html)
        });
    })

</script>



<div class="container" id="completeForm">
     <div class="panel panel-container" id="entry1">
           <form method="POST" id="form" action="/default/doShow">
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
                </select><input type="submit" name="submit" class="submit" value="Select"/>


            <?php
            if (isset($_POST['submit'])) {
                echo '
                <a data-fancybox="gallery" href=" '. $car2->path .' ">

                    
                        <a id="single_image" href=" '. $car2->path .' ">
                            <img src=" '. $car2->path .' " alt="" style="width:370px" />
                        </a>
                </div>
                    <div class="panel-body">
                    <table class="table">
                             <tbody>
                                 <tr>
                                     <td><b>Marke</td>
                                     <th>' .$car2->brandname . '</th>
                                 </tr>
                                 <tr>
                                     <td><b>Modell</td>
                                     <th>
                                     '.$car2->model .'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>Preis in $</td>
                                     <th>
                                     '.$car2->price.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>PS</td>
                                     <th>
                                     '.$car2->ps.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>Höchstgeschwindigkeit in km/h</td>
                                     <th>
                                     '.$car2->topspeed.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>0 bis 100km/h</td>
                                     <th>
                                     '.$car2->ztoh.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>Treibstoff</td>
                                     <th>
                                     '.$car2->fuel.'
                                     </th>  
                                 </tr>
                                 <tr>
                                     <td><b>Anzahl Sitze</td>
                                     <th>
                                     '.$car2->seats.'
                                     </th>
                                 </tr>
                             </tbody>
                         </table>
                     <style>.panel{height: 650px;}
                     .panel-top{min-height: 300px;
                     max-height:400px;}
                     
                     </style>     
                    ';
            }
            ?>
            </div>
            </div>
        </form>
    </div>
    <div class="panel panel-container" id="entry1">
        <form method="POST" id="form" action="/default/doShow2">
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
                    </select><input type="submit" name="submit" class="submit" value="Select"/>


                    <?php
                    if (isset($_POST['submit'])) {
                        echo '
                <a data-fancybox="gallery" href=" '. $car3->path .' ">

                    
                        <a id="single_image" href=" '. $car3->path .' ">
                            <img src=" '. $car3->path .' " alt="" style="width:370px" />
                        </a>
                </div>
                    <div class="panel-body">
                    <table class="table">
                             <tbody>
                                 <tr>
                                     <td><b>Marke</td>
                                     <th>' .$car3->brandname . '</th>
                                 </tr>
                                 <tr>
                                     <td><b>Modell</td>
                                     <th>
                                     '.$car3->model .'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>Preis in $</td>
                                     <th>
                                     '.$car3->price.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>PS</td>
                                     <th>
                                     '.$car3->ps.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>Höchstgeschwindigkeit in km/h</td>
                                     <th>
                                     '.$car3->topspeed.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>0 bis 100km/h</td>
                                     <th>
                                     '.$car3->ztoh.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>Treibstoff</td>
                                     <th>
                                     '.$car3->fuel.'
                                     </th>  
                                 </tr>
                                 <tr>
                                     <td><b>Anzahl Sitze</td>
                                     <th>
                                     '.$car3->seats.'
                                     </th>
                                 </tr>
                             </tbody>
                         </table>
                     <style>.panel{height: 650px;}
                     .panel-top{min-height: 300px;
                     max-height:400px;}
                     
                     </style>     
                    ';
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
    <form method="GET" action="/default/addForm2">
        <div class="btnArea">
        <h1 class="addcarText">Füge ein weiteres Fahrzeug hinzu</h1>
        <button class="addcomparison" id="addnewForm">+</button>
        </div>
    </form>



</div>


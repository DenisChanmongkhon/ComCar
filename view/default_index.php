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
                <a data-fancybox="gallery" href=" '. $car->path .' ">

                    
                        <a id="single_image" href=" '. $car->path .' ">
                            <img src=" '. $car->path .' " alt="" style="width:370px" />
                        </a>
                </div>
                    <div class="panel-body">
                    <table class="table">
                             <tbody>
                                 <tr>
                                     <td><b>Marke</td>
                                     <th>' .$car->brandname . '</th>
                                 </tr>
                                 <tr>
                                     <td><b>Modell</td>
                                     <th>
                                     '.$car->model .'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>Preis in $</td>
                                     <th>
                                     '.$car->price.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>PS</td>
                                     <th>
                                     '.$car->ps.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>Höchstgeschwindigkeit in km/h</td>
                                     <th>
                                     '.$car->topspeed.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>0 bis 100km/h</td>
                                     <th>
                                     '.$car->ztoh.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>Treibstoff</td>
                                     <th>
                                     '.$car->fuel.'
                                     </th>  
                                 </tr>
                                 <tr>
                                     <td><b>Anzahl Sitze</td>
                                     <th>
                                     '.$car->seats.'
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

            <button class="addcomparison" id="addnewForm">+</button>



</div>


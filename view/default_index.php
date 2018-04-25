<div class="container">
    <div class="panel panel-default">

        <form method="POST" id="form" action="/default/doShow">
            <div class="panel-top">

                <select name="brandname">
                    <option value="Audi">Audi</option>
                    <option value="Lamborghini">Lamborghini</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="Porsche">Porsche</option>
                    <option value="Tesla">Tesla</option>
                </select>
                <select name="model">
                    <option value="Huracan">Huracan</option>
                    <option value="Panamera">Panamera</option>
                    <option value="RS7">RS7</option>
                    <option value="Model X">Model X</option>
                    <option value="AMG GT">AMG GT</option>
                </select><input type="submit" name="submit" class="submit" value="Select"/>


            <?php
            if (isset($_POST['submit'])) {
                echo '
                    
                        <a data-fancybox="gallery" href=" '. $car->path .' ">

                    
                        <a id="single_image" href=" '. $car->path .' ">
                            <img src=" '. $car->path .' " alt="" style="width:370px" />
                        </a>
            </div>
                    <div class="panel-bottom">
                    <table class="table">
                             <tbody>
                                 <tr>
                                     <td><b>Make</td>
                                     <th>' .$car->brandname . '</th>
                                 </tr>
                                 <tr>
                                     <td><b>Model</td>
                                     <th>
                                     '.$car->model .'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>Price in $</td>
                                     <th>
                                     '.$car->price.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>HP / PS</td>
                                     <th>
                                     '.$car->ps.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>Top Speed in km/h</td>
                                     <th>
                                     '.$car->topspeed.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>0 To 100km/h</td>
                                     <th>
                                     '.$car->ztoh.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>Fuel</td>
                                     <th>
                                     '.$car->fuel.'
                                     </th>  
                                 </tr>
                                 <tr>
                                     <td><b>Seats</td>
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
        </form>
    </div>
    <form method="GET" id="form" action="/default/addForm">
        <div class="addform">
            <button class="addcomparison" >+</button>
        </div>
    </form>


</div>


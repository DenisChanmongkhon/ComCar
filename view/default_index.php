<article class="hreview open special">
    <div class="panel panel-default">
        <div class="panel-top">

            <h1><?php $carname ?></h1
        </div>
        <form method="POST" action="/default/doShow">
            <div class="panel-body">
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
                    <option value="GT-100">GT-100</option>
                    <option value="XR-80">XR</option>
                    <option value="RS100">RS100</option>
                </select><input type="submit" name="submit" class="submit" value="Select"/>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                echo '
                    <div>
                        <a data-fancybox="gallery" href=" '. $car->path .' ">
                            <img src=" '. $car->path .' " alt="" style="width:370px" />
                        </a>
                    </div>

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
                     <style>.panel{height: 600px;}
                     }
                     .submit{disabled}</style>     
                    ';
            }
            ?>
            <!--<table border='1'>
                       <td><b>Brand</td><td><b>model</td><td><b>price</td><td><b>ps</td><td><b>Topspeed</td><td><b>0 To 100</td><td><b>Fuel</td><td><b>Seats</td>
                </table> -->
        </form>
    </div>



</article>
<button class="addcomparison"></button>
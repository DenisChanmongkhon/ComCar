<article class="hreview open special">
    <div class="panel panel-default">
        <div class="panel-top">
            <div>
                <a data-fancybox="gallery" href="../images/huracan.png">
                    <img src="/images/huracan.png" alt="pic couldnt load" style="width:370px" />
                </a>
            </div>
            <div class="hidden">
                <a data-fancybox="gallery" href="../images/special.png">
                    <img src="../images/special.png" alt=""/>
                </a>
            </div>
            <h1><?php $carname ?></h1
        </div>
        <form method="POST" action="default/doShow">
            <div class="panel-body">
                <select name="brandname">
                    <option value="Abarth">Abarth</option>
                    <option value="Alfa Romero">Alfa Romero</option>
                    <option value="Aston Martin">Aston Martin</option>
                    <option value="Audi">Audi</option>
                    <option value="Bentley">Bentley</option>
                    <option value="BMW">BMW</option>
                    <option value="Citroen">Citroen</option>
                    <option value="Dacia">Dacia</option>
                    <option value="DS">DS</option>
                    <option value="Ferrari">Ferrari</option>
                    <option value="Fiat">Fiat</option>
                    <option value="Ford">Ford</option>
                    <option value="Honda">Honda</option>
                    <option value="Hyundai">Hyundai</option>
                    <option value="Infinity">Infinity</option>
                    <option value="Jaguar">Jaguar</option>
                    <option value="Jeep">Jeep</option>
                    <option value="Kia">Kia</option>
                    <option value="Lamborghini">Lamborghini</option>
                    <option value="Land Rover">Land Rover</option>
                    <option value="Lexus">Lexus</option>
                    <option value="Lotus">Lotus</option>
                    <option value="Maserati">Maserati</option>
                    <option value="Mazda">Mazda</option>
                    <option value="McLaren">McLaren</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="MG">MG</option>
                    <option value="Mini">Mini</option>
                    <option value="Mitsubischi">Mitsubischi</option>
                    <option value="Nissan">Nissan</option>
                    <option value="Peugot">Peugot</option>
                    <option value="Porsche">Porsche</option>
                    <option value="Renault">Renault</option>
                    <option value="SEAT">SEAT</option>
                    <option value="Skoda">Skoda</option>
                    <option value="Smart">Smart</option>
                    <option value="SsangYong">SsangYong</option>
                    <option value="Subaru">Subaru</option>
                    <option value="Susuki">Susuki</option>
                    <option value="Tesla">Tesla</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Vauxhall">Vauxhall</option>
                    <option value="Volkswagen">Volkswagen</option>
                    <option value="Volvo">Volvo</option>
                </select>
                <select name="model">
                    <option value="Huracan">Huracan</option>
                    <option value="MX-900">MX-900</option>
                    <option value="GT-100">GT-100</option>
                    <option value="XR-80">XR</option>
                    <option value="RS100">RS100</option>
                </select><input type="submit" name="submit" class="submit" value="Select"/>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                echo '
                    <table class="table table-condensed table-bordered neutralize">
                             <tbody>
                                 <tr>
                                     <td><b>Brandname</td>
                                     <th>' .$car->brandname . '</th>
                                 </tr>
                                 <tr>
                                     <td><b>Model</td>
                                     <th>
                                     '.$car->model .'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>Price</td>
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
                                     <td><b>Top Speed</td>
                                     <th>
                                     '.$car->topspeed.'
                                     </th>
                                 </tr>
                                 <tr>
                                     <td><b>0 To 100</td>
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
                               
                    ';
            }
            ?>
                       </div>
                           <div class="panel-tail">
                               <h4>More Details</h4>
                               <input type="button" value="+" class="showmore" data-toggle="" data-target="#navbar" aria-expanded="false" aria-controls="addcar">
                               </input>
                           </div>
                       </div>
            <!--<table border='1'>
                       <td><b>Brand</td><td><b>model</td><td><b>price</td><td><b>ps</td><td><b>Topspeed</td><td><b>0 To 100</td><td><b>Fuel</td><td><b>Seats</td>
                </table> -->
        </form>
    </div>

    <input type="button" value="+" class="addcomparison" data-toggle="" data-target="#navbar" aria-expanded="false" aria-controls="addcar">
    </input>

</article>
<article class="hreview open special">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div>
                        <a data-fancybox="gallery" href="../images/huracan.png">
                            <img src="/images/huracan.png" alt="pic couldnt load" style="width:330px" />
                        </a>
                        </div>
                        <h1> #carname</h1>

                    </div>
                    <div class="panel-body">
                        <select name="brandname">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                        <select name="model">
                            <option value="MX-900">MX-900</option>
                            <option value="GT-100">GT-100</option>
                            <option value="XR-80">XR</option>
                            <option value="RS100">RS100</option>
                        </select>
                        <?php
                        echo '
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Price</th>
                                    <th>PS</th>
                                    <th>Topspeed</th>
                                    <th>0 to 100</th>
                                    <th>Fuel</th>
                                    <th>Seats</th>
                                    
                                </tr>   
                            </thead>
                            <tr>
                                <td>'.$brandname["brandname"].'</td>
                                <td>'.$model["model"].'</td>
                            </tr>                   
                        </table>
                        ';
                        ?>
                        <p>
                        <h4>More Details</h4>
                        <button type="button" class="showmore" data-toggle="" data-target="#navbar" aria-expanded="false" aria-controls="addcar">
                        </button>
                        </p>


                    </div>
                    <button type="button" class="addcomparison" data-toggle="" data-target="#navbar" aria-expanded="false" aria-controls="addcar">

                    </button>
                </div>

</article>
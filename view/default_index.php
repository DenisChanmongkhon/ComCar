<article class="hreview open special">
<div class="row justify-content-around">
    <div class="carbox col-4">
        <div class="panel-body">
            <div>
                <a data-fancybox="gallery" href="../images/huracan.png">
                    <img src="/images/huracan.png" alt="pic couldnt load" style="width:330px" />
                </a>
            </div>
            <div class="hidden">
                <a data-fancybox="gallery" href="../images/special.png">
                    <img src="../images/special.png" alt=""/>
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
                        <table>
                            <tr>
                                <td>Brand</td>
                                <td>Model</td>
                            </tr>
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
    <div class="carbox col-4">
        <div class="panel-body">
            <div>
                <a data-fancybox="gallery" href="../images/huracan.png">
                    <img src="/images/huracan.png" alt="pic couldnt load" style="width:330px" />
                </a>
            </div>
            <div class="hidden">
                <a data-fancybox="gallery" href="../images/special.png">
                    <img src="../images/special.png" alt=""/>
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
                        <table>
                            <tr>
                                <td>Brand</td>
                                <td>Model</td>
                            </tr>
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
</div>

</article>
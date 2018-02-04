<?php

require_once(FS_TEMPLATES . 'templateEngine.php');

class mainFooterTemplate extends templateEngine
{
    public function __construct(){

        $temp = <<<HTML
<div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-8">
                <h2>Welcome</h2>
                <p>Resort Review is known for providing up to date and accurate information on the premier resorts in North America.  Founded by a bunch of
                    ski bums who couldn't get a real job, the site has grown to the industry leader . We ski on the same snow that you do and want to get the most bang for the buck . We don't take advertising money. We don't want temptation to sneak in and compromise our reviews .
                </p >
            </div >
            <div class="col-md-4" >
                <h2 > Top Resorts </h2 >
                <p > These are the top 10:
                <ol >
                    <li ><a href = "#" > Killington</a ></li >
                    <li ><a href = "#" > Aspen</a ></li >
                    <li ><a href = "#" > Whistler</a ></li >
                    <li ><a href = "#" > Park City </a ></li >
                    <li ><a href = "#" > Copper Mtn </a ></li >
                    <li ><a href = "#" > Heavenly</a ></li >
                    <li ><a href = "#" > Lake Placid </a ></li >
                    <li ><a href = "#" > Mount Snow </a ></li >
                    <li ><a href = "#" > Seven Springs </a ></li >
                </ol >
                </p >
            </div >

        </div >
    </div > <!-- /container-->




</main>

<footer class = "container footer">
<p>&copy;
Ski Bums LLC 2017-2018 All rights reserved.</p>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity = "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin = "anonymous"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity = "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin = "anonymous"></script>
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin = "anonymous"></script>
</body>
</html>
HTML;

        $this->template = $temp;
    }



}
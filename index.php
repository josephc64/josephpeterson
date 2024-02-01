<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php
    // Include scripts or whatever here
?>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X UA-Compatible" conmtent="IE-edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
        <link rel="icon" type="image.png" href="img/favicon.png" />
        <title>Joseph Peterson</title>
    </head>

    <body onload="loadPage()" style="margin:0;">
        <div id="loader"></div>
        
        <!-- Loading spinner for the page -->
        <script>
            var loadTimeOut;
            
            function loadPage() {
                loadTimeOut = setTimeout(showPage, 3000);
            }

            function showPage() {
                document.getElementById("loader").style.display="none";
                document.getElementById("siteWrapper").style.display="block";
            }
        </script>

        <div style="display:none;" id="siteWrapper" class="animate-bottom">

            <div class="image-header">
                <img src="img/space.png" style="width:100%; height:auto; border-bottom:10px solid red;">
                <div class="topLeftLogo">
                    <img src="img/jp.png" style="width:10%; height:auto;">
                </div>
                <div class="centerLeftText">
                    <h1>Joseph Peterson</h1>
                    <h3>Simple, innovative and secure design for the modern web</h3>
                </div>
                <div class="centerRightLinks"></div>
            </div>

            <!-- Put another section here -->

            <!-- Do something else -->

            <!-- Maybe another section -->

            <!-- Footer probably -->

        </div>
    </body>
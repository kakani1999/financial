<!DOCTYPE html>
<html lan="en">
    <head>
        <title>Finsegg</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Finance data, Finance data analysis">
        <meta name="description" content="Financial data analyser">
        <link rel="stylesheet"  href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script defer src="script.js"></script>
        <style>
            .result{
                font-size: larger;
                font-family: sans-serif;
                font-weight: bolder;
                align-items: center;
                justify-content: center;
                border-bottom: 5px solid pink;
            }
        </style>
    </head>
    <body>
        <div class="result">

        <?php


        $wct=$_POST['wct'];
        $itr=$_POST['itr'];
        $tr=$_POST['tr'];
        /*
        $wct=34;
        $itr=56;
        $tr=35;
        */
        $result=$wct+$itr+$tr;
        echo "Result is" . $result;
        
        
        ?>
        </div>
    
   
    </body>
</html>